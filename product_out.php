<?php
include("template_header.php");
include("product_out_add_remove_row.php");
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


function checkengine(enginenum, div)
{
var divid=div+'d';
var engid=div+'e';
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
				xmlhttp.open('GET','product_out_checkcyclet.php?enginenum='+enginenum+'&engineid='+engid,true);
				xmlhttp.send();
				
				
}	
/*
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
		
      if ((document.getElementById('enginenum'+x).value) == (document.getElementById('enginenum'+y).value) ){
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
		document.getElementById("button5").click();
		   document.getElementById("button3").click();
		  
       }
	   if(e.which == 37){
           document.getElementById("button2").click();
		   document.getElementById("button4").click();
		   document.getElementById("button6").click();
       }
	   
	   
    }
</script>
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
		<form action="product_out.php" method="post" accept-charset="utf-8" id="myform" name="myform1" onSubmit="return testDupes(this);"  class="formular">
			
			<fieldset>
				<legend align="right"><span >خروج اجناس از سیستم</span></legend>
				<div id="tabs" align="right" style="font-family: Tahoma" >
	
				<ul>
					<li><a href="#tabs-1" onclick="jQuery('#myform').validationEngine('hide')" >خروج پرزه جات از سیستم</a></li>

					<li><a href="#tabs-2" onclick="jQuery('#myform').validationEngine('hide')">خروج موتورهای مونتاژ شده از سیستم</a></li>
					<li><a href="#tabs-3" onclick="jQuery('#myform').validationEngine('hide')">خروج موتورهای کلی</a></li>
					<li><a href="#tabs-4" onclick="jQuery('#myform').validationEngine('hide')">لیست بل های خروجی اجناس</a></li>

					
				</ul>
				<?php
				
				$q="select code from bills where type='outporze' order by id desc LIMIT 1 ";
				$res=mysql_query($q) or die(mysql_error());
				$r=mysql_fetch_array($res);
				if($r['code']!=""){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="CPO-00000001";
				}
			
			
				
				?>
				<div id="tabs-1">
				</br>
				کد بل خروج: <?php echo $code;?>
				</br></br>
				تاریخ خروج اجناس :</br>
				<input type="text" name="created_at" id="created_at" class="validate[required,custom[date]]" style="width:200px" />
				<input type="button" style="background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px " onclick="displayDatePicker('created_at', this);"/>
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
				<select name="productname[]" id="productname1" style=" width:220px"  class="validate[required]">
				<option value="" >انتخاب نام جنس</option>
				<?php
					$sql="select * from products where category_id='2' || category_id='3'";
					$res=mysql_query($sql) or die (mysql_error());
					while($rowproducts=mysql_fetch_array($res)){
						echo "<option value='$rowproducts[id]'>$rowproducts[name]($rowproducts[unit])</option>";
					}
				?>
				</select>
				</td>
				<td align="center" id="productname1f">
					<input type="text" id="productname1a" name="amount[]" size="13"  class="validate[required,custom[integer]]"/>
				</td>
				<td align="center" id="productname1f">
					<input type="text"  name="details[]" size="20"  />
					<input type="hidden" id="numoffields[]"/>
				</td>
				</tr>
		
				</table>
				</br>
				<span align="right" style=" margin-right:180px">
				<input type="button" id="button1" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew(),jQuery('#myform').validationEngine('hide'),calctotal()" class="add-row"/>
				<input type="button" id="button2" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow(),jQuery('#myform').validationEngine('hide'),calctotal()" class="remove-row"/></br>
				</span>
				
				</br>
				<input type="submit" id="insertproducts"  name="insertproducts" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;   background-color:#5e6062; border:0;height:30px; width:130px;margin-right:150px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" value="خروج پرزه جات" class="submit"/>
				<?php
				if(isset($_POST['insertproducts'])){
				$date=$_POST['created_at'];
				$sql="Insert into bills (created_at, code, type, status) values ('$date', '$code', 'outporze', 'onsell')";
				mysql_query($sql) or die (mysql_error());
				//Getting the last id of bill
				$sq="select id from bills order by id desc limit 1";
				$rs=mysql_query($sq) or die (mysql_error());
				$rw=mysql_fetch_array($rs);
				
				for($i=0;$i<sizeof($_POST['productname']);$i++){
					$sql="Insert into stock_transactions ( quantity, type, stock_id, product_id, bill_id, description) values (".$_POST['amount'][$i].",'onsell','2','".$_POST['productname'][$i]."', '$rw[id]', '".$_POST['details'][$i]."')";
					mysql_query($sql) or die(mysql_error());
					
					//adding the pieces that belongs to this porze
					$sql="select buy_main_id, sub_id, amount from product_dependants where buy_main_id='".$_POST['productname'][$i]."'";
					$res=mysql_query($sql) or die (mysql_error());
					while($rwsubpieces=mysql_fetch_array($res)){
					$sql="Insert into stock_transactions (quantity, type, stock_id, product_id, parent_id, bill_id) values ('".($rwsubpieces['amount']*$_POST['amount'][$i])."','onsell','2','$rwsubpieces[sub_id]', '$rwsubpieces[buy_main_id]', '$rw[id]')";
					mysql_query($sql) or die (mysql_error());
					
					}
				}
				
				header("location:product_out.php#tabs-1");
				die();
				}	
				
				?>
				<hr align="right"style=" width:100%"/>
				</br>
				
				</br>
				</br></br>
				<?php
				
				$q="select code from bills where type='outcyclet' order by id desc LIMIT 1 ";
				$res=mysql_query($q) or die(mysql_error());
				$r=mysql_fetch_array($res);
				if($r['code']!=""){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="CCO-00000001";
				}
			
			
				
				?>
				
				</br>
				</div>
				<div id="tabs-2">
				<br/>
				کد بل خروج: <?php
				echo $code;
				?><br/><br/>
				تاریخ خروج موتورها :</br>
				<input type="text" name="created_at2" id="created_at2" class="validate[required,custom[date]]" style="width:200px" />
				<input type="button" style="background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px " onclick="displayDatePicker('created_at2', this);"/>
				</br></br>
				
				<hr align="right"style=" width:100%"/>
				</br>
				
				<table width="65%" id="tbl1" style="border:1; align:right">
				<tr style="background:grey; height:25px" >
				<th>شماره</th>
				<th>نمبر انجین</th>
				<th>نمبر شاسی</th>
				<th>مدل موتور</th>
				<th>توضیح</th>
				</tr>
				<tr>
				<td align="center">1</td>
				
				<td align="center" id="producttype1p">
					<input type="text" id="enginenum1" name="engine[]"  onkeyup='checkengine(this.value, this.id);' size="25"  class="validate[required,custom[integer],equals[enginenum1e]]"/>

				</td>
				<td id='enginenum1d' colspan="2" align="center" style='color:blue;'>
					موجود نیست!
				</td>
				<td align="center" id="productname1f">
					<input type="text"  name="mdetails[]" size="20"  />
				</td>
				</tr>
				
		
				</table>
				</br>
				<span align="right" style=" margin-right:240px">
				<input type="button" id="button3" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew2(),jQuery('#myform').validationEngine('hide')" class="add-row"/>
				<input type="button" id="button4" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow2(),jQuery('#myform').validationEngine('hide')" class="remove-row"/></br>
				</span>
				
				</br>
				<input type="submit" name="insertcyclets" id="insertcyclets" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;   background-color:#5e6062; border:0;height:30px; width:130px;margin-right:200px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" value="خروج موتورها" class="submit"/>
				<?php
				if(isset($_POST['insertcyclets'])){
				$date=$_POST['created_at2'];
				$sql="Insert into bills (created_at, code, type, status) values ('$date', '$code', 'outcyclet', 'onsell')";
				mysql_query($sql) or die (mysql_error());
				//Getting the last id of bill
				$sq="select id from bills order by id desc limit 1";
				$rs=mysql_query($sq) or die (mysql_error());
				$rw=mysql_fetch_array($rs);
				for($i=0;$i<sizeof($_POST['productname2']);$i++){
					$sql="Insert into stock_transactions ( quantity, type, stock_id, product_id, engine_shasyid, bill_id, description) values (1,'onsell','1','".$_POST['productname2'][$i]."', '".$_POST['engineid'][$i]."', '$rw[id]', '".$_POST['mdetails'][$i]."')";
					mysql_query($sql) or die(mysql_error("erro1"));
					$sql="update production set status='onsell', bill_out_id='$rw[id]' where  id='".$_POST['engineid'][$i]."'";
					mysql_query($sql) or die (mysql_error());
					
					}
				
				header("location:product_out.php#tabs-2");
				die();
				}	
				
				?>
				</div>
				<div id="tabs-3">
				</br>
				<?php
				
				
				$q="select code from bills where type='outccyclet' order by id desc LIMIT 1 ";
				$res=mysql_query($q) or die(mysql_error());
				$r=mysql_fetch_array($res);
				if($r['code']!=""){
					$last_code_num=$r['code'];
					$last_code_num++;
					$code=$last_code_num;
				}else{
					$code="CC-00000001";
				}
			
				?>
				کد بل خروج: <?php echo $code;?>
				</br></br>
				تاریخ خروج اجناس :</br>
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
				<th>توضیحات</th>
				</tr>
				<tr>
				<td align="center">1</td>
				
				<td align="center" id="producttype1p">
				<select name="productnamec[]" id="productnamec1" style=" width:220px"  class="validate[required]">
				<option value="" >انتخاب نام جنس</option>
				<?php
					$sql="select * from products where  category_id='4'";
					$res=mysql_query($sql) or die (mysql_error());
					while($rowproducts=mysql_fetch_array($res)){
						echo "<option value='$rowproducts[id]'>$rowproducts[name]($rowproducts[unit])</option>";
					}
				?>
				</select>
				</td>
				<td align="center" id="productname1f">
					<input type="text" id="amountc1" name="amountc[]" size="13"  class="validate[required,custom[integer]]"/>
					<input type="hidden" id="numoffields[]"/>
				</td>
				<td align="center" id="productname1f">
					<input type="text"  name="mcdetails[]" size="20"  />
				</td>
				</tr>
		
				</table>
				</br>
				<span align="right" style=" margin-right:180px">
				<input type="button" id="button5" style="background-color:white; border:0; background-image:url(img/add.gif); width:21px;height:21px " onclick="AddNew3(),jQuery('#myform').validationEngine('hide'),calctotal()" class="add-row"/>
				<input type="button" id="button6" style="background-color:white; border:0; background-image:url(img/remove.gif); width:21px;height:21px  " onclick="removeRow3(),jQuery('#myform').validationEngine('hide'),calctotal()" class="remove-row"/></br>
				</span>
				
				</br>
				<input type="submit" id="insertproductsc"  name="insertproductsc" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;   background-color:#5e6062; border:0;height:30px; width:130px;margin-right:150px"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" value="خروج پرزه جات" class="submit"/>
				<?php
				if(isset($_POST['insertproductsc'])){
				$date=$_POST['created_atc'];
				$sql="Insert into bills (created_at, code, type, status) values ('$date', '$code', 'outccyclet', 'onsell')";
				mysql_query($sql) or die (mysql_error());
				//Getting the last id of bill
				$sq="select id from bills order by id desc limit 1";
				$rs=mysql_query($sq) or die (mysql_error());
				$rw=mysql_fetch_array($rs);
				
				for($i=0;$i<sizeof($_POST['productnamec']);$i++){
					$sql="Insert into stock_transactions ( quantity, type, stock_id, product_id, bill_id, description) values (".$_POST['amountc'][$i].",'onsell','5','".$_POST['productnamec'][$i]."', '$rw[id]', '".$_POST['mcdetails'][$i]."')";
					mysql_query($sql) or die(mysql_error());
					
				}
				
				header("location:product_out.php#tabs-3");
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
				$sql="Select *from bills where type='outporze' or type='outcyclet' or type='outccyclet'   order by id desc LIMIT 10";
				$res=mysql_query($sql) or die (mysql_error());
				while($row=mysql_fetch_array($res)){

				
				echo 
				"<tr class='table_date' align='center'>
				<td width='15%'>".$row['code']."</td>
				<td>".$row['created_at']."</td>";
				if($row['type']=="outporze"){
				echo "<td>خروج پرزه</td>";
				}else if($row['type']=="outcyclet"){
				echo "<td>خروج سیکلت</td>";
				}else if($row['type']=="outccyclet"){
				echo "<td>خروج موتور کلی</td>";
				}
				if($row['status']=="onsell"){
				echo "<td><img src='img/pending.png'/></td>";
				}else{
				echo "<td><img src='img/accept.png'/></td>";
				}
				
				if($row['status']!="onsell"){
				echo "
				<td><img src='img/cancel1.png'/>";
				}
				else {
				echo "<td><a href='product_out.php?delete= $row[id]' class='confirm'><img src='img/cancel.png'/></a>";
				}
				
				echo "
				<a href='product_out_bills.php?viewid=$row[id]'><img src='img/view.png' style='cursor:pointer'/></a></td>
				</tr>";

				}
				
				?>

				</table>
				<?php
					if(isset($_GET['delete'])){
						if($rw['type']=="outporze" || $rw['type']=="outccyclet"){
							$sql="delete from stock_transactions where  bill_id='$_GET[delete]'";
							mysql_query($sql) or die (mysql_error());
						}else if($rw['type']=="outcyclet" ){
							$sql="delete from stock_transactions where  bill_id='$_GET[delete]' ";
							mysql_query($sql) or die (mysql_error());
							$sql="update  production set status='in' where  bill_out_id='$_GET[delete]'";
							mysql_query($sql) or die (mysql_error());
						} 
						$sql="delete from bills where id='$_GET[delete]'";
						mysql_query($sql) or die (mysql_error());
						header("location:product_out.php#tabs-4");
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
