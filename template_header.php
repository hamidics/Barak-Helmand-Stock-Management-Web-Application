<?PHP
require_once("../library/db.php");
session_start();
include("check_login.php");
 login();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>هرات هاست</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	<link rel="stylesheet" type="text/css" media="all" href="css/calendar.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="Stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css"  />	
	<!--[if IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="markitup/skins/markitup/style.css" />
	<link rel="stylesheet" type="text/css" href="markitup/sets/default/style.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
	<script type="text/javascript" language="JavaScript" src="js/JsFarsiCalendar.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/slide.js"></script>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.1.custom.min.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<link rel="stylesheet" type="text/css" href="js/validation/validationEngine.jquery.css" media="screen">
	<script type="text/javascript" src="js/validation/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="js/validation/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="js/jquery.easy-confirm-dialog.js"></script>
	
<SCRIPT>
            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#myform").validationEngine();
            });

</SCRIPT>
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});
		
	</script>
	<script>
	$(function() {
		$(".confirm").easyconfirm();
		$("#alert").click(function() {
		
		});
		});
	</script>
	
	<script type="text/javascript" src="js/excanvas.pack.js"></script>
	<script type="text/javascript" src="js/jquery.flot.pack.js"></script>
    <script type="text/javascript" src="js/markitup/jquery.markitup.pack.js"></script>
	<script type="text/javascript" src="js/markitup/sets/default/set.js"></script>
  	<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
<div class="container" id="container">
    <div  id="header">
    	<div align="right" id="profile_info">
		    <img src="img/avatar.jpg" id="avatar" alt="avatar" align="right"/>
			<p align="right"><strong> خوش آمدید: </strong><?php echo $_SESSION['user_name']; ?>. <a href="homepage.php?logout=logout">خروج</a></p>
			
			
		</div>
		
		<div> <img src="img/logo.jpg" /></div>
		
    </div><!-- end header -->
		<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	
<?php
$sql="Select * from users where id ='$_SESSION[user_id]'";
	            $res=mysql_query($sql) or die(mysql_error());
	            $row=mysql_fetch_array($res);
				  $users=$row['users'];
				  $productin=$row['product_in'];
				  $productout=$row['product_out'];
				  $stocks=$row['stocks'];
				  $products=$row['products'];
				  $backup=$row['backup'];

?>

<!-- Start css3menu.com BODY section -->
<ul id="css3menu1" class="topmenu" style="margin-bottom:-40px; float:right; text-align:center" align="center"  >
<!--
	<li class="toplast"><a href="today_deals.php" style="height:18px;line-height:18px;width:80px"><span align="left" style="margin-top:0px">روزنامچه</span><span align="right"><img src="img/icons/day.png" style="margin-top:-19px;width:22px;height:22px"/></span></a></li>
	-->
	<li class="toplast"><a href="#" style="width:184px;height:18px;line-height:18px;"><span><span align="left" style="margin-top:0px">ورود و خروج اجناس</span><span align="right"><img src="img/icons/ie.png" style="margin-top:-19px;width:22px;height:22px"/></span></span></a>
	<ul>
	<?php
	if($productin==1){
	?>
		<li ><a style="width:165px" href="product_in.php">ورود اجناس</a></li>
	<?php
	}
	if($productout==1){
	?>
		<li><a style="width:165px"  href="product_out.php">خروج اجناس</a></li>
	<?php
	}
	?>
	</ul>
	</li>
	<?php
	if($stocks==1){
	?>
	<li class="topmenu"><a href="stocks.php" style="height:18px;line-height:18px;width:150px"><span align="left" >مدیریت گدام ها</span><span align="right"><img src="img/icons/stock.png" style="margin-top:-19px;width:22px;height:22px"/></span></a>
	</li>
	<?php
	}
	if($products==1){
	?>
	
	<li class="topmenu"><a href="products.php" style="height:18px;line-height:18px;width:150px"><span align="left" >مدیریت اجناس</span><span align="right"><img src="img/icons/product.png" style="margin-top:-19px;width:22px;height:22px"/></span></a></li>
	<?php
	}
	?>
	<li class="topmenu"><a href="#" style="height:18px;line-height:18px;width:160px"><span align="left" >مدیریت سیستم</span><span align="right"><img src="img/icons/settings.png" style="margin-top:-19px;width:22px;height:22px"/></span></a>
	<ul>
	<?php
	if($users==1){
	?>
		<li><a href="users.php">مدیریت کاربران</a></li>
	<?php
	}
	if($backup==1){
	?>
		<li><a href="backup_restore.php">تهیه پشتیبان از سیستم</a></li>
	<?php
	}
	?>
	</ul>
	</li>
		<li class="topfirst"><a href="homepage.php" style="height:18px;line-height:18px; width:210px"><span align="center" >صفحه اصلی</span><span align="right"><img src="img/icons/home.png" style="margin-top:-19px;width:22px;height:22px"/></span></a></li>

	
</ul>
<!-- End css3menu.com BODY section -->