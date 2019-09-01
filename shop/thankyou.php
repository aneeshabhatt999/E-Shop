<?php 
    session_start();
    require_once 'db.inc.php';
    $cart = $_SESSION['cart'];
    $info = $_SESSION['info'];
    $email = $info['email'];
    $amount = 0;
    foreach ($cart as $product) {
        $amount += $product['total'];
    }
    $order_date = date('Y-m-d');
    mysqli_query($link, "insert into orders(email,order_date,amount) values('$email','$order_date',$amount)");
    $result = mysqli_query($link, "select max(order_id) from orders");
    $row = mysqli_fetch_array($result);
    $order_id = $row[0];
    foreach ($cart as $product) {
        $product_id = $product['product_id'];
        $name = $product['name'];
        $price = $product['price'];
        $quantity = $product['quantity'];
        mysqli_query($link, "insert into order_details(order_id,product_id,name,quantity,price) values($order_id,$product_id,'$name',$quantity,$price)");
    }
    unset($_SESSION['cart']);
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
                    <h3>Your Order is Confirmed</h3>
                    <h3>Your Order Id is <?php echo $order_id?></h3>
                    <p>Please deposit a demand draft of Rs.<?php echo $amount;?>/= in This....</p>
                    <p>Your order will be shipped in 3-4 working days after receiving the Money.</p>
                    <a href="index.php" class="link-style">Home Page</a>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td></td>
            </tr>
        </table>
    </body>
</html>