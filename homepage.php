 <?php
session_start();
include("template_header.php");
include("logout.php");

  
	if (isset($_GET['logout'])) {
	    logout();
    }
?>
					
			<!-- Start WOWSlider.com HEAD section 
		<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
		<script type="text/javascript" src="slider/engine1/jquery.js"></script>
		-->
		<!-- End WOWSlider.com HEAD section -->
	    <div id="content" >
	    <div id="top_menu" class="clearfix">
		<ul class="sf-menu"> <!-- DROPDOWN MENU -->

		</ul>
					</div>
					<div id="content_main" class="clearfix">
			<div id="main_panel_container" class="center">
		
			<div id="shortcuts" class="clearfix" align="center">
			<?php
				$sql="select * from users where id='$_SESSION[user_id]'";
				$rs=mysql_query($sql) or die (mysql_error());
				$rwuser=mysql_fetch_array($rs);
			?>
				<h2 class="sidebar"><marquee behavior="alternate" style='font-size:14px'>شرکت مونتاژ و تولید موتور سیکلت هلمند غزنوی</marquee></h2>
				<ul>
				   <?php if($rwuser['product_in']==1 || $type=="admin"){ echo"<li><a href='product_in.php'><img src='img/icon3/2.png' alt='ورود اجناس' width='130' height='130'/><span><b style='font-size:14px'>ورود اجناس</b></span></a></li>"; } ?>
				    <?php if($rwuser['product_out']==1 || $type=="admin"){ echo"<li><a href='product_out.php'><img src='img/icon3/4.png' alt='خروج اجناس' width='130' height='130'/><span><b style='font-size:14px'>خروج اجناس</span></b></a></li>"; } ?>
					<?php if($rwuser['products']==1|| $type=="admin"){ echo"<li><a href='products.php'><img src='img/icon3/10.png' alt='مدیریت اجناس' width='130' height='130'/><span><b style='font-size:14px'>مدیریت اجناس</span></b></a></li>"; } ?>
				   <?php if($rwuser['backup']==1 || $type=="admin"){ echo"<li><a href='backup_restore.php'><img src='img/icon3/14.png' alt='تهیه فایل پشتیبان' width='130' height='130'/><span><b style='font-size:14px'>تهیه فایل پشتیبان</b></span></a></li>"; } ?>
					<?php if($rwuser['users']==1 || $type=="admin"){ echo"<li><a href='users.php'><img src='img/icon3/12.png' alt='مدیریت کاربران' width='130' height='130'/><span><b style='font-size:14px'>مدیریت کاربران</span></b></a></li>"; } ?>
					<?php if($rwuser['stocks']==1 || $type=="admin"){ echo"<li><a href='stocks.php'><img src='img/icon3/8.png' alt='گدام ها' width='130' height='130'/><span><b style='font-size:14px'>گدام ها</b></span></a></li>"; } ?>

				</ul>
				</div>
				

				
			</div><!-- end #shortcuts -->
			</div>
			
		

		
	    </div><!-- end #content -->
	   <?php
	   include ("template_footer.php");
	   ?>
</div><!-- end container -->

</body>
</html>
