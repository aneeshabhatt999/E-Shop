<?php 
    session_start();
    require_once 'db.inc.php';
    $status = 0;
    $template = 1;
    $email = '';
    $password = '';
    $confirm_password = '';
    $name = '';
    $question = '';
    $answer = '';
    $address='';
    $city = '';
    $country = '';
    $mobile_number = '';
    if($_SERVER['REQUEST_METHOD']=='POST'){ 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $name = $_POST['name'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $mobile_number = $_POST['mobile_number'];
        
        $str = str_shuffle('gierwtgudfkjUITYFPEGVUR745698DE786WTR43874369');
        $password = sha1($password);
        $query = "insert into users values('$email','$password','member','$name','$question','$answer','$address','$city','$country','$mobile_number',1,'$str')";
        mysqli_query($link, $query);       
        $template = 2;
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
                    <?php if($template==1) { ?>
                    <form action="register.php" method="post">
                        <table cellpadding="5">
                            <tr>
                                <td>Email ID : </td>
                                <td><input type="text" name="email" value="" /></td>
                            </tr>
                            <tr>
                                <td>Password : </td>
                                <td><input type="password" name="password" value="" /></td>
                            </tr>
                            <tr>
                                <td>Confirm Password : </td>
                                <td><input type="password" name="confirm_password" value="" /></td>
                            </tr>
                            <tr>
                                <td>Name : </td>
                                <td><input type="text" name="name" value="" /></td>
                            </tr>
                            <tr>
                                <td>Question : </td>
                                <td><input type="text" name="question" value="" /></td>
                            </tr>
                            <tr>
                                <td>Answer : </td>
                                <td><input type="text" name="answer" value="" /></td>
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
                                    <input type="submit" value="Register Me" />
                                </td>
                            </tr> 
                        </table>
                    </form>
                    <?php } ?>
                    <?php if($template==2) { ?>
                    <h2>Your registration is successful.</h2>
                    <h3>An email has been sent to your email ID.<br>
                    Please click the link to activate your login.</h3>
                    <br>
                    <a href="login.php" class="link-style">Login</a>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td>
            </tr>
        </table>
    </body>
</html>