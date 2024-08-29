<?php
include("template_header.php");
require_once '../library/pdate.php';

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
		<form action="stocks.php" method="post" accept-charset="utf-8">
			<fieldset>
			<div id="tabs" align="right" style="font-family: Tahoma" >
	
				<ul>
					<li><a href="#tabs-1" onclick="jQuery('#myform').validationEngine('hide')">موتورهای مونتاژ / آماده فروش</a></li>
					<?php /*
					<li><a href="#tabs-2" onclick="jQuery('#myform').validationEngine('hide')">موتورهای نیمه تکمیل</a></li>
					*/
					?>
					<li><a href="#tabs-2" onclick="jQuery('#myform').validationEngine('hide')">پرزه جات</a></li>
										
					<li><a href="#tabs-3" onclick="jQuery('#myform').validationEngine('hide')">ضایعات</a></li>
					<li><a href="#tabs-4" onclick="jQuery('#myform').validationEngine('hide')">موتورهای کلی</a></li>
					
					<li><a href="#tabs-5" onclick="jQuery('#myform').validationEngine('hide')">گزارش گدام ها</a></li>


					
				</ul>
				<div id="tabs-1">
				</br>
				<?php
					$mydate=pdate("Y-m-d");
				?>
				<h3 class="ico_mug">لیست اجناس موجود در این گدام: <a href="stock_report_excel.php?stockid=1&repdate=<?php echo $mydate;?>"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3>
				<div id="tabledata" class="section">
				<table width="100%" id="table" >
					<tr>
						<th width="8%">کد</th>
						<th>نام</th>
						<th>تعداد ورودی</th>
						<th>تعداد خروجی</th>
						<th>موجودی</th>
						<th>چاپ </th>
					</tr>
					<?php
					$sql="Select *from stock_transactions where stock_id='1' and type!='pending' group by product_id";
					$res=mysql_query($sql);
					while ($row=mysql_fetch_array($res)){
					//Getting product info
					$sql="Select *from products where id='$row[product_id]' order by type asc";
					$result=mysql_query($sql);
					$r=mysql_fetch_array($result);
					$type="";
					if($r['type']==1){
					$type="مونتاژ";
					}else if($r['type']==2){
					$type="نیمه مونتاژ";
					}else{
					$type="تکمیل";
					}
					echo"<tr align='center'>
					<td class='table_date'>$r[code] $r[code_cu]</td>
					<td class='table_date'>$r[name]($type)</td>";
					
					//Getting all transactions which have type in
					$sql1="Select SUM(quantity) from stock_transactions where stock_id='1' and product_id='$r[id]' and type='in' group by product_id";
					$result1=mysql_query($sql1) or die(mysql_error());
					$r1=mysql_fetch_array($result1);
					$intransactions=$r1['SUM(quantity)']+0;
					//Getting all transactions which have type out
					$sql2="Select SUM(quantity) from stock_transactions where stock_id='1' and product_id='$r[id]' and  type='out' group by product_id";
					$result2=mysql_query($sql2);
					$r2=mysql_fetch_array($result2);
					$outtransactions=$r2['SUM(quantity)']+0;
					//Calculating the balance
					$balance=$intransactions-$outtransactions;
					echo "<td class='table_date'>$intransactions</td>
					<td class='table_date'>$outtransactions</td>";
					echo"
					<td class='table_date'>$balance</td>
					<td width='50px'><a href='stock_product_print.php?stockid=1&product_id=$r[id]&intrans=$intransactions&outtrans=$outtransactions&balance=$balance'><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></td>

					</tr>";
					}
					?>
				</table>
				
			 </div>
			 </div>

			 <div id="tabs-2">
			 <br/>
			 	<h3 class="ico_mug">لیست اجناس موجود در این گدام: <a href="stock_report_excel.php?stockid=2&repdate=<?php echo $mydate;?>"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3>
				<div id="tabledata" class="section">
				<table width="100%" id="table" >
					<tr>
						<th width="8%">کد</th>
						<th>نام</th>
						<th>تعداد ورودی</th>
						<th>تعداد خروجی</th>
						<th>موجودی</th>
						<th>چاپ</th>
					</tr>
					<?php
					$sql="Select *from stock_transactions where stock_id='2' and type!='pending' group by product_id";
					$res=mysql_query($sql);
					while ($row=mysql_fetch_array($res)){
					//Getting product info
					$sql="Select *from products where id='$row[product_id]'";
					$result=mysql_query($sql);
					$r=mysql_fetch_array($result);
					echo"<tr align='center'>
					<td class='table_date'>$r[code] $r[code_cu]</td>
					<td class='table_date'>$r[name]</td>";
					//Getting all transactions which have type in
					$sql1="Select SUM(quantity) from stock_transactions where stock_id='2' and product_id='$r[id]' and type='in' group by product_id";
					$result1=mysql_query($sql1) or die(mysql_error());
					$r1=mysql_fetch_array($result1);
					$intransactions=$r1['SUM(quantity)']+0;
					//Getting all transactions which have type out
					$sql2="Select SUM(quantity) from stock_transactions where stock_id='2' and product_id='$r[id]' and  type='out' group by product_id";
					$result2=mysql_query($sql2);
					$r2=mysql_fetch_array($result2);
					$outtransactions=$r2['SUM(quantity)']+0;
					//Calculating the balance
					$balance=$intransactions-$outtransactions;
					echo "<td class='table_date'>$intransactions</td>
					<td class='table_date'>$outtransactions</td>";
					echo"
					<td class='table_date'>$balance</td>
					<td width='50px'><a href='stock_product_print.php?stockid=2&product_id=$r[id]&intrans=$intransactions&outtrans=$outtransactions&balance=$balance'><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></td>

					</tr>";
					}
					?>
				</table>
			 </div>
			 </div>
			 <div id="tabs-3">
				</br>
				
				<h3 class="ico_mug">لیست اجناس موجود در این گدام: <a href="stock_report_excel.php?stockid=3&repdate=<?php echo $mydate;?>"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3>
				<div id="tabledata" class="section">
								<table width="100%" id="table" >
					<tr>
						<th width="8%">کد</th>
						<th>نام</th>
						<th>تعداد ورودی</th>
						<th>تعداد خروجی</th>
						<th>موجودی</th>
						<th>چاپ</th>
					</tr>
					<?php
					$sql="Select *from stock_transactions where stock_id='4' and type!='pending' group by product_id";
					$res=mysql_query($sql);
					while ($row=mysql_fetch_array($res)){
					//Getting product info
					$sql="Select *from products where id='$row[product_id]'";
					$result=mysql_query($sql);
					$r=mysql_fetch_array($result);
					echo"<tr align='center'>
					<td class='table_date'>$r[code] $r[code_cu]</td>
					<td class='table_date'>$r[name]</td>";
					//Getting all transactions which have type in
					$sql1="Select SUM(quantity) from stock_transactions where stock_id='4' and product_id='$r[id]' and type='in' group by product_id";
					$result1=mysql_query($sql1) or die(mysql_error());
					$r1=mysql_fetch_array($result1);
					$intransactions=$r1['SUM(quantity)']+0;
					//Getting all transactions which have type out
					$sql2="Select SUM(quantity) from stock_transactions where stock_id='4' and product_id='$r[id]' and  type='out' group by product_id";
					$result2=mysql_query($sql2);
					$r2=mysql_fetch_array($result2);
					$outtransactions=$r2['SUM(quantity)']+0;
					//Calculating the balance
					$balance=$intransactions-$outtransactions;
					echo "<td class='table_date'>$intransactions</td>
					<td class='table_date'>$outtransactions</td>";
					echo"
					<td class='table_date'>$balance</td>
					<td class='table_date' width='50px'><a href='stock_product_print.php?stockid=4&product_id=$r[id]&intrans=$intransactions&outtrans=$outtransactions&balance=$balance'><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></td>

					</tr>";
					}
					?>
				</table>
				
			 </div>
			 </div>
			 <div id="tabs-4">
			 <br/>
			 	<h3 class="ico_mug">لیست اجناس موجود در این گدام: <a href="stock_report_excel.php?stockid=5&repdate=<?php echo $mydate;?>"><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3>
				<div id="tabledata" class="section">
				<table width="100%" id="table" >
					<tr>
						<th width="8%">کد</th>
						<th>نام</th>
						<th>تعداد ورودی</th>
						<th>تعداد خروجی</th>
						<th>موجودی</th>
						<th>چاپ</th>
					</tr>
					<?php
					$sql="Select *from stock_transactions where stock_id='5' and type!='pending' group by product_id";
					$res=mysql_query($sql);
					while ($row=mysql_fetch_array($res)){
					//Getting product info
					$sql="Select *from products where id='$row[product_id]'";
					$result=mysql_query($sql);
					$r=mysql_fetch_array($result);
					echo"<tr align='center'>
					<td class='table_date'>$r[code] $r[code_cu]</td>
					<td class='table_date'>$r[name]</td>";
					//Getting all transactions which have type in
					$sql1="Select SUM(quantity) from stock_transactions where stock_id='5' and product_id='$r[id]' and type='in' group by product_id";
					$result1=mysql_query($sql1) or die(mysql_error());
					$r1=mysql_fetch_array($result1);
					$intransactions=$r1['SUM(quantity)']+0;
					//Getting all transactions which have type out
					$sql2="Select SUM(quantity) from stock_transactions where stock_id='5' and product_id='$r[id]' and  type='out' group by product_id";
					$result2=mysql_query($sql2);
					$r2=mysql_fetch_array($result2);
					$outtransactions=$r2['SUM(quantity)']+0;
					//Calculating the balance
					$balance=$intransactions-$outtransactions;
					echo "<td class='table_date'>$intransactions</td>
					<td class='table_date'>$outtransactions</td>";
					echo"
					<td class='table_date'>$balance</td>
					<td width='50px'><a href='stock_product_print.php?stockid=5&product_id=$r[id]&intrans=$intransactions&outtrans=$outtransactions&balance=$balance'><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></td>

					</tr>";
					}
					?>
				</table>
			 </div>
			 </div>
			 <div id="tabs-5">
			 نمایش گزارش گدام:
			<select id='stockname' name='stockname'>
			<option value='%'>انتخاب نام گدام</option>
			<option value='1'>همه موتورها</option>
			<option value='2'>پرزه جات</option>
			<option value='3'>ضایعات</option>
			<option value='4'>موتورهای مونتاژ شده</option>
			<option value='5'>موتورهای نیمه مونتاژ</option>
			<option value='6'>موتورهای تکمیل</option>
			<option value='7'>موتورهای کلی</option>
			</select>
			 <input type="text" name="fromdate" id="fromdate" class="validate[required,custom[date]]" style="width:120px" />
			<input type="button" style="background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px " onclick="displayDatePicker('fromdate', this);"/>
				
			 تا تاریخ:
			 <input type="text" name="todate" id="todate" class="validate[required,custom[date]]" style="width:120px" />
			<input type="button" style="background-color:white; border:0; background-image:url(img/cal.png); width:24px;height:24px " onclick="displayDatePicker('todate', this);"/>
				
			 <input type="submit" name="viewreport" id="viewreport" style="border-top-left-radius: 10px ;border-top-right-radius: 10px ; border-bottom-left-radius: 10px ;border-bottom-right-radius: 10px ; cursor:pointer;color:white;  background-color:#5e6062; border:0;height:30px; width:130px;"  onmouseover="this.style.background='#252527'" onmouseout="this.style.background='#5e6062'" value="نمایش گزارش" />
			 <?php
				if(isset($_POST['viewreport'])){
					header("location:stocks.php?sid=$_POST[stockname]&fdate=$_POST[fromdate]&tdate=$_POST[todate]#tabs-5");
					die();
				}
				if($_GET['sid']!="" and $_GET['sid']!=null){
					$stock="همه گدام ها";
					$type="%";
					//Getting the stock name
					$stockid="%";
					if ($_GET['sid']==2){
						$stock="گدام پرزه جات";
						$stockid="2";
					}else if ($_GET['sid']==3){
						$stock="گدام ضایعات";
						$stockid="3";
					}else if ($_GET['sid']==4){
						$stock="موتورهای مونتاژ شده";
						$stockid="1";
						$type="and type='1'";
					}else if ($_GET['sid']==5){
						$stock="موتورهای نیمه مونتاژ";
						$stockid="1";
						$type="and type='2'";
					}else if ($_GET['sid']==6){
						$stock="گدام موتورهای کلی";
						$stockid="1";
						$type="and type='3'";
					}else if ($_GET['sid']==7){
						$stock="گدام موتورهای کلی";
						$type="";
						$stockid="5";
					}
					
					if($_GET['fdate']!="%" and $_GET['tdate']!="%"){
						echo "<br/><br/><h3>گزارش $stock از تاریخ : $_GET[fdate]  تا تاریخ $_GET[tdate]";
						$q="created_at between '$_GET[fdate]' and '$_GET[tdate]' and ";
					}else if($_GET['tdate']!="%" and $_GET['tdate']=="%"){
						echo "<br/><br/><h3>گزارش $stock در تاریخ : $_GET[fdate]  ";
						$q="created_at='$_GET[fdate]' and";
					}else if($_GET['fdate']=="%" and $_GET['tdate']!="%"){
						echo "<br/><br/><h3>گزارش $stock در تاریخ : $_GET[tdate]  ";
						$q="created_at='$_GET[tdate]' and";
					}
					echo "  <a href='stock_report_excel_main.php?stockid=$_GET[sid]&fromdate=$_GET[fdate]&todate=$_GET[tdate]'><img src='img/print.png'  style='margin-bottom:-4px;margin-right:10px' /></a></h3> <br/><br/>
					<table id='table' width='100%'>
					<tr><th>شماره</th>
					<th>نام جنس</th>
					<th>تاریخ و زمان</th>
					<th>نوع عملیات</th>
					<th>تعداد</th></tr>";
					$sql="select * from stock_transactions where ".$q." (type='in' or type='out') and stock_id LIKE '$stockid'";
					$res=mysql_query($sql) or die (mysql_error());
					$i=1;
					while($row=mysql_fetch_array($res)){
						//Getting product info
						$sql="Select *from products where id='$row[product_id]' $type ";
						$result=mysql_query($sql);
						$r=mysql_fetch_array($result);
						$type="";
						if($r['type']==1){
							$type="(مونتاژ شده)";
						}else if($r['type']==2){
							$type="(نیمه تکمیل)";
						}else if($r['type']==3){
							$type="(تکمیل)";
						}else 
						if($r['category_id']==2){
						$type="(پرزه)";
						}else if ($r['category_id']=2 and $row['stock_id']==4){
						$type="(ضایعات)";
						}else if ($r['category_id']=4 and $row['stock_id']==5){
						$type="(موتورهای کلی)";
						}
						$transactiontype="";
						if($row['type']=="in"){
							$transactiontype="ورودی";
						}else if($row['type']=="out"){
							$transactiontype="خروجی";
						}
						echo "<tr align='center'><td>$i</td><td>($r[code]) - $r[name] $type</td><td>$row[created_at] ($row[time])</td><td>$transactiontype</td><td>$row[quantity]</tr>";
					}
				}
			 echo "</table>";
			 ?>
			  </div>
			 </div>
			 </div>

			  </br>
			  	
 		</fieldset>
			
		</form>
		</div>
		
</div><!-- end container -->
	   <?php
	   include ("template_footer.php");
	   ?>
</body>
</html>
