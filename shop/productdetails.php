<?php 
    session_start();
    require_once 'db.inc.php';
    $product_id = $_REQUEST['product_id'];
    $result = mysqli_query($link, "select * from products where product_id=$product_id");
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>www.myshoppingsite.com</title>
        <link rel="stylesheet" href="css/mystyle.css" type="text/css" />
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
                <td width="850">
                    <table width="100%" border="0" cellspacing="10px">
                        <tr>
                            <td rowspan="4"  align="center">
                                <img height="250" width="200" src="images/products/<?php echo $row['photo'];?>">
                            </td>
                            <td style="font-size: large;">
                                <?php echo $row['name'];?>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: small;">
                                Price(Rs.) : <?php echo $row['price'];?>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: small;">
                                <?php echo $row['description'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form action="cart.php" method="post">
                                    Quantity : 
                                    <input type="text" name="quantity" value="1" />
                                    <input type="submit" value="Add To Cart" />
                                    <br>
                                    <br>
                                    <a href="#" onclick="history.go(-1);" class="link-style">Go Back</a>
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td></td>
            </tr>
        </table>
    </body>
</html>