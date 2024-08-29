<?php
require_once("../library/db.php");
?>
<html>
<head>
<meta http-equiv='Content-Language' content='fa'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>

<table id='table' border='5px' width="50%" dir="rtl">
<tr>
<th width="200px">مدل موتور</th>
<th width="120px">نمبر انجین</th>
<th width="120px">نمبر شاسی</th>
</tr>
<?php
	$productid=$_GET['id'];
	$sql="select *from production where id='$productid' ";
	$rs=mysql_query($sql) or die (mysql_error());
	$rw=mysql_fetch_array($rs);
	$sql="select name from products where id='$rw[product_id]'";
	$rsproduct=mysql_query($sql) or die (mysql_error());
	$rwproduct=mysql_fetch_array($rsproduct);
	echo "<tr><td>$rwproduct[name]</td><td>$rw[engine]</td><td>$rw[shasy]</td></tr>";
?>
<tr><td colspan='3' align="center" >نرم افزار گدام داری هرات هاست 0799431212</td></tr>


</table>
</html>