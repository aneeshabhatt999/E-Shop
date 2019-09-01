<?php 
    session_start();
    require_once 'db.inc.php';
    $error = 0;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $query = "select * from users where email='$email' and password='$password'";
        $result = mysqli_query($link,$query);
        if(mysqli_num_rows($result)==0){
            $error = 1;
        }
        else{
            $row = mysqli_fetch_assoc($result);
            if($row['verified']==0){
                $error=2;
            }else{
                $_SESSION['login'] = 1;
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['role_name'] = $row['role_name'];
                if($row['role_name']=='admin'){
                    header('Location: admin/index.php');
                }else{
                    $_SESSION['info']=array();
                    $_SESSION['info']['email'] = $row['email'];
                    $_SESSION['info']['name'] = $row['name'];
                    $_SESSION['info']['address'] = $row['address'];
                    $_SESSION['info']['city'] = $row['city'];
                    $_SESSION['info']['country'] = $row['country'];
                    $_SESSION['info']['mobile_number'] = $row['mobile_number'];
                    if(isset($_SESSION['checkout'])){
                        header('Location: confirm_order.php');
                    }else{
                        header('Location: member/index.php');
                    }
                }
            }
        }
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
                    <form action="login.php" method="POST" style="width: 40%;">
                    <fieldset>
                        <legend>Login Form</legend>
                        <table cellpadding="10">
                            <tbody>
                                <tr>
                                    <td>Email ID : </td>
                                    <td><input type="text" name="email" value="ndhagarra@gmail.com" required /></td>
                                </tr>
                                <tr>
                                    <td>Password : </td>
                                    <td><input type="password" name="password" value="abc#123" required /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right">
                                        <input type="submit" value="Login" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    </form>
                    <?php if($error==1) { ?>
                    <h2 class="error">The Email /Password is Incorrect</h2>
                    <?php } else if($error==2) { ?>
                    <h2 class="error">The Email has not been verified.</h2>
                    <?php }  ?>
                    <br>
                    <br>
                    <a href="forgot_password.php" class="link-style">Forgot Password</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="register.php" class="link-style">Register</a>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td>
            </tr>
        </table>
    </body>
</html>