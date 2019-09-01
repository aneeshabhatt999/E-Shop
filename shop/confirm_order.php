<?php 
    session_start();
    $amount = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>www.myshoppingsite.com</title>
        <link rel="stylesheet" href="css/mystyle.css" type="text/css" />
        <style>
            td.big{
                padding: 10px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table width="1000" border="0" align="center">
            <tr>
                <td colspan=2><?php require_once 'header.php';?></td>
            </tr>
            <tr>
                <td valign="top" width="150" bgcolor="#86AEDF">
                    <?php require_once 'main_menu.php';?></td>
                </td>
                <td width="850" valign="top" align="center">
                    <h2 style="text-align: center">Your Cart</h2>
                    <table width="100%" border="0" cellspacing="10px">
                        <tr>
                            <th>S.No.</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        
                        <?php 
                            $i = 1;
                            foreach ($_SESSION['cart'] as $product) {
                                $amount += $product['total'];
                        ?>
                        <tr>
                            <td class="big"><?php echo $i++;?></td>
                            <td class="big"><?php echo $product['name'];?></td>
                            <td class="big">Rs.<?php echo $product['price'];?>/=</td>
                            <td class="big"><?php echo $product['quantity'];?></td>
                            <td class="big">Rs.<?php echo $product['total'];?>/=</td>
                        </tr>
                        <?php } ?> 
                        <tr>
                            <td colspan="5" align="right">
                                Total Amount : Rs.<?php echo $amount;?>/=
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <table>
                        <tr>
                            <td>Your Order will be shipped to the following Address</td>
                        </tr>
                        <tr>
                            <td>
                                <?php echo $_SESSION['info']['name'];?><br>
                                <?php echo $_SESSION['info']['address'];?><br>
                                <?php echo $_SESSION['info']['city'];?><br>
                                <?php echo $_SESSION['info']['country'];?><br>
                            </td>
                        </tr>
                    </table>
                    <p style="text-align: right;">
                        <a class="link-style" href="thankyou.php">Confirm Order</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td></td>
            </tr>
        </table>
    </body>
</html>