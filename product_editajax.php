<?php
require_once("../library/db.php");
?>
<html>
<head>
<meta http-equiv='Content-Language' content='fa'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>

<table width="80%"> 
<?php
	$productid=$_GET['product'];

	$sql="select *from products where id='$productid'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	
	echo "
	
		
		<tr align='center'>
				<th>کد</th>
				<th>نام جنس</th>";
				if($row['category_id']==1){
				echo "<th>نوع موتور</th>
				<th>واحد شمارش</th>";
				}else{
				echo "<th>نوع پرزه</th>";
				}
				
				echo"
				<th></th>
			</tr>
			<tr align='center'>
				<td width='10%'>$row[code] $row[code_cu]</td>
				<td><input type='text' name='productnameedit' id='productnameedit' value='$row[name]' class='validate[required] text-input' /></td>
				";
	if($row['category_id']==1){		
	
	echo "<td>
			<select name='cyclettypeedit' id='cyclettypeedit' class='validate[required]'>
				<option value=''>انتخاب نوع موتور</option>
	";
	//Getting Count Methods
	if($row['type']=="1"){
	echo "<option selected value='1'>مونتاژ</option>";
	echo "<option value='2'>نیمه مونتاژ</option>";
	echo "<option value='3'>تکمیل</option>";
	}else if($row['type']=="2"){
	echo "<option  value='1'>مونتاژ</option>";
	echo "<option selected value='2'>نیمه مونتاژ</option>";
	echo "<option value='3'>تکمیل</option>";
	}else if($row['type']=="3"){
	echo "<option  value='1'>مونتاژ</option>";
	echo "<option value='2'>نیمه مونتاژ</option>";
	echo "<option selected value='3'>تکمیل</option>";
	}else {
	echo "<option  value='1'>مونتاژ</option>";
	echo "<option value='2'>نیمه مونتاژ</option>";
	echo "<option value='3'>تکمیل</option>";
	}
	
	
	echo "</select></td>";
	echo "<td>
			<select name='countmedit' id='countmedit' class='validate[required]'>
				<option value=''>انتخاب واحد شمارش</option>
	";
	//Getting Count Methods
	if($row['unit']=="عراده"){
	echo "<option selected value='عراده'>عراده</option>";
	}
	else if($row['unit']=="جوره"){
	echo "<option selected  value='عراده'>عراده</option>";
	}else{
	echo "<option selected  value='عراده'>عراده</option>";
	}
	echo "</select></td>";
}else{
if($row['category_id']!=4){
		echo "<td>
			<select name='ptypeedit' id='ptypeedit' class='validate[required]'>
			<option value=''>انتخاب نوع پرزه</option>";
		
		//Getting Count Methods
		if($row['category_id']=="2"){
		echo "<option selected value='2'>پرزه اصلی</option>";
		echo "<option  value='3'>پرزه فرعی</option>";
		}
		else if($row['category_id']=="3"){
		echo "<option  value='2'>پرزه اصلی</option>";
		echo "<option selected value='3'>پرزه فرعی</option>";
		}else{
		echo "<option  value='2'>پرزه اصلی</option>";
		echo "<option  value='3'>پرزه فرعی</option>";
		}
		echo "</select></td>";
	}
	echo "<td><select name='punit' id='punit' class='validate[required]'>
	<option value=''>انتخاب واحد</option>";
					
						$sql="select * from units ";
						$rsunit=mysql_query($sql) or die (mysql_error());
						while($rwunit=mysql_fetch_array($rsunit)){
							if($row['unit']==$rwunit['name']){
							echo "<option value='$rwunit[name]' selected>$rwunit[name]</option>";
							}else{
							echo "<option value='$rwunit[name]'>$rwunit[name]</option>";
							}
						}
				
					echo "</select></td>";

}

	echo"
		
				<td width='40%'>
				<input type='hidden' value=$productid name='producteditid'/>
				<input type='hidden' value='$_GET[catid]' name='catidofporze'/>
				<input type='submit' id='updatecyclet' class='submit' style='border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:95px'  onmouseover='this.style.background=\"#252527\"' onmouseout='this.style.background=\"#5e6062\"' name='updatecyclet' value='تایید'/><input input='canceledit' style='border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:95px'  onmouseover='this.style.background=\"#252527\"' onmouseout='this.style.background=\"#5e6062\"' type='submit'  value='انصراف'/>
				</td>
			</tr>
		</table>
	
	";
?>


</html>