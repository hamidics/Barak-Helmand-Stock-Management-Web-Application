<?php
require_once("../library/db.php");
?>
<html>
<head>
<meta http-equiv='Content-Language' content='fa'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>


</head>


<?php
	$userId=$_GET['userId'];
	
	$sql="Select * from users where id ='$userId'";
	            $res=mysql_query($sql) or die(mysql_error());
	            while($row=mysql_fetch_array($res)){
				  $users=$row['users'];
				  $productin=$row['product_in'];
				  $productout=$row['product_out'];
				  $stocks=$row['stocks'];
				  $products=$row['products'];
				  $backup=$row['backup'];
				   
				echo"<table width='30%' >
				<tr >
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td>نام :</td>
					<td><input type='text' id='name' class='validate[required] text-input' name='name' value='$row[name]'/></td>
				</tr>
				<tr>
					<td>ایمیل:</td>
					<td><input type='text' id='email' class='validate[required] text-input' name='email' value='$row[email]'/></td>
				</tr>
				<tr>
					<td>نام کاربری :</td>
					<td><input type='text' id='user_name' class='validate[required] text-input' name='user_name' value='$row[user_name]'/></td>
				</tr>
				<tr>
					<td>کلمه عبور :</td>
					<td><input type='password' id='password' class='validate[required] text-input' name='password' value='$row[password]'/></td>
				</tr>
				<tr>
					<td>تکرار کلمه عبور :</td>
					<td><input type='password' id='repassword' class='validate[required] text-input' name='repassword'/></td>
				</tr>
				<tr>
					<td>نوع کاربر :</td>
					<td><select name='eutype' id='eutype' class='validate[required]'>
					<option value=''>انتخاب</option>";
					if($row['type']=="superadmin"){
					echo"<option value='superadmin'"; if($row['type'] == "superadmin"){ echo "selected"; } echo">سوپرادمین</option>";
					}else{
					echo"<option value='admin'"; if($row['type'] == "admin"){ echo "selected"; } echo">ادمین</option>";
					echo"<option value='admin'"; if ($row['type'] == "user"){ echo "selected"; } echo">کاربر عادی</option>";
					}
					echo"</select>
					</td>
				</tr>
				<tr>
					<td>وضیعت :</td>
					<td><select name='status' id='status' class='validate[required]'>
					<option value=''>انتخاب</option>";
					echo"<option value='1'"; if($row['status'] == 1){ echo "selected"; } echo">فعال</option>";
					echo"<option value='2'"; if ($row['status'] == 2){ echo "selected"; } echo">غیر فعال</option>";
					echo"</select>
					</td>
				</tr>
				</tr>
					<td>تفصیل :</td>
					<td><textarea cols='17' rows='3' id='description' name='description' class='validate[required]'>$row[description]</textarea></td>
				</tr>
								<tr>
					<td >ورودی اجناس</td>
					<td><input type='checkbox' name='newproductin' id='newproductin' value='1' "; if($productin == 1){ echo"checked";} echo"/></td>
				</tr>
				<tr>
					<td >خروجی اجناس</td>
					<td><input type='checkbox' name='newproductout' id='newproductout' value='1' "; if($productout == 1){ echo"checked";} echo"/></td>
				</tr>
				<tr>
					<td >مدیریت اجناس</td>
					<td><input type='checkbox' name='newproducts' id='newproducts' value='1' "; if($products == 1){ echo"checked";} echo"/></td>
				</tr>
				<tr>
					<td >گدام ها</td>
					<td><input type='checkbox' name='newstocks' id='newstocks' value='1' "; if($stocks == 1){ echo"checked";} echo"/></td>
				</tr>
				<tr>
					<td >مدیریت کاربران </td>
					<td><input type='checkbox' name='newusers' id='newusers' value='1' "; if($users == 1){ echo"checked";} echo"/></td>
				</tr>
				<tr>
					<td >تهیه پشتیبان از سیستم</td>
					<td><input type='checkbox' name='newbackup' id='newbackup' value='1' "; if($backup == 1){ echo"checked";} echo"/></td>
				</tr>
				<tr><td colspan='2'><br/></td></tr>
				<tr>
				
				<td align='center' colspan='2'><input type='submit' class='submit' style='border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;   background-color:#5e6062; border:0;height:30px; width:130px;'  onmouseover='this.style.background=\"#252527\"' onmouseout='this.style.background=\"#5e6062\"'  name='edit_user' value='ذخیره' id='linkdatabutton'/>
				<a href='users.php'><input type='button' style='border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;   background-color:#5e6062; border:0;height:30px; width:130px;'  onmouseover='this.style.background=\"#252527\"' onmouseout='this.style.background=\"#5e6062\"'  name='cancel' value='انصراف'/></a></td>
				<input type='hidden' name='user_id' value='$userId'/>
				</tr>
				</table>
				</br>";
		}
?>


</html>