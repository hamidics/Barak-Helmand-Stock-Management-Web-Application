<?php
include("template_header.php");
?>
<script>
    function check_exist(user_name){
        var divid="userExist";
        
     	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
 		 }
		else{// code for IE6, IE5
			  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
 		 }
			xmlhttp.onreadystatechange=function()
		 {
 			if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById(divid).innerHTML=xmlhttp.responseText;    }
			  }
			 
				xmlhttp.open('GET','user_check.php?user_name='+user_name,true);
				xmlhttp.send();
				
				}
    function getUserInfo(userId){
        var divid="userEdit";
        
     	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
 		 }
		else{// code for IE6, IE5
			  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
 		 }
			xmlhttp.onreadystatechange=function()
		 {
 			if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById(divid).innerHTML=xmlhttp.responseText;    }
			  }
			 
				xmlhttp.open('GET','user_edit.php?userId='+userId,true);
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
		<div id="content_main" class="clearfix">
		<div align="right" dir="rtl">
		<form method="post" action="users.php" accept-charset="utf-8" id="myform"  class="formular">
			<fieldset>
				<legend align="right"><span >کاربران</span></legend>
				<a href="#" id="addlink" ><b>اضافه نمودن کاربر جدید</b></a>
				<a href="#" id="addlinkback"><b>اضافه نمودن کاربر جدید</b></a>
				<input type="button" style=" width:20px; background-color:white; border:0;background-image:url(img/back.png)" /></br>
				</br>
				<div id="addlinkdata">
				<div id="userExist"></div>
				<table width="55%" >
				<tr >
					<th></th>
					<th></th>
				</tr>
				<tr>
					<td>نام :</td>
					<td><input type="text" id="name" class="validate[required] text-input" name="name"/></td>
				</tr>
				<tr>
					<td>ایمیل:</td>
					<td><input type="text" id="email" class="validate[required] text-input" name="email"/></td>
				</tr>
				<tr>
					<td>نام کاربری :</td>
					<td><input type="text" id="user_name" class="validate[required] text-input" name="user_name" onKeyup="check_exist(this.value)"/></td>
				</tr>
				<tr>
					<td>کلمه عبور :</td>
					<td><input type="password" id="password" class="validate[required] text-input" name="password"/></td>
				</tr>
				<tr>
					<td>تکرار کلمه عبور :</td>
					<td><input type="password" id="repassword" class="validate[required] text-input" name="repassword"/></td>
				</tr>
				<tr>
					<td>نوع کاربر :</td>
					<td><select name="utype" id="utype" class="validate[required]">
					<option value="">انتخاب</option>
					<option value="admin">ادمین</option>
					<option value="user">عادی</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>وضیعت :</td>
					<td><select name="status" id="status" class="validate[required]">
					<option value="">انتخاب</option>
					<option value="1">فعال</option>
					<option value="2">غیر فعال</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>تفصیل :</td>
					<td><textarea cols="17" rows="3" id="description" name="description" class="validate[required]"><?php if(isset($_GET['edit'])){ echo  $property_description; } ?></textarea></td>
				</tr>
				<tr>
					<td >ورودی اجناس</td>
					<td><input type="checkbox" name="productin" id="today_transaction" value="1"/></td>
				</tr>
				<tr>
					<td >خروجی اجناس</td>
					<td><input type="checkbox" name="productout" id="productout" value="1"/></td>
				</tr>
				<tr>
					<td >مدیریت اجناس</td>
					<td><input type="checkbox" name="products" id="products" value="1"/></td>
				</tr>
				<tr>
					<td >گدام ها</td>
					<td><input type="checkbox" name="stocks" id="stocks" value="1"/></td>
				</tr>
				<tr>
					<td >مدیریت کاربران </td>
					<td><input type="checkbox" name="users" id="users" value="1"/></td>
				</tr>
				<tr>
					<td >تهیه پشتیبان از سیستم</td>
					<td><input type="checkbox" name="backup" id="backup" value="1"/></td>
				</tr>
				<tr><td colspan="2"><br/><br/></td></tr>
				<tr>
				
				<td align="center" colspan="2"><input type="submit" class="submit" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white; background-color:#5e6062; border:0;height:30px; width:130px;"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" name="save" value="ذخیره" id="linkdatabutton"/>
				<a href="users.php"><input type="button" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white; background-color:#5e6062; border:0;height:30px; width:130px;"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'"  name="cancel" value="انصراف"/></a></td>
				</tr>
				</table>
				</br>
				</div></br>
				<?php
				    if(isset($_POST['save'])){
						 
						if($_POST['user_exist']){
						     echo"<div id='fail' class='info_div' align right><span class='ico_cancel'>شما بر خلاف قوانین فورم اطلاعات وارد کردید</span></div>";
						}else{
						
				             $sql="select code from users order by id desc LIMIT 1";
				             $result=mysql_query($sql);
				             $resrow=mysql_fetch_array($result);
				             if($resrow){
				                 $last_code_num = $resrow['code'];
				                 $last_code_num++;
				                 $code=$last_code_num;
				             }else{
				                 $code="Us-0001";
				             }
				        
						
					     $sql="Insert into users(code, name, email, user_name, password, type, status, users, description, product_in, product_out, stocks, products, backup ) values('$code', '$_POST[name]','$_POST[email]', '$_POST[user_name]', '$_POST[password]', '$_POST[utype]', '$_POST[status]', '$_POST[users]', '$_POST[description]', '$_POST[productin]', '$_POST[productout]', '$_POST[stocks]', '$_POST[products]', '$_POST[backup]')";
				             mysql_query($sql) or die(mysql_error());
				             header("location: users.php");
						}
					}                                                                                                                                                                             
				?>
				<div id="userEdit"></div>
				<h3 class="ico_mug">لیست کاربران سیستم</h3>
				<div id="tabledata" class="section">
				<table width="90%" id="table" >
				<tr>
				<th style="width:15%">کد</th>
				<th>نام</th>
				<th>نام کاربری</th>
				<th>ایمل</th>
				<th>وضیعت</th>
				<th>عملیات</th>
				</tr>
				<?php
				     $sql="Select id, code, name, email, user_name, description, status, type from users order by code";
				     $res=mysql_query($sql) or die(mysql_error());
				        while($row=mysql_fetch_array($res)){
						  $id = $row['id'];
						  $code = $row['code'];
					      $name = $row['name'];
					      $email = $row['email'];
					      $user_name = $row['user_name'];
						  $status = $row['status'];
					      $description = $row['description'];
						  
						  if($status == "1"){
						    $condetion = "فعال";
						  }
						  
						  if($status == "2"){
						     $condetion = "غیر فعال";
						  }
						echo"<tr>
						<td class='table_date' align='center'>$code</td>
						<td class='table_date'  align='center'>$name</td>
						<td class='table_date'  align='center'>$user_name</td>
						<td class='table_date'  align='center'>$email</td>
						<td class='table_date'  align='center'>$condetion</td>
						<td class='table_date'  align='center' ><img src='img/edit.png' style='cursor:pointer' onclick='getUserInfo($row[id])'/>";
						if($row['type']!="superadmin"){
						echo "<a href='users.php?delete_user=$id' class='confirm'><img src='img/cancel.png' width='15px' height='15'/></a>   
						";
						}
						echo "</td></tr>";
					}
				?>
				
				<?php
				if(isset($_POST['edit_user'])){
							
					       $sql="Update users SET name = '$_POST[name]', user_name = '$_POST[user_name]' , password = '$_POST[password]', type='$_POST[eutype]', email = '$_POST[email]', status = '$_POST[status]', description = '$_POST[description]', users = '$_POST[newusers]', stocks='$_POST[newstocks]', product_in='$_POST[newproductin]', product_out='$_POST[newproductout]', products='$_POST[newproducts]', backup='$_POST[newbackup]' where id = '$_POST[user_id]'";
					       mysql_query($sql) or die(mysql_error());
						
					       header("location:users.php");
						   die();
				    }
				?>
				
				<?php
				   if(isset($_GET['delete_user'])){
				         $id = $_GET['delete_user'];
				         $sql="Delete from users where id='$id'";
				         mysql_query($sql);
						 
						 header("location: users.php");
				   }
				?>
				</table>
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
