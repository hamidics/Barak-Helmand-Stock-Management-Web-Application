<?php
require_once("../library/db.php");
?>
<html>
<head>
<meta http-equiv='Content-Language' content='fa'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>


<?php
	$productid=$_GET['product'];
	$sql="select *from products where id='$productid' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	
	echo "
	<div><h3 class='ico_mug'> پرزه های مشخص شده برای  $row[name]:</h2>
	<div id='tabledata' class='section'>
	";
	if($row['category_id']==1){
	$sql="select *from products where category_id='2'";
	}else if($row['category_id']==2){
	$sql="select *from products where category_id='3'";
	}
	$result=mysql_query($sql) or die (mysql_error());
	echo "<table width='70%'>";
	$i=1;
	$status;
	while($rowporze=mysql_fetch_array($result)){
	$sql="select count(id), amount from product_dependants where buy_main_id='$productid' and sub_id='$rowporze[id]'";
	$res=mysql_query($sql) or die (mysql_error());
	$r=mysql_fetch_array($res);
	if($r['count(id)']>0){
	$status='checked';
	}else{
	
	$status='unchecked';
	}
	if($i%2){
			echo "<tr style='background:#ECFCFD'><td width='20%' >$rowporze[name]</td><td width='30%'><input type='text' value='$r[amount]' name='amount[]' id='amount$i' class='validate[custom[integer]]' /><input type='checkbox' ".$status." value='$rowporze[id]' name='porzeval[]'/></td><td width='3%'></td>";
	}
	else{
	echo "<td width='20%'>$rowporze[name]</td><td width='30%'><input type='text' value='$r[amount]' name='amount[]' id='amount$i' class='validate[custom[integer]]' /><input type='checkbox' ".$status." value='$rowporze[id]' name='porzeval[]' /></td></tr>";
	echo "<tr> <td colspan='5'><hr style='color:pink' width='800px'></td></tr>";
	}
	
	$i++;
	}
echo "<tr>
<td colspan='5'></br></br><input type='submit' value='ذخیره کردن' name='updateporze' style='border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:120px; margin-right:200px'  onmouseover='this.style.background=\"#252527\"' onmouseout='this.style.background=\"#5e6062\"'/><input type='submit' value='انصراف' style='border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:120px; '  onmouseover='this.style.background=\"#252527\"' onmouseout='this.style.background=\"#5e6062\"' name='cancel'/></td>
</tr>

</table>
<input type='hidden' value='$i' name='numofcols'/>
<input type='hidden' value='$_GET[product]' name='productid'/>
</div>";

?>



</html>