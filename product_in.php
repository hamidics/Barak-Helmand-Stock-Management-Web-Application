<?php
include("template_header.php");
include("product_in_add_remove_row.php");
require_once '../library/pdate.php';

?>
<Script>

function getProductNames(producttype, div)
{
var divid=div+'p';
var pid=divid+'t';
	if (producttype=='')
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
			 
				xmlhttp.open('GET','proform_new_getProductsajax.php?producttype='+producttype+'&pid='+pid,true);
				xmlhttp.send();
				
				
}

function getlist(billtype)
{
var divid='getcyclets';

	if (billtype=='')
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
			 
				xmlhttp.open('GET','product_in_getcyclets.php?billtype='+billtype,true);
				xmlhttp.send();
				
				
}

function testDupes() {
 
  var numFlds = document.getElementById('tbl').getElementsByTagName("tr").length;
  for (var x=1; x<=numFlds-1; x++) {
    for (var y=x+1; y<=numFlds-1; y++) {
		
      if ((document.getElementById('productname'+x).value) == (document.getElementById('productname'+y).value) ){
        alert('نام یک یا چند جنس تکرار شده است! لطفا دوباره سعی نمایید!');
        return false;
      }else{
		continue;
	  }
    }
  }
 
  var numFlds = document.getElementById('tbl1').getElementsByTagName("tr").length;
  for (var x=1; x<=numFlds-1; x++) {
    for (var y=x+1; y<=numFlds-1; y++) {
		
      if ((document.getElementById('engine'+x).value) == (document.getElementById('engine'+y).value) || (document.getElementById('shasy'+x).value) == (document.getElementById('shasy'+y).value)){
        alert('نمبر انجین و شاسی تکراری وارد شده است! لطفا چک نموده و دوباره سعی نمائید!');
        return false;
      }else{
		continue;
	  }
    }
  } 
  
   
  
  
  return true;
}

