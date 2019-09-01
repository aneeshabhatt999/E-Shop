<?php 
    session_start();
    require_once 'db.inc.php';
    $email = '';
    $name = '';
    $address='';
    $city = '';
    $country = '';
    $mobile_number = '';
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
        $email = $_POST['email'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $mobile_number = $_POST['mobile_number'];
        $query = "insert into guests(email,name,address,city,country,mobile_number) values('$email','$name','$address','$city','$country','$mobile_number')";
        mysqli_query($link, $query); 
        $_SESSION['info']=array();
        $_SESSION['info']['email'] = $email;
        $_SESSION['info']['name'] = $name;
        $_SESSION['info']['address'] = $address;
        $_SESSION['info']['city'] = $city;
        $_SESSION['info']['country'] = $country;
        $_SESSION['info']['mobile_number'] = $mobile_number;
        header('Location: confirm_order.php');
    }    
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
                <td width="150" bgcolor="#86AEDF">
                    <?php require_once './main_menu.php';?>
                </td>
                <td width="850" align="center">
                    <form action="guest_details.php" method="post">
                        <table cellpadding="5">
                            <tr>
                                <td>Email ID : </td>
                                <td><input type="text" name="email" value="" /></td>
                            </tr>
                            <tr>
                                <td>Name : </td>
                                <td><input type="text" name="name" value="" /></td>
                            </tr>
                            <tr>
                                <td valign="top">Address : </td>
                                <td><textarea name="address" rows="3" cols="40"></textarea></td>
                            </tr>
                            <tr>
                                <td>City : </td>
                                <td><input type="text" name="city" value="" /></td>
                            </tr>
                            <tr>
                                <td>Country : </td>
                                <td><input type="text" name="country" value="" /></td>
                            </tr>   
                            <tr>
                                <td>Mobile Number : </td>
                                <td><input type="text" name="mobile_number" value="" /></td>
                            </tr> 
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" value="Go to Checkout" />
                                </td>
                            </tr> 
                        </table>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td>
            </tr>
        </table>
    </body>
</html>