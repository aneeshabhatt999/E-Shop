<?php 
    session_start();
    require_once 'db.inc.php';
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
                    <div>
                    <h3>Already a Member</h3>
                    <a href="login.php" class="link-style">Login</a>
                    <h3>Become a Member</h3>
                    <a href="register.php" class="link-style">Register</a>
                    </div>
                    <h3>Continue as Guest</h3>
                        <a href="guest_details.php" class="link-style">Continue</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td>
            </tr>
        </table>
    </body>
</html>