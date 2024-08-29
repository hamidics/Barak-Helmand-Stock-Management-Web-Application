<?php
include("template_header.php");
require_once '../library/pdate.php';
?>

<Script>

function getProductInfo(pid,pcat)
{
var divid="";
if(pcat==1){
divid='editcompletecyclets';
}else if(pcat==2 || pcat==3){
divid='editporzecyclets';
}


	if (pid=='')
  		{
  			document.getElementById(divid).innerHTML='';
 			 return;
 		 } 
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
 		 }
		else
		  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
 		 }
			xmlhttp.onreadystatechange=function()
			  {
 			 if (xmlhttp.readyState==4 && xmlhttp.status==200)
 			   {
					document.getElementById(divid).innerHTML=xmlhttp.responseText;    }
			  }
			 
				xmlhttp.open('GET','product_editajax.php?product='+pid+"&catid="+pcat,true);
				xmlhttp.send();
				
				
}
function getPozeInfo(pid, type)
{

divid="product_buyprozediv";

	if (pid=='')
  		{
  			document.getElementById(divid).innerHTML='';
 			 return;
 		 } 
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
 		 }
		else
		  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
 		 }
			xmlhttp.onreadystatechange=function()
			  {
 			 if (xmlhttp.readyState==4 && xmlhttp.status==200)
 			   {
					document.getElementById(divid).innerHTML=xmlhttp.responseText;    }
			  }
			 
				xmlhttp.open('GET','product_getporzeajax.php?product='+pid+'&type='+type,true);
				xmlhttp.send();
				
				
}		
</script>

	    <div id="content" >
	    <div id="top_menu" class="clearfix">
		<ul class="sf-menu"> <!-- DROPDOWN MENU -->
			<div style='align:middle;margin-top:0px;margin-left:5px'>
			<li class="current">
				<img width='24' style='cursor:pointer;margin-top:5px;margin-left:10px' onclick="window.open('homepage.php','_parent')" height='24' src='img/home.png'/>
				<!-- First level MENU -->
			</li>
			<li class='current'>
				<img width='34' style='cursor:pointer;margin-left:0px;margin-top:2px' onclick='history.back()' height='34' src='img/back3.png'/>
			</li>
			</div>
		</ul>
					</div>
			<?php
				$sql="select * from bills where id='$_GET[viewid]'";
				$rs=mysql_query($sql) or die (mysql_error());
				$rw=mysql_fetch_array($rs);
			?>
		<div id="content_main" class="clearfix">
		<div align="right" dir="rtl">
		<form method="post" accept-charset="utf-8" id="myform"  class="formular" action="product_in_bills.php?viewid=<?php echo $rw['id'];?>">
			<fieldset>
			
