<table width="100%" height="100" border="0" bgcolor="#86AEDF">
    <tr>
        <td width="28%"><img src="images/shop.png" width="240" height="110" /></td>
        <td width="72%"><div align="right" class="banner">MyShoppingSite</span></div></td>
    </tr>
    <tr>

    </tr>
</table>
<?php
    if(isset($_SESSION['login'])){
?>
<table width="100%">
    <tr> 
        <td align="right" style="font-size: 15px;">
            Welcome - <?php echo $_SESSION['name'];?>
        </td>
    </tr>      
</table>        
<?php
    }
?>
