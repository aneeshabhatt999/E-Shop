
<table width="150" border="0" align="center" cellspacing="5">
<tr>
	<td height="40" bgcolor="#AE62AC" align=center >
	<a href="index.php" >Home</a>
	</td>
</tr>
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
	<a href="index.php">Categories</a>
	</td>
</tr>
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
	<a href="search.php">Search</a>
	</td>
</tr>
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
	<a href="new_products.php" align=center>New Arrivals </a>
	</td>
</tr>
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
	<a href="contact_us.php">Contact Us </a>
	</td>
</tr>
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
	<a href="about_us.php">About Us </a>
	</td>
</tr>
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
            <?php
                if(isset($_SESSION['cart'])) { 
                    $count = count($_SESSION['cart']);
            ?>
            <a href="cart.php">Cart (<?php echo $count;?> Items)</a>
            <?php
                } else {
            ?>
            <a href="cart.php">Cart (0 Items)</a>
            <?php } ?>
        </td>
</tr>

<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
	<a href="register.php">Register</a>
	</td>
</tr>
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
	<a href="faqs.php">FAQs</a>
	</td>
</tr>
<!-- <tr>
	<td height="40" bgcolor="#AE62AC" align=center>&nbsp;</td>
</tr> -->
<tr>
	<td height="40" bgcolor="#AE62AC" align=center>
            <?php
                if(!isset($_SESSION['login'])){
            ?>
            <a href="login.php">Login </a>
            <?php }else{ ?>
            <a href="logout.php">Logout </a>
            <?php } ?>
        </td>
            
</tr>
</table>
