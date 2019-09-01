<?php
    session_start();
    $product_id = $_REQUEST['product_id'];
    unset($_SESSION['cart'][$product_id]);
    header('Location: cart.php');
?>

