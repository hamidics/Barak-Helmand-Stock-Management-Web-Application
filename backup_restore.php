<?php
	require_once("template_header.php");
//Unzip a folder and store it into a folder
	//require_once('../library/pclzip-2-8-2/pclzip.lib.php');
	require_once('../library/restore-script.php');
	//require_once('../library/zipandcopy-script.php');

?>


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
				<legend align="right"><span >پشتیبانی سیستم</span></legend>
	

	<div id="tabs" align="right"  dir="rtl" style="font-family: Tahoma" >
				<ul>
					
					<li><a href="#tabs-1">تهیه فایل پشتیبان</a></li>
					<li><a href="#tabs-2">ریستور نمودن اطلاعات دیتابیس</a></li>
					
				</ul>
	
	<div id="tabs-1">

	<form action="backup_restore.php" method="post" id="myform">
		<!-- start id-form -->
		<?php 
			if($_GET['bsuccess']==1){
				echo "<img src='img/backupsuccess.png'/><br/> <b style='color:red; font-size:18px'><a href='../backup/backup.sql' target='_Blank'>برای دانلود کلیک کنید!</a></b>";

		}else{
		?>
		
				<h3>برای تهیه فایل پشتیبان از روی اطلاعات روی تصویر ذیل کلیک نمایید:</h3></br></br></br>
				<center>
				<a href="../library/backup-script.php" target="_parent"><img src="img/backsmall.png"/></a> 
				<br />
				<br />
			<?php
				if($_GET['bsuccess']==2){
					echo "<b style='color:red; font-size:18px;'> تهیه فایل پشتیبان موفقانه صورت نگرفت</b>";
				}
			}
			?>
				<br /><br />
				
				<br />
				<br />
	</form>

	</div>
<div id="tabs-2" dir="rtl">

	<form action="backup_restore.php" method="post" id="myform" enctype="multipart/form-data">
	<?php
	if($_GET['success']!=1){
	?>
				<h3>برای ریستور نمودن اطلاعات دیتابیس، فایل پشتیبان را انتخاب و روی تایید کلیک نمایید:</h3>
				</br></br>
				<table align="center" >
				<tr><td colspan="2" align="center">
				<img src="img/backupsmall1.png"  /></br></br>
				</td></tr><tr><td>
				<input type="file" name="fileupload" id="fileupload" required class="inp-form" />
				</td><td>
				<input type="submit" class="form-submit"  style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:130px;"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" name="upload" />
				</td></tr>
				</table>
	<?php
	}
	?>
				</br></br>
				<?php
				if(isset($_POST["upload"])){
						 $filename=$_FILES['fileupload']['name'];
						 
						 $file_ext = substr($filename, strripos($filename, '.'));
						 if($file_ext==".sql"){
						  $newfilename ="backup".$file_ext;
						  $destination = "uploads/".$newfilename;
						  $temp_file = $_FILES['fileupload']['tmp_name'];
						  //Unlinking Resources
					$files = glob("uploads/*"); 
					foreach($files as $file) unlink($file);
					$files = glob("uploads/*"); 
					foreach($files as $file) unlink($file);
						  move_uploaded_file($temp_file,$destination);
						  run_query_batch($handledb, "uploads/backup.sql");
						  header("location:backup_restore.php?success=1#tabs-2");
						  die();
						  }else{
						  echo "<b style='color:red; font-size:18'>فایل انتخاب شده درست نمی باشد. لطفا فایلی با فرمت .sql را انتخاب نمایید! </b>";
						  }
				}
				if($_GET['success']==1){
					echo "<h1 style='color:green'><img src='img/restoresuccess.png'/></h1>";
				}
				?>
				</form>
				</div>
				</br>

	
	</div>
	</div>
	</div>
		
</div><!-- end container -->
	   <?php
	   include ("template_footer.php");
	   ?>
</body>
</html>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<?php
	require_once("template_footer.php");
?>