<legend align="right"><span >کد بل: <?php echo $rw['code'];?>  | تاریخ ایجاد: <?php echo $rw['created_at'];?>  <a style='color:blue; font-size:13px' href='product_in.php#tabs-3'>--بازگشت به صفحه قبل> </a></span></legend>
				
				
				<?php
				$check=1;
					if($rw['type']=="cyclet" || $rw['type']=="cycletmontazh" and $rw['status']!="accepted"){
				?>
				<a href="#" id="addlink" onclick="jQuery('#myform').validationEngine('hide')"><b>اجناس کمبودی در این بل</b></a>
				<a href="#" id="addlinkback" onclick="jQuery('#myform').validationEngine('hide')"><b>اجناس کمبودی در این بل</b></a>
				<input type="button" style=" width:20px; background-color:white; border:0;background-image:url(img/back.png)" /></br>
				<div id="addlinkdata">
				<table width="50%" id="table" >
				<tr><th>شماره</th><th>نام جنس</th><th>تعداد کمبود</th></tr>
				<?php
				$sql="select  id, product_id from stock_transactions where bill_id='$rw[id]' and type='pending' and parent_id!='0' and parent_id!=''";
				$rs=mysql_query($sql) or die (mysql_error());
				$i=1;
				$check=1;
				while($rwcheck=mysql_fetch_array($rs)){
					
						$balance=0;
						//Counting number of pieces
						$sql1="Select SUM(quantity) from stock_transactions where  product_id='$rwcheck[product_id]' and type='in' ";
						$result1=mysql_query($sql1) or die(mysql_error());
						$r1=mysql_fetch_array($result1);
							
						$intransactions=$r1['SUM(quantity)']+0;
						//Getting all transactions which have type out
						$sql2="Select SUM(quantity) from stock_transactions where  product_id='$rwcheck[product_id]' and  type='out' ";
						$result2=mysql_query($sql2);
						$r2=mysql_fetch_array($result2);
						
						//Getting all transactions which have type out
						$sql2="Select SUM(quantity) from stock_transactions where  product_id='$rwcheck[product_id]' and  id='$rwcheck[id]' ";
						$result2=mysql_query($sql2);
						$r3=mysql_fetch_array($result2);
						
						$outtransactions=$r2['SUM(quantity)']+0;
						//Calculating the balance
						$balance=$intransactions-$outtransactions;
						$myarr[$i]=$balance;
						
						if($balance==0 || $balance=="" || $balance<$r3['SUM(quantity)']){
							$check=0;
							$sq="select code, name from products where id='$rwcheck[product_id]'";
							$rsproduct=mysql_query($sq) or die (mysql_error());
							$rwproduct=mysql_fetch_array($rsproduct);
							echo "<tr align='center'><td>$i</td>
							<td>($rwproduct[code] $rwproduct[code_cu]) - $rwproduct[name]</td><td>".($r3['SUM(quantity)']-$balance)."</td></tr>";
							$i++;
						}
					}
					
				
				
				echo "</table>
				</div>";
				}
				
				
				?>
				
				<div id="tabledata" class="section">
				<?php
				
					if($check==0 and $rw['status']!="accepted" ){
						echo "<div align='center'><b  style='color:red; font-size:14px;'>این بل قابل اجرا نمی باشد!  </b>";
					}else 
					if( $rw['status']=="accepted" and $check!=0){
						echo "<div align='center'><b  style='color:green; font-size:14px;'>این بل قبلا اجرا شده است!</b>";
					}
					else if($check!=0 and $rw['status']!="accepted") {
						echo "<div align='center'>
						تاریخ :
				<input type='text' name='created_at' id='created_at' class='validate[required,custom[date]]' style='width:200px' />
				<input type='button' style='background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px ' onclick='displayDatePicker(\"created_at\", this);'/>
				
						<input type='submit'width='100px' name='accept' id='accept' style='border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:130px;'  onmouseover='this.style.background=\"#252527\"' onmouseout='this.style.background=\"#5e6062\"' class='submit' value='اجرای بل'/>";
					}
				
				?>
				
				<a href="product_in_print.php?bill_id=<?php echo $rw['id']."&type=".$rw['type']."&code=".$rw['code']."&created_at=".$rw['created_at'];?>"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a>
				</div>
				<br/>
				<table width="90%" id="table" dir="rtl" >
				<tr>
				<th style="width:10%">شماره</th>
				<th >کد جنس</th>
				<th>نام جنس</th>
				<?php
				if($rw['type']=="porze" || $rw['type']=="uporze" || $rw['type']=="ccyclet"){
				?>
				<th>تعداد</th>
				<?php
				}else{
				?>
				<th>نمبر انجین</th>
				<th>نمبر شاسی</th>
				<?php
				}
				?>
				<th>عملیات</th>
				</tr>
				<?php
				$i=1;
				if($rw['type']=="cyclet" || $rw['type']=="cycletback" || $rw['type']=="cycletmontazh"){
				$sql="select id, engine, shasy from production where bill_id='$rw[id]'";
				}else{
				$sql="Select id, quantity, product_id from stock_transactions  where bill_id='$rw[id]' and (parent_id=0 || parent_id='')";
				}
				$res=mysql_query($sql);
				while($row=mysql_fetch_array($res)){
				if($rw['type']=="cyclet" || $rw['type']=="cycletback" || $rw['type']=="cycletmontazh"){
				$sq="select product_id from stock_transactions where engine_shasyid='$row[id]' and (parent_id='0' || parent_id='')";
				$rsp=mysql_query($sq) or die (mysql_error());
				$rwp=mysql_fetch_array($rsp);
				$sq="select * from products where id='$rwp[product_id]'";
				}else{
				$sq="select * from products where id='$row[product_id]'";
				}
				$rs=mysql_query($sq) or die (mysql_error());
				$rwp=mysql_fetch_array($rs);
				//Getting the type of motor to be produced
				$type="";
				if($rw['type']!="cyclet" and $rw['type']!="cycletback" and  $rw['type']!="cycletmontazh"){
					if($rwp['type']==1){
						$type="(مونتاژ)";
					}else if ($rwp['type']==2){
						$type="(نیمه مونتاژ)";
					}else if($rwp['type']==3){
						$type="(تکمیل)";
					}
				}
				echo 
				"<tr class='table_date' align='center'>
				<td>$i</td>
				<td width='15%'>".$rwp['code'].$r['code_cu']."</td>
				<td>".$rwp['name']." $type</td>";
				if($rw['type']!="cyclet" and $rw['type']!="cycletback" and  $rw['type']!="cycletmontazh"){
				echo "<td>".$row['quantity']."  $rwp[unit]</td>";
				}else{
				echo "<td>".$row['engine']."</td>";
				echo "<td>".$row['shasy']."</td>";
				}
				$querypurchase="Select *from stock_transactions where product_id='$row[id]'";
				$respurchase=mysql_query($querypurchase) or die(mysql_error());
				if($rw['status']!="pending"){
				echo "
				<td><img src='img/cancel1.png'/>";
				
				}
				else {
				echo "<td><a href='product_in_bills.php?delete= $row[id]&viewid=$rw[id]&pid=$rwp[id]' class='confirm'><img src='img/cancel.png'/></a>";
				
				}
				if($rw['type']=="cyclet" || $rw['type']=="cycletback" || $rw['type']=="cycletmontazh"){
				$print="<iframe height='0' width='0' src='product_out_printengine.php?id=$row[id]' name='frame$row[id]'></iframe>
<img src='img/print.png' onclick='frames[\"frame$row[id]\"].print()' style='margin-right:10px' />";
echo $print;
				}
				$rw['type'];
				echo "
				</td>
				</tr>";
				$i++;
				}
				
				?>
				
				</table>
				<?php
					if(isset ($_GET['delete'])){
						if($rw['type']=="porze" || $rw['type']=="ccyclet"){
							$sql="delete from stock_transactions where id='$_GET[delete]'  and bill_id='$rw[id]' || parent_id='$_GET[pid]'";
							mysql_query($sql) or die (mysql_error());
						}else if($rw['type']=="cyclet" || $rw['type']=="cycletback"){
							$sql="delete from stock_transactions where stock_transactions.engine_shasyid='$_GET[delete]' and stock_transactions.bill_id='$rw[id]' ";
							mysql_query($sql) or die (mysql_error());
							$sql="delete from production where id='$_GET[delete]' ";
							mysql_query($sql) or die (mysql_error());
						}
					header("location:product_in_bills.php?viewid=$rw[id]");
					die();
					}
					if(isset ($_POST['accept'])){
						if($rw['type']=="porze" || $rw['type']=="uporze" || $rw['type']=="ccyclet"){
							$time=pdate("H:m A");
							$sql="Update  stock_transactions set type='in', created_at='$_POST[created_at]', time='$time' where bill_id='$rw[id]'";
							mysql_query($sql) or die (mysql_error());
							$sql="Update  bills set status='accepted' where id='$rw[id]' ";
							mysql_query($sql) or die (mysql_error());
						}else if($rw['type']=="cyclet" || $rw['type']=="cycletback" || $rw['type']=="cycletmontazh"){
							$time=pdate("H:m A");
							$sql="Update stock_transactions set type='in', created_at='$_POST[created_at]', time='$time' where engine_shasyid!='' and bill_id='$rw[id]' and (parent_id='' or parent_id='0') ";
							mysql_query($sql) or die (mysql_error());
							$sql="Update stock_transactions set type='out', created_at='$_POST[created_at]', time='$time' where engine_shasyid!='' and bill_id='$rw[id]' and (parent_id!='' and parent_id!='0') ";
							mysql_query($sql) or die (mysql_error());
							$sql="Update  production set status='in' where bill_id='$rw[id]' ";
							mysql_query($sql) or die (mysql_error());
							$sql="Update  bills set status='accepted' where id='$rw[id]' ";
							mysql_query($sql) or die (mysql_error());
						}
					header("location:product_in_bills.php?viewid=$rw[id]");
					die();
					}
					
				?>
				

			 </div>

 		</fieldset>
		</form>
		</div>
		
</div><!-- end container -->
	   <?php
	   include ("template_footer.php");
	   ?>
</body>
</html>
