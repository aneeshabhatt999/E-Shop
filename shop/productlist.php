<?php 
    session_start();
    require_once 'db.inc.php';
    $category_id = $_REQUEST['category_id'];
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
                        <?php 
                            $result = mysqli_query($link, "select * from products where category_id=$category_id");
                            $i=0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                if($i%3==0) echo '<tr>';
                        ?>
                        <td>
                            <table width="100%" cellpadding="5px">
                                <tr><td align="center" style="font-size: large;"><?php echo $row['name'];?></td></tr>
                                <tr><td align="center">
                                        <img height="125" width="125" src="images/products/<?php echo $row['photo'];?>">
                                    </td>
                                </tr>
                                <tr><td align="center" style="font-size: large;">Rs.<?php echo $row['price'];?>/=</td></tr>
                                <tr><td align="center"><a href="productdetails.php?product_id=<?php echo $row['product_id'];?>" class="link-style">View Details</a></td></tr>
                            </table>
                        </td>
                            <?php 
                                $i++;
                                if($i%3==0) echo '</tr>';
                                } 
                            ?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php require_once 'footer.php';?></td></td>
            </tr>
        </table>
    </body>
</html>