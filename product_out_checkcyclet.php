<?php
require_once("../library/db.php");
?>
<html>
<head>
<meta http-equiv='Content-Language' content='fa'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>


<?php
$engine=$_GET['enginenum'];
$engineid=$_GET['engineid'];

		
					//Getting all transactions which have type in
					$sql1="Select * from production where engine='$engine' and status!='sold' and status!='pending' and status!='onsell'";
					$result1=mysql_query($sql1) or die(mysql_error());
					$r1=mysql_fetch_array($result1);
					$sql2="select product_id from stock_transactions where engine_shasyid='$r1[id]' and bill_id='$r1[bill_id]' and (parent_id='0' or parent_id='')";
					$rs2=mysql_query($sql2) or die (mysql_error());
					$rw2=mysql_fetch_array($rs2);
					//Getting the product name
					$sql3="select id, name from products where id='$rw2[product_id]'";
					$rs3=mysql_query($sql3) or die (mysql_error());
					$rw3=mysql_fetch_array($rs3);
					$enginenum=$engine;
					if($r1['id']!=""){
						$enginenum=$r1['engine'];
						$shasynum=$r1['shasy'];
						$productname=$rw3['name'];
						$productid=$rw3['id'];

						$print="<iframe height='0' width='0' src='product_out_printengine.php?id=$r1[id]' name='frame$r1[id]'></iframe>
<img src='img/print.png' onclick='frames[\"frame$r1[id]\"].print()' style='margin-right:10px' />";
					}else{
						$shasynum="موجود نیست!";
						$productname="موجود نیست!";
						$print="موجود نیست!";
						$productid=0;
					}
					
					echo " نمبر شاسی:  $shasynum  <b style='color:red'> | </b>    مدل موتور:  $productname  <b style='color:red'> | </b>   $print
					<input type='hidden' name='productname2[]' id='productname2[]' value='$productid' />
					<input type='hidden' name='engineid[]' id='engineid[]' value='$r1[id]'/>
					<input type='hidden' name='engine1[]' id='$engineid' value='$r1[engine]'/>
					";
?>



</html>