<?php
include("template_header.php");
include("products_add_remove_row.php");
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
}else if(pcat==4){
divid='editccyclet';
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
/*
function testDupes() {
 
  var numFlds = document.getElementById('ctable').getElementsByTagName("tr").length;
  for (var x=1; x<=numFlds-1; x++) {
    for (var y=x+1; y<=numFlds-1; y++) {
		
      if ((document.getElementById('pname'+x).value) == (document.getElementById('pname'+y).value) ){
        alert('نام یک یا چند جنس تکرار شده است! لطفا دوباره سعی نمایید!');
        return false;
      }else{
		continue;
	  }
    }
  }
 
  var numFlds = document.getElementById('ptable').getElementsByTagName("tr").length;
  for (var x=1; x<=numFlds-1; x++) {
    for (var y=x+1; y<=numFlds-1; y++) {
		
      if ((document.getElementById('pzname'+x).value) == (document.getElementById('pzname'+y).value) ){
        alert('نام یک یا چند جنس تکرار شده است! لطفا دوباره سعی نمایید!');
        return false;
      }else{
		continue;
	  }
    }
  } 
  
   
  
  
  return true;
}
*/
  
  document.onkeydown=function(e){
  
       if(e.which == 39){
			document.getElementById("button1").click();
		
		   document.getElementById("button3").click();
		   document.getElementById("button5").click();
		  
       }
	   if(e.which == 37){
           document.getElementById("button2").click();
		   document.getElementById("button4").click();
		   document.getElementById("button6").click();
       }
	   
	   
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
		<div id="content_main" class="clearfix">
		<div align="right" dir="rtl">
		<form method="post" accept-charset="utf-8" id="myform"  class="formular" onsubmit="testDupes()" action="products.php">
			<fieldset>
<legend align="right"><span >بخش مدیریت اجناس سیستم</span></legend>
				
				
				<div id="tabs" align="right" style="font-family: Tahoma" >
	
				<ul>
					<li><a href="#tabs-1" onclick="jQuery('#myform').validationEngine('hide')">موتورهای تکمیل</a></li>

					<li><a href="#tabs-2" onclick="jQuery('#myform').validationEngine('hide')">پرزه جات</a></li>
					<li><a href="#tabs-3" onclick="jQuery('#myform').validationEngine('hide')">موتورهای کلی</a></li>
					
					<li><a href="#tabs-4" onclick="jQuery('#myform').validationEngine('hide')">تعیین ارتباط موتورها و پرزه ها</a></li>

					
				</ul>
				<div id="tabs-1">
				<a href="#" id="addlink" onclick="jQuery('#myform').validationEngine('hide')"><b>اضافه کردن موتور تکمیل</b></a>
				<a href="#" id="addlinkback" onclick="jQuery('#myform').validationEngine('hide')"><b>اضافه کردن موتور تکمیل</b></a>
				<input type="button" style=" width:20px; background-color:white; border:0;background-image:url(img/back.png)" /></br>
				</br>

				</br>
				<div id="addlinkdata">
				
				<table width="70%" id="ctable" >
				<tr >
					<th height="30px" >شماره</th>
					<th>کد اتومات</th>
					<th>کد دستی</th>
					<th>نام جنس </th>
					<th>نوع موتور </th>
					<th>واحد شمارش </th>
					
				</tr>
				<tr>
					<td align="center">1</td>
					<td align="center">
						<input type="checkbox" id="acodem1" checked value='1' name="acodec[]"/>
					</td>
					<td align="center">
						<input type="text" id="ecodem1"  size="10"  name="codec[]"/>
					</td>
					<td align="center">
						<input type="text" id="pname1" size="30" class="validate[required] text-input" name="pname[]"/>
					</td>
					<td align="center">
						<select name="cyclettype[]" id="cyclettype1" class="validate[required]">
							<option value=''>انتخاب نوع موتور</option>
							<option value="1" >مونتاژ</option>
							<option value="2" >نیمه مونتاژ</option>
							<option value="3" >تکمیل</option>
						</select>
					</td>
					<td align="center">
						<select name="countmethod[]" id="countmethod1" class="validate[required]">
							<option value=''>انتخاب واحد شمارش</option>
							<option value="عراده" selected>عراده</option>
							
							
						</select>
					</td>
					</tr>
					</table>
					</br>
				<span align="right" style=" margin-right:300px">
				<input type="button" id="button1" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew1('<?php echo $code;?>'),jQuery('#myform').validationEngine('hide'),calctotal()" class="add-row"/>
				<input type="button" id="button2" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow1(),jQuery('#myform').validationEngine('hide'),calctotal()" class="remove-row"/></br>
				</span>
					<br/>
						<input type="submit" name="addcyclet1" id="addcyclet1" class="submit"  style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:120px; margin-right:200px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'"  value="اضافه نمودن موتور"  />
						<a href="products.php"><input type="button" name="addcyclet1" id="addcyclet1" class="submit"  style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:120px; "  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'"  value="انصراف"  /></a>
				</div>

				<?php
				if(isset($_POST['addcyclet1'])){
					$columnname="code";
					for($i=0;$i<sizeof($_POST['pname']);$i++){
					if($_POST['acodec'][$i]==1){
					$q="select code from products where category_id='1' and code_cu='' order by id desc ";
				$res=mysql_query($q) or die(mysql_error());
				$r=mysql_fetch_array($res);
				if($r['code']!=""){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="CY-0001";
					
				}
				$columnname="code";
				}else{
					$code=$_POST['codec'][$i];
					$columnname="code_cu";
				}
				
					$productname=$_POST['pname'][$i];
					$countmethod=$_POST['countmethod'][$i];
					$sql="Insert into products (name, unit, category_id, $columnname, type) values('$productname', '$countmethod', '1', '$code', '".$_POST['cyclettype'][$i]."')";
					mysql_query($sql) or Die(mysql_error());
				}
					header("location:products.php?succed=1#tabs-1");
					die();
				}
				
				?>
				
				<div id="editcompletecyclets">
				
				</div>
				</br>
				<h3 class="ico_mug">لیست اجناس موجود در این کتگوری:<a href="products_print.php?catid=1"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3>
				<div id="tabledata" class="section">
				<table width="90%" id="table" >
				<tr>
				<th style="width:10%">کد جنس</th>
				<th>نام جنس</th>
				<th>نوع</th>
				<th>واحد شمارش</th>
				<th>عملیات</th>
				</tr>
				<?php
				$sql="Select *from products where category_id='1' order by code asc";
				$res=mysql_query($sql);
				while($row=mysql_fetch_array($res)){
				
				
				echo 
				"<tr class='table_date' align='center'>
				<td width='15%'>".$row['code'].$row['code_cu']."</td>
				<td>".$row['name']."</td>";
				if($row['type']==1){
				echo "<td>مونتاژ</td>";
				}else if($row['type']==2){
				echo "<td>نیمه مونتاژ</td>";
				}else if($row['type']==3){
				echo "<td>تکمیل</td>";
				}
				echo"
				<td>".$row['unit']."</td>";
				$querypurchase="Select count(id) from stock_transactions where product_id='$row[id]'";
				$respurchase=mysql_query($querypurchase) or die(mysql_error());
				$rwpurchase=mysql_fetch_array($respurchase);
				
				if($rwpurchase['cound(id)']>0 ){
				echo "
				<td><img src='img/cancel1.png'/>";
				}
				else {
				echo "<td><a href='products.php?delete= $row[id]' class='confirm'><img src='img/cancel.png'/></a>";
				}
				
				echo "
				<img src='img/edit.png' style='cursor:pointer' onclick='getProductInfo($row[id],$row[category_id])'/></td>
				</tr>";

				}
				
				?>

				</table>

				</div>
				</div>
				<div id="tabs-2">
				<a href="#" id="addlink_tab2" onclick="jQuery('#myform').validationEngine('hide')"><b>اضافه نمودن پرزه جدید</b></a>
				<a href="#" id="addlinkback_tab2" onclick="jQuery('#myform').validationEngine('hide')"><b>اضافه نمودن پرزه جدید</b></a>
				<input type="button" style=" width:20px; background-color:white; border:0;background-image:url(img/back.png)" /></br>
				</br>

				</br>
				<div id="addlinkdata_tab2">
				
				<table width="60%" id="ptable" >
				<tr >
					<th height="30px" >شماره</th>
					<th>کد اتومات </th>
					<th>کد دستی </th>
					<th>نام جنس </th>
					<th>نوع  </th>
					<th>واحد شمارش  </th>
					<th></th>
				</tr>
				<tr>
					<td align="center">1</td>
					<td align="center">
						<input type="checkbox" id="acode1" value="1" checked name="acodep[]"/>
					</td>
					<td align="center">
						<input type="text" id="ecode1"  size="10"  name="codep[]"/>
					</td>
					<td align="center">
						<input type="text" id="pzname1"  size="30" class="validate[required] text-input" name="pzname[]"/>
					</td>
					<td align="center">
						<select name="porzetype[]" id="porzetype" class="validate[required]">
							<option value=''>انتخاب نوع پرزه</option>
							<option value="2">پرزه اصلی</option>
							<option value="3">پرزه فرعی</option>
						</select>
					</td>
					<td align="center">
					<select name="punit[]" id="punit1" class="validate[required]">
					<option value="">انتخاب واحد</option>
					<?php
						$sql="select * from units ";
						$rsunit=mysql_query($sql) or die (mysql_error());
						while($rwunit=mysql_fetch_array($rsunit)){
							echo "<option value='$rwunit[name]'>$rwunit[name]</option>";
						}
					?>
					</select>
					</td>
				</tr>

				</table>
				</br>
				<span align="right" style=" margin-right:220px">
				<input type="button" id="button3" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew2('<?php echo $code;?>'),jQuery('#myform').validationEngine('hide'),calctotal()" class="add-row"/>
				<input type="button" id="button4" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow2(),jQuery('#myform').validationEngine('hide'),calctotal()" class="remove-row"/></br>
				</span><br/>
					<input type="submit" class="submit" id="addlinkdatabutton" name="addporze"  value="اضافه نمودن پرزه" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:95px;margin-right:150px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" />
					<a href="products.php"><input type="button" name="addcyclet1" id="addcyclet1" class="submit"  style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:120px; "  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'"  value="انصراف"  /></a>

				<br/>
				</div>

				<?php
				if(isset($_POST['addporze'])){
					$columnname="";
					$productname="";
				for($i=0;$i<sizeof($_POST['pzname']);$i++){
					if($_POST['acodep'][$i]==1){
					$q="select code from products where category_id='2' || category_id='3'  and code_cu='' order by id desc ";
					$res=mysql_query($q) or die(mysql_error());
					$r=mysql_fetch_array($res);
				if($r['code']!=""){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="PC-0001";
					
				}
				$columnname="code";
				}else{
					$code=$_POST['codep'][$i];
					$columnname="code_cu";
				
				}
			
					$productname=$_POST['pzname'][$i];
					$countmethod=$_POST['punit'][$i];
					$sql="Insert into products (name, unit, category_id, $columnname) values('$productname', '$countmethod', '".$_POST['porzetype'][$i]."', '$code')";
					mysql_query($sql) or die(mysql_error());
				}	
					header("location:products.php?add=2#tabs-2");
					die();
				}
				
				?>
				
				<div id="editporzecyclets">
				
				</div>
				</br>
				<h3 class="ico_mug">لیست اجناس موجود در این کتگوری:<a href="products_print.php?catid=2"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3>
				<div id="tabledata" class="section">
				<table width="90%" id="table" >
				<tr>
				<th style="width:10%">کد جنس</th>
				<th>نام جنس</th>
				<th>نوع پرزه</th>
				<th>واحد شمارش</th>
				<th>عملیات</th>
				</tr>
				<?php
				$sql="Select *from products where category_id='2' || category_id='3' order by category_id asc";
				$res=mysql_query($sql) or die (mysql_error());
				while($row=mysql_fetch_array($res)){

				
				echo 
				"<tr class='table_date' align='center'>
				<td width='15%'>".$row['code'].$row['code_cu']."</td>
				<td>".$row['name']."</td>";
				if($row['category_id']==2){
				echo "<td>پرزه اصلی</td>";
				}else{
				echo "<td>پرزه فرعی</td>";

				}
				echo "<td>".$row['unit']."</td>";
				//Checking product for its use
				$querydependant="select count(id) from product_dependants where sub_id='$row[id]' or buy_main_id='$row[id]'";
				$resdependant=mysql_query($querydependant) or die (mysql_error());
				$rwdependant=mysql_fetch_array($resdependant);
				
				$querypurchase="select count(id) from stock_transactions where product_id='$row[id]'";
				$respurchase=mysql_query($querypurchase) or die(mysql_error());
				$rwpurchase=mysql_fetch_array($respurchase);
				
				if($rwdependant['count(id)']>0 || $rwpurchase['count(id)']>0){
				echo "
				<td><img src='img/cancel1.png'/>";
				}
				else {
				echo "<td><a href='products.php?delete= $row[id]' class='confirm'><img src='img/cancel.png'/></a>";
				}
				
				echo "
				<img src='img/edit.png' style='cursor:pointer' onclick='getProductInfo($row[id],$row[category_id])'/></td>
				</tr>";

				}
				
				?>

				</table>
								<?php
				//Editing a product
				if(isset($_POST['updatecyclet'])){
				$sql="select category_id from products where id='$_POST[producteditid]'";
				$res=mysql_query($sql);
				$row=mysql_fetch_array($res);
				if($row['category_id']==1){
				$sql="Update products SET name='$_POST[productnameedit]', unit='$_POST[countmedit]', type='$_POST[cyclettypeedit]' where id='$_POST[producteditid]'";
				}else if($row['category_id']==4){
				$sql="Update products SET name='$_POST[productnameedit]', unit='$_POST[punit]' where id='$_POST[producteditid]'";
				}else{
				$sql="Update products SET name='$_POST[productnameedit]', unit='$_POST[punit]', category_id='$_POST[ptypeedit]' where id='$_POST[producteditid]'";

				}
				mysql_query($sql) or die(mysql_error());
				
				if($row['category_id']==1){
				header("location:products.php?e=1#tabs-1");
				die();
				}else if($row['category_id']==2 || $row['category_id']==3 ){
				header("location:products.php?e=2#tabs-2");
				die();
				}else if($row['category_id']==4){
				header("location:products.php?e=2#tabs-3");
				die();
				}
				}
				?>
				<?php
				//Deleting Products
				if(isset($_GET['delete'])){
				$sql="Select category_id from products where id='$_GET[delete]'";
				$rs=mysql_query($sql) or die (mysql_error());
				$row=mysql_fetch_array($rs);
				$sql="Delete from products where id='$_GET[delete]'";
				mysql_query($sql) or die();
				
				if($row['category_id']==1){
				header("location:products.php?d=1#tabs-1");
				die();
				}else if($row['category_id']==2){
				header("location:products.php?d=2#tabs-2");
				die();
				}
				}
					
				
				?>
				
				</div>
				</div>
				<?php
				//---------------------
				?>
				<div id="tabs-3">
				<a href="#" id="addlink_tab3" onclick="jQuery('#myform').validationEngine('hide')"><b>اضافه نمودن موتور جدید</b></a>
				<a href="#" id="addlinkback_tab3" onclick="jQuery('#myform').validationEngine('hide')"><b>اضافه نمودن موتور جدید</b></a>
				<input type="button" style=" width:20px; background-color:white; border:0;background-image:url(img/back.png)" /></br>
				</br>

				</br>
				<div id="addlinkdata_tab3">
				
				<table width="60%" id="cmtable" >
				<tr >
					<th height="30px" >شماره</th>
					<th>کد اتومات </th>
					<th>کد دستی </th>
					<th>نام جنس </th>
					<th>واحد شمارش  </th>
					<th></th>
				</tr>
				<tr>
					<td align="center">1</td>
					<td align="center">
						<input type="checkbox" id="amotorcode1" value="1" checked name="acodem[]"/>
					</td>
					<td align="center">
						<input type="text" id="motorcode1"  size="10"  name="codem[]"/>
					</td>
					<td align="center">
						<input type="text" id="motorname1"  size="30" class="validate[required] text-input" name="motorname[]"/>
					</td>
					<td align="center">
					<select name="munit[]" id="munit1" class="validate[required]">
					<option value="">انتخاب واحد</option>
					<?php
						$sql="select * from units ";
						$rsunit=mysql_query($sql) or die (mysql_error());
						while($rwunit=mysql_fetch_array($rsunit)){
							echo "<option value='$rwunit[name]'>$rwunit[name]</option>";
						}
					?>
					</select>
					</td>
				</tr>

				</table>
				</br>
				<span align="right" style=" margin-right:220px">
				<input type="button" id="button5" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew3('<?php echo $code;?>'),jQuery('#myform').validationEngine('hide'),calctotal()" class="add-row"/>
				<input type="button" id="button6" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow3(),jQuery('#myform').validationEngine('hide'),calctotal()" class="remove-row"/></br>
				</span><br/>
					<input type="submit" class="submit" id="addlinkdatabutton" name="addcmotor"  value="اضافه نمودن موتور" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:95px;margin-right:150px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" />
					<a href="products.php#tabs-3.php"><input type="button" name="cancel" id="cancel" class="submit"  style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:120px; "  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'"  value="انصراف"  /></a>

				<br/>
				</div>

				<?php
				if(isset($_POST['addcmotor'])){
					$columnname="";
					for($i=0;$i<sizeof($_POST['motorname']);$i++){
					if($_POST['acodem'][$i]==1){
					$q="select code from products where category_id='4'  and code_cu='' order by id desc ";
					$res=mysql_query($q) or die(mysql_error());
					$r=mysql_fetch_array($res);
					if($r['code']!=""){
						$last_code_num=$r['code'];
						$last_code_num++;
						$code=$last_code_num;
					}else{
						$code="CYC-0001";
						
					}
					$columnname="code";
					}else{
						$code=$_POST['codem'][$i];
						$columnname="code_cu";
					
					}
						$productname=$_POST['motorname'][$i];
						$countmethod=$_POST['munit'][$i];
						$sql="Insert into products (name, unit, category_id, $columnname) values('$productname', '$countmethod', '4', '$code')";
						mysql_query($sql) or Die(mysql_error());
					}	
				
					header("location:products.php?add=3#tabs-3");
					die();
				}
				
				?>
				
				<div id="editccyclet">
				
				</div>
				</br>
				<h3 class="ico_mug">لیست اجناس موجود در این کتگوری:<a href="products_print.php?catid=2"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3>
				<div id="tabledata" class="section">
				<table width="90%" id="table" >
				<tr>
				<th style="width:10%">کد جنس</th>
				<th>نام جنس</th>
				<th>واحد شمارش</th>
				<th>عملیات</th>
				</tr>
				<?php
				$sql="Select *from products where category_id='4' order by category_id asc";
				$res=mysql_query($sql) or die (mysql_error());
				while($row=mysql_fetch_array($res)){

				
				echo 
				"<tr class='table_date' align='center'>
				<td width='15%'>".$row['code'].$row['code_cu']."</td>
				<td>".$row['name']."</td>";
				
				echo "<td>".$row['unit']."</td>";
				
				$querypurchase="select count(id) from stock_transactions where product_id='$row[id]'";
				$respurchase=mysql_query($querypurchase) or die(mysql_error());
				$rwpurchase=mysql_fetch_array($respurchase);
				
				if( $rwpurchase['count(id)']>0){
				echo "
				<td><img src='img/cancel1.png'/>";
				}
				else {
				echo "<td><a href='products.php?deletecm=$row[id]#tabs-3' class='confirm'><img src='img/cancel.png'/></a>";
				}
				
				echo "
				<img src='img/edit.png' style='cursor:pointer' onclick='getProductInfo($row[id],$row[category_id])'/></td>
				</tr>";

				}
				
				?>

				</table>
				
				<?php
				//Deleting Products
				if(isset($_GET['deletecm'])){
				
				$sql="Delete from products where id='$_GET[deletecm]'";
				mysql_query($sql) or die();
				
				header("location:products.php#tabs-3");
				die();
				
				}
					
				
				?>
				
				</div>
				</div>
				<?php
				//---------------------
				?>
				<div id="tabs-4">
				

								<h4 style='color:green' class="ico_mug">تعیین ارتباط بین اجناس:</h4>
				<div id="tabledata" class="section">
				<table width="90%" id="table" >
				<tr>
				<th style="width:15%">کد جنس</th>
				<th style="text-align:right">نام جنس</th>
				<th></th>
				</tr>
				<?php
				$sql="Select *from products where (category_id='1' || category_id='2' ) and (type='1' || type='2' || type='') order by code, type asc";
				$res=mysql_query($sql);
				while($row=mysql_fetch_array($res)){
				$type="";
					if($row['type']==1){
					$type="(مونتاژ)";
					}else if($row['type']==2){
					$type="(نیمه مونتاژ)";
					}else if($row['type']==3){
					$type="(تکمیل)";
					}
				echo 
				"<tr class='table_date' align='center'>
				<td width='15%'>".$row['code'].$row['code_cu']."</td>
				<td align='right'>".$row['name'].$type." 
				</td>
				<td align='right'><a href='#' style='color:blue' onclick='getPozeInfo($row[id],2)'>نمایش پرزه های تعیین شده</a></td>
				</tr>";
				}
				
				?>
	<?php
		if(isset($_POST['updateporze'])){

			$sql="Delete from product_dependants where buy_main_id='$_POST[productid]'";
			mysql_query($sql);
			for($j=0;$j<$_POST['numofcols'];$j++){
				//echo $_POST['porzeval'][$j];
				if($_POST['porzeval'][$j]!=0){
				$sql="Insert into product_dependants (buy_main_id, sub_id, amount) values ('$_POST[productid]','".$_POST['porzeval'][$j]."', '".$_POST['amount'][$j]."')";
				mysql_query($sql) or die(mysql_error());
				}
			}
		header("location:products.php?editp=1#tabs-4");
		die();
		}
		if(isset($_POST['buycancel'])){
			header("location:products.php#tabs-4");
			die();
		}
	?>
				</table>
				</br>
				
				</div>
				</br>
				<div id="product_buyprozediv">
				
				</div></br>
				<hr width="100%" />
				</div>
				
				
				</div>

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
