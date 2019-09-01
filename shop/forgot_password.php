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
                <td width="850">
                    <table width="100%" border="0">

                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td>
            </tr>
        </table>
    </body>
</html>