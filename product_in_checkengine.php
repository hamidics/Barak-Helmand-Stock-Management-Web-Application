<?php
require_once("../library/db.php");
?>
<html>
<head>
<meta http-equiv='Content-Language' content='fa'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>


<?php
	$enginenumber=$_GET['engine'];
	
	$sql="select count(id) from production where engine='$enginenumber' ";
	$res=mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_array($res); 
	
	if($row['count(id)']==0){
		echo "<input type='hidden' id='$_GET[enginedbid]'  value=''/>";
	}else{
		echo "<input type='hidden' id='$_GET[enginedbid]' name='$_GET[enginedbid]' value='$enginenumber'/>";
	}
	
?>


</html>