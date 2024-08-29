 <?php
session_start();
include("template_header.php");
include("logout.php");

  
	if (isset($_GET['logout'])) {
	    logout();
    }
?>
					<!--
						
						calling files for slider
						-->
			<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
		<script type="text/javascript" src="slider/engine1/jquery.js"></script>
		<!-- End WOWSlider.com HEAD section -->
	    <div id="content" >
	    <div id="top_menu" class="clearfix">
		<ul class="sf-menu"> <!-- DROPDOWN MENU -->

		</ul>
					</div>
					<div id="content_main" class="clearfix">
			<div id="main_panel_container" class="left">
		
			<div id="shortcuts" class="clearfix" align="right">
				<h2 class="sidebar"><marquee behavior="alternate" style='font-size:14px'>شرکت مونتاژ و تولید موتور سیکلت هلمند غزنوی</marquee></h2>
						<div style="background-image:url('img/background.jpg'); height:430px"  >
				<!-- Start WOWSlider.com BODY section -->
					<div id="wowslider-container1" style="z-index:0">
					<div class="ws_images" ><ul>
				<li><img src="slider/data1/images/28d77217de094af9ef3bd76574be3d71.jpg" alt="28d77217de094af9ef3bd76574be3d71" title="28d77217de094af9ef3bd76574be3d71" id="wows1_0"/></li>
				<li><img src="slider/data1/images/1239698_628631387181611_885308298_n.jpg" alt="1239698_628631387181611_885308298_n" title="1239698_628631387181611_885308298_n" id="wows1_1"/></li>
				<li><img src="slider/data1/images/background1.jpg" alt="background1" title="background1" id="wows1_2"/></li>
				<li><img src="slider/data1/images/20922.jpg" alt="20922" title="20922" id="wows1_3"/></li>
				</ul></div>
				
					<a href="#" class="ws_frame"></a>
					</div>
					<script type="text/javascript" src="engine1/wowslider.js"></script>
					<script type="text/javascript" src="engine1/script.js"></script>
					<!-- End WOWSlider.com BODY section -->
						<div style="position:relative; top:-430px;z-index:1;">
						<br/>
						<table width="100%" style="margin-right:7px;" dir="rtl">
						<tr height="140px">
						<td width="135px">
							<?php
								$sql="select * from users where id='$_SESSION[user_id]'";
								$rs=mysql_query($sql) or die (mysql_error());
								$rwuser=mysql_fetch_array($rs);
								if($rwuser['product_in']==1){
							?>
							<div style="position:absolute"><a href="product_in.php"><img src="img/icons2/1.png"  onmouseover="this.src='img/icons2/2.png'" onmouseout="this.src='img/icons2/1.png'" /></a></div>
							<?php
								}
							?>
						</td>
						<td colspan="5"></td>
						<td width="135px">
						<?php
								if($rwuser['backup']==1){
						?>
						<div  style="position:absolute"><a href="#"><img src="img/icons2/13.png" onmouseover="this.src='img/icons2/14.png'" onmouseout="this.src='img/icons2/13.png'" /></a></div>
						<?php
								}
						?>
						</td>
						</tr>
						<tr height="140px">
						<td></td>
						<td width="135px">
						<?php
							if($rwuser['product_out']==1){
						?>
						<div style="margin-right:-40px;position:absolute"><a href="product_out.php"><img src="img/icons2/3.png"  onmouseover="this.src='img/icons2/4.png'" onmouseout="this.src='img/icons2/3.png'" /></a></div>
						<?php
							}
						?>
						</td>
						<td colspan="3"></td>
						<td width="135px">
						<?php
							if($rwuser['users']==1){
						?>
						<div style="margin-left:-40px; position:absolute"><a href="users.php"><img src="img/icons2/11.png" onmouseover="this.src='img/icons2/12.png'" onmouseout="this.src='img/icons2/11.png'" /></a></div>
						<?php
							}
						?>
						</td>
						<td></td>
						</tr>
						<tr height="140px">
						<td></td>
						<td>

						</td>
						<td width="135px">
						<?php
							if($rwuser['products']==1){
						?>
						<div  style="margin-right:-40px; position:absolute"><a href="products.php"><img src="img/icons2/9.png"  onmouseover="this.src='img/icons2/10.png'" onmouseout="this.src='img/icons2/9.png'" /></a></div>
						<?php
							}
						?>
						</td>
						<td width="135px">
						<?php
							if($rwuser['product_in']==1){
						?>
						<div  style="margin-right:-10px;position:absolute "><a href="product_in.php#tabs-2"><img src="img/icons2/5.png"  onmouseover="this.src='img/icons2/6.png'" onmouseout="this.src='img/icons2/5.png'" /></a></div>
						<?php
							}
						?>
						</td>
						<td width="135px">
						<?php
							if($rwuser['stocks']==1){
						?>
						<div style="margin-right:20px; position:absolute"><a href="stocks.php"><img src="img/icons2/7.png"   onmouseover="this.src='img/icons2/8.png'" onmouseout="this.src='img/icons2/7.png'" /></a></div>
						<?php
							}
						?>
						</td>
						<td>

						</td>
						<td>
						
						</td>
						</tr>
					
						<!-- <div  style="padding-top:20px"><a href="product_in.php"><img src="img/icons2/1.png"  onmouseover="this.src='img/icons2/2.png'" onmouseout="this.src='img/icons2/1.png'" /></a></div>
						</td>
						<td colspan="3"></td>
						<td style="padding-top:60px">
						<div ><a href="product_out.php"><img src="img/icons2/3.png"  onmouseover="this.src='img/icons2/4.png'" onmouseout="this.src='img/icons2/3.png'" /></a></div>
						</td>
						</tr>
						<tr>
						<td>
						<div  ><a href="product_in.php#tabs-2"><img src="img/icons2/5.png"  onmouseover="this.src='img/icons2/6.png'" onmouseout="this.src='img/icons2/5.png'" /></a></div>
						</td><td>
						<div><a href="stocks.php"><img src="img/icons2/7.png"   onmouseover="this.src='img/icons2/8.png'" onmouseout="this.src='img/icons2/7.png'" /></a></div>
						</td><td>
						<div  ><a href="products.php"><img src="img/icons2/9.png"  onmouseover="this.src='img/icons2/10.png'" onmouseout="this.src='img/icons2/9.png'" /></a></div>
						</td><td>
						<div ><a href="users.php"><img src="img/icons2/11.png" onmouseover="this.src='img/icons2/12.png'" onmouseout="this.src='img/icons2/11.png'" /></a></div>
						</td><td>
						<div  ><a href="#"><img src="img/icons2/13.png" onmouseover="this.src='img/icons2/14.png'" onmouseout="this.src='img/icons2/13.png'" /></a></div>
						</td>
						-->
						
						</table>
						</div>
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