function checkengieshasy(enginenum, engineid)
{
var divid=engineid+"check";
var enginedb=engineid+"db";
	if (enginenum=='')
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
			 
				xmlhttp.open('GET','product_in_checkengine.php?engine='+enginenum+'&enginedbid='+enginedb,true);
				xmlhttp.send();
				
				
}
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
		<form action="product_in.php" method="post" accept-charset="utf-8" id="myform"  onsubmit="return testDupes(this);" class="formular">
			
			<fieldset>
				<legend align="right"><span >اضافه نمودن اجناس جدید</span></legend>
				<div id="tabs" align="right" style="font-family: Tahoma" >
	
				<ul>
					<li><a href="#tabs-1" onclick="jQuery('#myform').validationEngine('hide')">اضافه نمودن پرزه جات</a></li>

					<li><a href="#tabs-2" onclick="jQuery('#myform').validationEngine('hide')">اضافه نمودن موتور</a></li>
					<li><a href="#tabs-3" onclick="jQuery('#myform').validationEngine('hide')">اضافه نمودن موتور کلی</a></li>
					<li><a href="#tabs-4" onclick="jQuery('#myform').validationEngine('hide')">لیست بلهای ورود اجناس</a></li>
					

					
				</ul>
				<div id="tabs-1">
				
				<?php
				
				$q="select code from bills where type='porze' order by id desc LIMIT 1 ";
				$res=mysql_query($q) or die(mysql_error());
				$r=mysql_fetch_array($res);
				if($r){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="PB-00000001";
				}
			
			
				
				?>
				</br>
				کد بل ورود جنس: <?php echo $code;?></br>
				</br>
				تاریخ اضافه نمودن اجناس :</br>
				<input type="text" name="created_at" id="created_at" class="validate[required,custom[date]]" style="width:200px" />
				<input type="button" style="background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px " onclick="displayDatePicker('created_at', this);"/>
				</br></br>
				نوع بل:
				<select name='porzetype' id='porzetype' class='validate[required]'>
					<option value="">انتخاب نوع بل ورود پرزه</option>
					<option value='porze'>پرزه سالم</option>
					<option value='uporze' >پرزه ضایعاتی </option>
				</select>
				</br></br>
				
				<hr align="right"style=" width:100%"/>
				</br>
				
				<table width="50%" id="tbl" style="border:1; align:right">
				<tr style="background:grey; height:25px" >
				<th>شماره</th>
				<th>نام جنس</th>
				<th>تعداد</th>
				<th>توضیح</th>
				</tr>
				<tr>
				<td align="center">1</td>
				
				<td align="center" id="producttype1p">
				<select name="productname[]" id="productname1" style=" width:220px" class="validate[required]">
				<option value="" >انتخاب نام جنس</option>
				<?php
					$sql="select * from products where category_id='2' || category_id='3'";
					$res=mysql_query($sql) or die (mysql_error());
					while($rowproducts=mysql_fetch_array($res)){
						echo "<option value='$rowproducts[id]'>$rowproducts[name] ($rowproducts[unit])</option>";
					}
				?>
				</select>
				</td>
				<td align="center">
				<input type="text" id="amount1" name="amount[]" size="13"  class="validate[required,custom[integer]]"/>
				</td>
				<td align="center">
				<input type="text" id="description1" name="description[]" size="60" />
				</td>
				
				</tr>
		
				</table>
				</br>
				<span align="right" style=" margin-right:300px">
				<input type="button" id="button1" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew(),jQuery('#myform').validationEngine('hide'),calctotal()" class="add-row"/>
				<input type="button" id="button2" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow(),jQuery('#myform').validationEngine('hide'),calctotal()" class="remove-row"/></br>
				</span>
				
				</br>
				<input type="submit" id="insertproducts" name="insertproducts" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:130px;margin-right:250px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" value="اضافه نمودن پرزه جات" />
				<?php
				$time=pdate("H:m A");
				if(isset($_POST['insertproducts'])){
				$date=$_POST['created_at'];
				$sql="insert into bills (created_at, code, type, status) values('$date', '$code', '$_POST[porzetype]', 'pending')";
				$rs=mysql_query($sql) or die (mysql_error());
				//Getting the last id of bill
				$sq="select id from bills order by id desc limit 1";
				$rs=mysql_query($sq) or die (mysql_error());
				$rw=mysql_fetch_array($rs);
				$code=$rw['id'];
				for($i=0;$i<sizeof($_POST['productname']);$i++){
				//Problem
					if($_POST['porzetype']=="porze"){
						$stockid=2;
					}else if($_POST['porzetype']=="uporze"){
						$stockid=4;
					}
					$sql="Insert into stock_transactions ( quantity, type, stock_id, product_id, bill_id, description, time) values (".$_POST['amount'][$i].",'pending','$stockid','".$_POST['productname'][$i]."', '$code', '".$_POST['description'][$i]."', '$time')";
					mysql_query($sql) or die(mysql_error());
					
				}
				
				header("location:product_in.php#tabs-1");
				die();
				}	
				
				?>
				<hr align="right"style=" width:100%"/>
				</br>
				
				</br>
				</br></br>
				
				
				</br>
				</div>
				<div id="tabs-2">
				<?php
				
				$q="select code from bills where type='cyclet' ||type='cycletback' || type='cycletmontazh' order by id desc LIMIT 1 ";
				$res=mysql_query($q) or die(mysql_error());
				$r=mysql_fetch_array($res);
				if($r){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="CB-00000001";
				}
			
			
				
				?>
				</br>
				کد بل ورود جنس: <?php echo $code;?>
				<br/><br/>
				تاریخ اضافه نمودن اجناس :</br>
				<input type="text" name="created_at2" id="created_at2" class="validate[required,custom[date]]" style="width:200px" />
				<input type="button" style="background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px " onclick="displayDatePicker('created_at2', this);"/>
				</br></br>
				نوع بل:
				<select name='billtype' id='billtype' class='validate[required]' onchange="getlist(this.value)">
					<option value="">انتخاب نوع بل ورود موتور</option>
					<option value='cyclet'>مونتاژ</option>
					<option value='cycletmontazh' >نیمه مونتاژ</option>
					<option value='cycletback' >تکمیل</option>
				</select>
				</br>
				
				<hr align="right"style=" width:100%"/>
				</br>
				
				<div id="getcyclets">
				
				</div>
				<?php
				if(isset($_POST['insertcyclets'])){
				$date=$_POST['created_at2'];
				$sql="Insert into bills (created_at, code, type, status) values ('$date', '$code', '$_POST[billtype]', 'pending')";
				mysql_query($sql) or die (mysql_error());
				//Getting the last id of bill
				$sq="select id from bills order by id desc limit 1";
				$rs=mysql_query($sq) or die (mysql_error());
				$rw=mysql_fetch_array($rs);
				$code=$rw['id'];
				//Problem
				for($i=0;$i<sizeof($_POST['productname1']);$i++){
					
					//Inserting records into production 
					$sql="insert into production (engine, shasy, status, bill_id, product_id) values ('".$_POST['engine'][$i]."', '".$_POST['shasy'][$i]."', 'pending', '$code', '".$_POST['productname1'][$i]."')";
					mysql_query($sql) or die (mysql_error());
					$sq="select id from production order by id desc limit 1";
					$rsengineshasy=mysql_query($sq) or die (mysql_error());
					$rwengineshasy=mysql_fetch_array($rsengineshasy);
					$sql="Insert into stock_transactions (quantity, type, stock_id, product_id, bill_id, engine_shasyid, description) values (1,'pending','1','".$_POST['productname1'][$i]."', '$code', '$rwengineshasy[id]','".$_POST['description1'][$i]."')";
					mysql_query($sql) or die(mysql_error("erro1"));
					if($_POST['billtype']=='cyclet' || $_POST['billtype']=="cycletmontazh"){
					$sql="select id, product_id from stock_transactions order by id desc limit 1";
					$restransaction=mysql_query($sql) or die (mysql_error());
					$rwtransaction=mysql_fetch_array($restransaction);
					//Discounting the pieces that belongs to this cyclet
					$sql="select sub_id, amount from product_dependants where buy_main_id='$rwtransaction[product_id]'";
					$res=mysql_query($sql) or die (mysql_error());
					while($rwsubpieces=mysql_fetch_array($res)){
					$sql="Insert into stock_transactions (quantity, type, stock_id, product_id, bill_id, parent_id, engine_shasyid, description) values ('$rwsubpieces[amount]','pending','2','$rwsubpieces[sub_id]', '$code','".$_POST['productname1'][$i]."', '$rwengineshasy[id]', 'تولید موتور')";
					mysql_query($sql) or die (mysql_error());
					//Discounting the pieces that belongs to this porze
					$sql="select sub_id, amount from product_dependants where buy_main_id='".$rwsubpieces['sub_id']."'";
					$rssub=mysql_query($sql) or die (mysql_error());
					while($rwsubsubpieces=mysql_fetch_array($rssub)){
					$sql="Insert into stock_transactions (quantity, type, stock_id, product_id, bill_id, parent_id, engine_shasyid, description) values ('".($rwsubsubpieces['amount']*$rwsubpieces['amount'])."','pending','2','$rwsubsubpieces[sub_id]', '$code','".$rwsubpieces['sub_id'][$i]."', '$rwengineshasy[id]', 'تولید موتور')";
					mysql_query($sql) or die (mysql_error());
					
					}
					}
					}
				}
				
				header("location:product_in.php#tabs-2");
				die();
				}	
				
				?>
				</div>
				<div id="tabs-3">
				
				<?php
				
				$q="select code from bills where type='ccyclet' order by id desc LIMIT 1 ";
				$res=mysql_query($q) or die(mysql_error());
				$r=mysql_fetch_array($res);
				if($r['code']!=""){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="CCY-00000001";
				}
			
			
				
				?>
				</br>
				کد بل ورود جنس: <?php echo $code;?></br>
				</br>
				تاریخ اضافه نمودن اجناس :</br>
				<input type="text" name="created_atc" id="created_atc" class="validate[required,custom[date]]" style="width:200px" />
				<input type="button" style="background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px " onclick="displayDatePicker('created_atc', this);"/>
				</br></br>
				
				<hr align="right"style=" width:100%"/>
				</br>
				
				<table width="50%" id="tblcc" style="border:1; align:right">
				<tr style="background:grey; height:25px" >
				<th>شماره</th>
				<th>نام جنس</th>
				<th>تعداد</th>
				<th>توضیح</th>
				</tr>
				<tr>
				<td align="center">1</td>
				
				<td align="center" id="producttype1p">
				<select name="productnamec[]" id="productnamec1" style=" width:220px" class="validate[required]">
				<option value="" >انتخاب نام جنس</option>
				<?php
					$sql="select * from products where category_id='4'";
					$res=mysql_query($sql) or die (mysql_error());
					while($rowproducts=mysql_fetch_array($res)){
						echo "<option value='$rowproducts[id]'>$rowproducts[name] ($rowproducts[unit])</option>";
					}
				?>
				</select>
				</td>
				<td align="center">
				<input type="text" id="amountc1" name="amountc[]" size="13"  class="validate[required,custom[integer]]"/>
				</td>
				<td align="center">
				<input type="text" id="descriptionc1" name="descriptionc[]" size="60" />
				</td>
				
				</tr>
		
				</table>
				</br>
				<span align="right" style=" margin-right:300px">
				<input type="button" id="button5" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew3(),jQuery('#myform').validationEngine('hide'),calctotal()" class="add-row"/>
				<input type="button" id="button6" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow3(),jQuery('#myform').validationEngine('hide'),calctotal()" class="remove-row"/></br>
				</span>
				
				</br>
				<input type="submit" id="insertproductsc" name="insertproductsc" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:130px;margin-right:250px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" value="اضافه نمودن پرزه جات" />
				<?php
				$time=pdate("H:m A");
				if(isset($_POST['insertproductsc'])){
				$date=$_POST['created_atc'];
				$sql="insert into bills (created_at, code, type, status) values('$date', '$code', 'ccyclet', 'pending')";
				$rs=mysql_query($sql) or die (mysql_error()."hhhhhhhh");
				//Getting the last id of bill
				$sq="select id from bills order by id desc limit 1";
				$rs=mysql_query($sq) or die (mysql_error());
				$rw=mysql_fetch_array($rs);
				$code=$rw['id'];
				for($i=0;$i<sizeof($_POST['productnamec']);$i++){
					
					$sql="Insert into stock_transactions ( quantity, type, stock_id, product_id, bill_id, description, time) values ('".$_POST['amountc'][$i]."','pending','5','".$_POST['productnamec'][$i]."', '$code', '".$_POST['descriptionc'][$i]."', '$time')";
					mysql_query($sql) or die(mysql_error()."hiiiiiiiiiiiiiii");
					
				}
				
				header("location:product_in.php#tabs-3");
				die();
				}	
				
				?>
				<hr align="right"style=" width:100%"/>
				</br>
				
				</br>
				</br></br>
				
				
				</br>
				</div>
				<div id="tabs-4">
				<h3 class="ico_mug">لیست بل های موجود</h3>
				<div id="tabledata" class="section">
				<table width="90%" id="table" >
				<tr>
				<th style="width:10%">کد بل</th>
				<th>تاریخ ایجاد</th>
				<th>نوع بل</th>
				<th>وضعیت</th>
				<th>عملیات</th>
				</tr>
				<?php
				$sql="Select *from bills where type='cyclet' or type='ccyclet'or type='cycletback' or type='cycletmontazh' or type='porze' or type='uporze' order by id desc LIMIT 10";
				$res=mysql_query($sql) or die (mysql_error());
				while($row=mysql_fetch_array($res)){

				
				echo 
				"<tr class='table_date' align='center'>
				<td width='15%'>".$row['code']."</td>
				<td>".$row['created_at']."</td>";
				if($row['type']=="cyclet"){
				echo "<td>موتور مونتاژ شده</td>";
				}else if($row['type']=="porze"){
				echo "<td>پرزه جات</td>";
				}else if ($row['type']=="cycletback"){
				echo "<td>موتور تکمیل</td>";
				}else if ($row['type']=="cycletmontazh"){
				echo "<td>موتور نیمه تکمیل</td>";
				}else if ($row['type']=="ccyclet"){
				echo "<td>موتور کلی</td>";
				}else{
				echo "<td>پرزه جات ضایعاتی</td>";
				}
				if($row['status']=="pending"){
				echo "<td><img src='img/pending.png'/></td>";
				}else{
				echo "<td><img src='img/accept.png'/></td>";
				}
				
				if($row['status']!="pending"){
				echo "
				<td><img src='img/cancel1.png'/>";
				}
				else {
				echo "<td><a href='product_in.php?delete=$row[id]#tabs-4' class='confirm' ><img src='img/cancel.png'/></a>";
				}
				
				echo "
				<a href='product_in_bills.php?viewid=$row[id]'><img src='img/view.png' style='cursor:pointer'/></a></td>
				</tr>";

				}
				
				?>

				</table>
				<?php
					if(isset($_GET['delete'])){
							$sql="delete from stock_transactions where bill_id='$_GET[delete]' ";
							mysql_query($sql) or die (mysql_error());
							$sql="update  production set status='in' where  bill_out_id='$_GET[delete]'";
							mysql_query($sql) or die (mysql_error());
						$sql="delete from bills where id='$_GET[delete]'";
						mysql_query($sql) or die (mysql_error());
						header("location:product_in.php#tabs-4");
						die();
					}
				
				?>
				
				
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
