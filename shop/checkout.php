<?php
    session_start();
    $_SESSION['checkout'] = 1;
    if(isset($_SESSION['login'])){
        header('Location: confirm_order.php');
    }
    else{
        header('Location: options.php');
    }
?>