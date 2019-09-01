<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        require_once 'db.inc.php';
        $product_id = $_REQUEST['product_id'];
        $quantity = $_REQUEST['quantity'];
        $result = mysqli_query($link, "select * from products where product_id=$product_id");
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $price = $row['price'];
        $total = $price*$quantity;
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        $_SESSION['cart'][$product_id] = array(
            'product_id' => $product_id,
            'name' => $name,
            'price' => $price,
            'quantity' => $quantity,
            'total' => $total
        );
    }
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
                <td width="850" valign="top">
                    <h2 style="text-align: center">Your Cart</h2>
                    <table width="100%" border="0" cellspacing="10px">
                        <tr>
                            <th>S.No.</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        
                        <?php 
                            $i = 1;
                            foreach ($_SESSION['cart'] as $product) { 
                        ?>
                        <tr>
                            <td class="big"><?php echo $i++;?></td>
                            <td class="big"><?php echo $product['name'];?></td>
                            <td class="big">Rs.<?php echo $product['price'];?>/=</td>
                            <td class="big"><?php echo $product['quantity'];?></td>
                            <td class="big">Rs.<?php echo $product['total'];?>/=</td>
                            <td class="big"><a class="link-style" href="deleteproduct.php?product_id=<?php echo $product['product_id'];?>">Remove Item</a></td>
                        </tr>
                        <?php } ?>
                        
                    </table>
                    <p style="text-align: right;">
                        <a class="link-style" href="index.php">Continue Shopping</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="link-style" href="checkout.php">Checkout</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td></td>
            </tr>
        </table>
    </body>
</html>