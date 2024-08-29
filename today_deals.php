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
		<form action="today_deals.php" method="post" accept-charset="utf-8">
			<fieldset>
				</br>
				<select name="search_type" id="search_type" class="validate[required]">
					<option value="">انتخاب نوع داد و ستد</option>
					<option value="buy" <?php if($_POST['search_type'] == "buy"){ echo"selected"; } ?>>خرید</option>
					<option value="sell" <?php if($_POST['search_type'] == "sell"){ echo"selected"; } ?>>فروش</option>
					<option value="pay_bank" <?php if($_POST['search_type'] == "pay_bank"){ echo"selected"; } ?>>پرداخت بانکی</option>
					<option value="pay_cash" <?php if($_POST['search_type'] == "pay_cash"){ echo"selected"; } ?>>پرداخت نقدی</option>
					<option value="recieve_bank" <?php if($_POST['search_type'] == "recieve_bank"){ echo"selected"; } ?>>دریافت بانکی</option>
					<option value="recieve_cash" <?php if($_POST['search_type'] == "recieve_cash"){ echo"selected"; } ?>>دریافت نقدی</option>
					<option value="all">همه موارد</option>
					</select>
					<input type="submit" class="submit"  name="save" value="جستجو"/>
				<div id="tabledata" class="section">
				<?php echo pdate("l Y/m/d"); ?>
				<table width="3%" id="table" >
				<tr>
				<th style="width:5%">شماره</th>
				<th>کد</th>
				<th>نوعیت</th>
				<th>شرح</th>
				<th>توسط</th>
				<th>کریدت</th>
				<th>دبت</th>
				</tr>
				<?php
				    $today = pdate("Y-m-d");
					$number;
					if(isset($_POST['search_type'])){
					    $search_type = $_POST['search_type'];
					}
					if($search_type == 'buy'){
					       $sql7="Select proform_info.proform_id as proform_id, purchase_orders.price as price, purchase_orders.currency as currency, purchase_orders.quantity as quantity, purchase_orders.product_id as product_id from proform_info, purchase_orders where purchase_orders.created_at='$today' and proform_info_id=proform_info.id";
				           $res7=mysql_query($sql7) or die(mysql_error());
				           while($row7=mysql_fetch_array($res7)){
						      $number++;
					          $price = $row7['price'];
						      $currency = $row7['currency'];
						      $quantity = $row7['quantity'];
						      $amount = $row7['price'] * $row7['quantity'];
						      $product_id = $row7['product_id'];
							  $proform_id = $row7['proform_id'];
						   
						      $sql8="Select name from products where id='$product_id'";
				              $res8=mysql_query($sql8) or die(mysql_error());
				              $row8=mysql_fetch_array($res8);
					          $product_name = $row8['name'];
						      $description = $product_name." به تعداد ".$quantity." فی قیمت ".$price." ".$currency;
							  
							  $sql5="Select id, code, dealer_id from proforms where id='$proform_id'";
				              $res5=mysql_query($sql5) or die(mysql_error());
				              while($row5=mysql_fetch_array($res5)){
					              $id = $row5['id'];
						          $code_proform = $row5['code'];
						          $dealer_id = $row5['dealer_id'];
					    
				                  $sql6="Select first_name, last_name, company from dealers where id='$dealer_id'";
				                  $res6=mysql_query($sql6) or die(mysql_error());
				                  while($row6=mysql_fetch_array($res6)){
					              $dealer = $row6['first_name']." ".$row6['last_name']." ".$row6['company'];
					            }
					          echo"<tr>
				              <td class='table_date' align='center'>$number</td>
				              <td class='table_date' align='center'>$code_proform</td>
				              <td class='table_date' align='center'>خرید</td>
				              <td class='table_date' align='center'>$description</td>
				              <td class='table_date' align='center'>$dealer</td>
				              <td class='table_date' align='center'>$amount $currency</td>
				              <td class='table_date' align='center'>0</td>
				              </tr>";
					        }
						 }
							
					}elseif($search_type == 'sell'){
						$sql1="Select id, code, dealer_id from orders where created_at='$today' and type='out'";
				        $res1=mysql_query($sql1) or die(mysql_error());
				        while($row1=mysql_fetch_array($res1)){
					        $number++;
					        $id = $row1['id'];
						    $code_order = $row1['code'];
						    $dealer_id = $row1['dealer_id'];
					    
				            $sql2="Select first_name, last_name, company from dealers where id='$dealer_id'";
				            $res2=mysql_query($sql2) or die(mysql_error());
				            while($row2=mysql_fetch_array($res2)){
					            $dealer = $row2['first_name']." ".$row2['last_name']." ".$row2['company'];
					        }
					   
					        $sql3="Select price, currency, quantity, product_id from order_details where order_id='$id'";
				            $res3=mysql_query($sql3) or die(mysql_error());
				            while($row3=mysql_fetch_array($res3)){
					            $price = $row3['price'];
						        $currency = $row3['currency'];
						        $quantity = $row3['quantity'];
						        $amount = $row3['price'] * $row3['quantity'];
						        $product_id = $row3['product_id'];
						   
						        $sql4="Select name from products where id='$product_id'";
				                $res4=mysql_query($sql4) or die(mysql_error());
				                while($row4=mysql_fetch_array($res4)){
					                $product_name = $row4['name'];
					            }
						        $description = $product_name." به تعداد ".$quantity." فی قیمت ".$price." ".$currency;
					    } 
					   
					        echo"<tr>
				            <td class='table_date' align='center'>$number</td>
				            <td class='table_date' align='center'>$code_order</td>
				            <td class='table_date' align='center'>فروش</td>
				            <td class='table_date'  align='center'>$description</td>
				            <td class='table_date'  align='center'>$dealer</td>
				            <td class='table_date'  align='center'>0</td>
				            <td class='table_date'  align='center'>$amount $currency</td>
				            </tr>";
					  }
					}elseif($search_type == "pay_bank"){
					
					    $sql="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_type='OUT' and transact_teller=''";
				        $res=mysql_query($sql) or die(mysql_error());
				        while($row=mysql_fetch_array($res)){
						  $number++;
						  $code = $row['code'];
						  $deal_by = $row['deal_by'];
					      $amount = $row['amount'] + 0;
					      $currency = $row['currency'];
						  $reason = $row['reason'];
				          echo"<tr>
				          <td class='table_date' align='center'>$number</td>
				          <td class='table_date' align='center'>$code</td>
				          <td class='table_date' align='center'>پرداخت بانکی</td>
				          <td class='table_date'  align='center'>$reason</td>
				          <td class='table_date'  align='center'>$deal_by</td>
				          <td class='table_date'  align='center'>0</td>
				          <td class='table_date'  align='center'>$amount $currency</td>
				          </tr>";
				        }
						
					}elseif($search_type == "recieve_bank"){
					
					    $sql="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_type='IN' and transact_teller=''";
				        $res=mysql_query($sql) or die(mysql_error());
				        while($row=mysql_fetch_array($res)){
						  $number++;
						  $code = $row['code'];
						  $deal_by = $row['deal_by'];
					      $amount = $row['amount'] + 0;
					      $currency = $row['currency'];
						  $reason = $row['reason'];
						  $credit = 0;
						  $debt = 0;
				          echo"<tr>
				          <td class='table_date' align='center'>$number</td>
				          <td class='table_date' align='center'>$code</td>
				          <td class='table_date' align='center'>دریافت بانکی</td>
				          <td class='table_date'  align='center'>$reason</td>
				          <td class='table_date'  align='center'>$deal_by</td>
				          <td class='table_date'  align='center'>$amount $currency</td>
				          <td class='table_date'  align='center'>0</td>
				          </tr>";
				        }
						
						}elseif($search_type == "pay_cash"){
					
					    $sql="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_teller='OUT'";
				        $res=mysql_query($sql) or die(mysql_error());
				        while($row=mysql_fetch_array($res)){
						  $number++;
						  $code = $row['code'];
						  $deal_by = $row['deal_by'];
					      $amount = $row['amount'] + 0;
					      $currency = $row['currency'];
						  $reason = $row['reason'];
						 
				          echo"<tr>
				          <td class='table_date' align='center'>$number</td>
				          <td class='table_date' align='center'>$code</td>
				          <td class='table_date' align='center'>پرداخت نقدی</td>
				          <td class='table_date'  align='center'>$reason</td>
				          <td class='table_date'  align='center'>$deal_by</td>
				          <td class='table_date'  align='center'>0</td>
				          <td class='table_date'  align='center'>$amount $currency</td>
				          </tr>";
				        }
						
					}elseif($search_type == "recieve_cash"){
					
					    $sql="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_teller='IN'";
				        $res=mysql_query($sql) or die(mysql_error());
				        while($row=mysql_fetch_array($res)){
						  $number++;
						  $code = $row['code'];
						  $deal_by = $row['deal_by'];
					      $amount = $row['amount'] + 0;
					      $currency = $row['currency'];
						  $reason = $row['reason'];
						 
				          echo"<tr>
				          <td class='table_date' align='center'>$number</td>
				          <td class='table_date' align='center'>$code</td>
				          <td class='table_date' align='center'>دریافت نقدی</td>
				          <td class='table_date'  align='center'>$reason</td>
				          <td class='table_date'  align='center'>$deal_by</td>
				          <td class='table_date'  align='center'>$amount $currency</td>
				          <td class='table_date'  align='center'>0</td>
				          </tr>";
				        }
					}
					else{
				        $sql="Select code, created_at, amount, currency, reason, transact_type, deal_by, transact_teller from money_transactions where created_at='$today'";
				        $res=mysql_query($sql) or die(mysql_error());
				        while($row=mysql_fetch_array($res)){
						  $number++;
						  $code = $row['code'];
						  $deal_by = $row['deal_by'];
					      $amount = $row['amount'] + 0;
					      $currency = $row['currency'];
						  $reason = $row['reason'];
						  $transact_type = $row['transact_type'];
						  $transact_teller = $row['transact_teller'];
						  $credit = 0;
						  $debt = 0;
						  
						  if($transact_type == "IN" and $transact_teller == ""){
						      $transact = "دریافت بانکی";
						  }
						  
						  if($transact_type == "OUT" and $transact_teller == ""){
						      $transact = "پرداخت بانکی";
						  }
						  
						  if($transact_teller == "IN"){
						      $transact = "دریافت نقدی";
						  }
						  
						   if($transact_teller == "OUT"){
						      $transact = "پرداخت نقدی";
						  }
						  
						  if($transact_type == "OUT"){
						      $debt = $amount." ".$currency;
						  }
						  
						  if($transact_type == "IN"){
						      $credit = $amount." ".$currency;
						  }
						 
				
				echo"<tr>
				<td class='table_date' align='center'>$number</td>
				<td class='table_date' align='center'>$code</td>
				<td class='table_date' align='center'>$transact</td>
				<td class='table_date'  align='center'>$reason</td>
				<td class='table_date'  align='center'>$deal_by</td>
				<td class='table_date'  align='center'>$credit</td>
				<td class='table_date'  align='center'>$debt</td>
				</tr>";
				}
				
				$sql1="Select id, code, dealer_id from orders where created_at='$today' and type='out'";
				    $res1=mysql_query($sql1) or die(mysql_error());
				    while($row1=mysql_fetch_array($res1)){
					    $number++;
					    $id = $row1['id'];
						$code_order = $row1['code'];
						$dealer_id = $row1['dealer_id'];
					    
				       $sql2="Select first_name, last_name, company from dealers where id='$dealer_id'";
				       $res2=mysql_query($sql2) or die(mysql_error());
				       while($row2=mysql_fetch_array($res2)){
					       $dealer = $row2['first_name']." ".$row2['last_name']." ".$row2['company'];
					   }
					   
					   $sql3="Select price, currency, quantity, product_id from order_details where order_id='$id'";
				       $res3=mysql_query($sql3) or die(mysql_error());
				       while($row3=mysql_fetch_array($res3)){
					       $price = $row3['price'];
						   $currency = $row3['currency'];
						   $quantity = $row3['quantity'];
						   $amount = $row3['price'] * $row3['quantity'];
						   $product_id = $row3['product_id'];
						   
						   $sql4="Select name from products where id='$product_id'";
				           $res4=mysql_query($sql4) or die(mysql_error());
				           while($row4=mysql_fetch_array($res4)){
					            $product_name = $row4['name'];
					       }
						   
						   $description = $product_name." به تعداد ".$quantity." فی قیمت ".$price." ".$currency;
					   } 
					   
					   echo"<tr>
				       <td class='table_date' align='center'>$number</td>
				       <td class='table_date' align='center'>$code_order</td>
				       <td class='table_date' align='center'>فروش</td>
				       <td class='table_date'  align='center'>$description</td>
				       <td class='table_date'  align='center'>$dealer</td>
				       <td class='table_date'  align='center'>0</td>
				       <td class='table_date'  align='center'>$amount $currency</td>
				       </tr>";
					}
										   
					   $sql7="Select proform_info.proform_id as proform_id, purchase_orders.price as price, purchase_orders.currency as currency, purchase_orders.quantity as quantity, purchase_orders.product_id as product_id from proform_info, purchase_orders where purchase_orders.created_at='$today' and proform_info_id=proform_info.id ";
				       $res7=mysql_query($sql7) or die(mysql_error());
				       while($row7=mysql_fetch_array($res7)){
					   $number++;
					       $price = $row7['price'];
						   $currency = $row7['currency'];
						   $quantity = $row7['quantity'];
						   $amount = $row7['price'] * $row7['quantity'];
						   $product_id = $row7['product_id'];
						   $proform_id = $row7['proform_id'];
						   
						   $sql8="Select name from products where id='$product_id'";
				           $res8=mysql_query($sql8) or die(mysql_error());
				           $row8=mysql_fetch_array($res8);
					       $product_name = $row8['name'];
						   $description = $product_name." به تعداد ".$quantity." فی قیمت ".$price." ".$currency;
						   
						   $sql5="Select id, code, dealer_id from proforms where id='$proform_id'";
				           $res5=mysql_query($sql5) or die(mysql_error());
				           while($row5=mysql_fetch_array($res5)){
					    	    $id = $row5['id'];
						        $code_proform = $row5['code'];
						        $dealer_id = $row5['dealer_id'];
					    
				                $sql6="Select first_name, last_name, company from dealers where id='$dealer_id'";
				                $res6=mysql_query($sql6) or die(mysql_error());
				                while($row6=mysql_fetch_array($res6)){
					                 $dealer = $row6['first_name']." ".$row6['last_name']." ".$row6['company'];
					            }
					        }
					       echo"<tr>
				           <td class='table_date' align='center'>$number</td>
				           <td class='table_date' align='center'>$code_proform</td>
				           <td class='table_date' align='center'>خرید</td>
				           <td class='table_date'  align='center'>$description</td>
				           <td class='table_date'  align='center'>$dealer</td>
				           <td class='table_date'  align='center'>$amount $currency</td>
				           <td class='table_date'  align='center'>0</td>
				           </tr>";
					       $number++;
					     } 
					  }
				?>
				</table>
				<br />
				<hr />
				<div align="center">
				<br />
				<?php
					if($search_type == "sell"){
					   $sql="select id from orders where created_at='$today' and type='out'";
					   $res=mysql_query($sql);
					    while($row=mysql_fetch_array($res)){
						    $order_id = $row['id'];
						
						    $sql1="select price, currency, quantity from order_details where order_id='$order_id'";
					        $res1=mysql_query($sql1);
					        while($row1=mysql_fetch_array($res1)){
						 
						        if($row1['currency'] == "دالر"){
							        $usd_sel += $row1['price'] * $row1['quantity'];
							    }
							
							    if($row1['currency'] == "افغانی"){
							        $af_sel += $row1['price'] * $row1['quantity'];
							    }
							
							    if($row1['currency'] == "تومان"){
							        $irr_sel += $row1['price'] * $row1['quantity'];
							    }
							
							    if($row1['currency'] == "کالدار"){
							       $pkr_sel += $row1['price'] * $row1['quantity'];
							    }
						    }
					  }
					  
					  echo"
				      <table width='80%'>
				      <tr>
				      <td><b>مجموع مبالغ</b></td>
				      <td><b>دالر</b></td>
				      <td><b>افغانی</b></td>
				      <td><b>تومان</b></td>
				      <td><b>کالدار</b></td>
				      </tr>
				      <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				      <tr>
				      <tr>
				      <td><b>فروش (دبت)</b></td>
				      <td><b>$usd_sel</b></td>
				      <td><b>$af_sel</b></td>
				      <td> <b>$irr_sel</b></td>
				      <td><b>$pkr_sel</b></td>
				      </tr>
				      <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				      </table>";
					}elseif($search_type == "buy"){
						   $sql1="select purchase_orders.price as price, purchase_orders.currency as currency, purchase_orders.quantity as quantity from proform_info, purchase_orders where purchase_orders.created_at='$today' and proform_info_id=proform_info.id";
					       $res1=mysql_query($sql1);
					       while($row1=mysql_fetch_array($res1)){
						 
						      if($row1['currency'] == "دالر"){
							     $usd_buy += $row1['price'] * $row1['quantity'];
							  }
							
							 if($row1['currency'] == "افغانی"){
							     $af_buy += $row1['price'] * $row1['quantity'];
						   	 }
							
							 if($row1['currency'] == "تومان"){
							     $irr_buy += $row1['price'] * $row1['quantity'];
							 }
							
							 if($row1['currency'] == "کالدار"){
							     $pkr_buy += $row1['price'] * $row1['quantity'];
							 }
						}
					  echo"
				      <table width='80%'>
				      <tr>
				      <td><b>مجموع مبالغ</b></td>
				      <td><b>دالر</b></td>
				      <td><b>افغانی</b></td>
				      <td><b>تومان</b></td>
				      <td><b>کالدار</b></td>
				      </tr>
				      <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				      <tr>
				      <tr>
				      <td><b>خرید (کریدت)</b></td>
				      <td><b>$usd_buy</b></td>
				      <td><b>$af_buy</b></td>
				      <td> <b>$irr_buy</b></td>
				      <td><b>$pkr_buy</b></td>
				      </tr>
				      <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				      </table>";
					
					}elseif($search_type == "pay_bank"){
					      $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='' and currency ='دالر' and created_at='$today' group by currency";
					      $res=mysql_query($sql);
					      while($row=mysql_fetch_array($res)){
						     $usd_debt_bank = $row['sum(amount)'];
					      }
					
					      $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='' and currency ='افغانی' and created_at='$today' group by currency";
					      $res=mysql_query($sql);
					      while($row=mysql_fetch_array($res)){
						     $af_debt_bank = $row['sum(amount)'];
					      }
					
					      $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='' and currency ='تومان' and created_at='$today' group by currency";
					      $res=mysql_query($sql);
					      while($row=mysql_fetch_array($res)){
						     $irr_debt_bank = $row['sum(amount)'];
					      }
					
					      $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='کالدار' and created_at='$today' group by currency";
					      $res=mysql_query($sql);
					      while($row=mysql_fetch_array($res)){
						     $pkr_debt_bank = $row['sum(amount)'];
					      }
						  
						  echo"
				          <table width='80%'>
				          <tr>
				          <td><b>مجموع مبالغ</b></td>
				          <td><b>دالر</b></td>
				          <td><b>افغانی</b></td>
				          <td><b>تومان</b></td>
				          <td><b>کالدار</b></td>
				          </tr>
				          <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				          <tr>
						  <td><b>پرداخت بانکی (دبت)</b></td>
				          <td><b>$usd_debt_bank</b></td>
				          <td><b>$af_debt_bank</b></td>
			 	          <td> <b>$irr_debt_bank</b></td>
				          <td><b>$pkr_debt_bank</b></td>
				          </tr>
				          <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
					      </table>";
					}elseif($search_type == "pay_cash"){
					
					    $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='OUT' and currency ='دالر' and created_at='$today' group by currency";
					    $res=mysql_query($sql);
					    while($row=mysql_fetch_array($res)){
						     $usd_debt_cash = $row['sum(amount)'];
					    }
					
					    $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='OUT' and currency ='افغانی' and created_at='$today' group by currency";
					    $res=mysql_query($sql);
					    while($row=mysql_fetch_array($res)){
						     $af_debt_cash = $row['sum(amount)'];
				    	}
					
					    $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='OUT' and currency ='تومان' and created_at='$today' group by currency";
					    $res=mysql_query($sql);
					    while($row=mysql_fetch_array($res)){
						     $irr_debt_cash = $row['sum(amount)'];
					    }
					
					    $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='OUT' and currency ='کالدار' and created_at='$today' group by currency";
					    $res=mysql_query($sql);
					    while($row=mysql_fetch_array($res)){
						     $pkr_debt_cash = $row['sum(amount)'];
					    }
					
					      echo"
				          <table width='80%'>
				          <tr>
				          <td><b>مجموع مبالغ</b></td>
				          <td><b>دالر</b></td>
				          <td><b>افغانی</b></td>
				          <td><b>تومان</b></td>
				          <td><b>کالدار</b></td>
				          </tr>
				          <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				          <tr>
						  <td><b>پرداخت نقدی (دبت)</b></td>
				          <td><b>$usd_debt_cash</b></td>
				          <td><b>$af_debt_cash</b></td>
				          <td> <b>$irr_debt_cash</b></td>
				          <td><b>$pkr_debt_cash</b></td>
				          </tr>
				          <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
					      </table>";
						  
					}elseif($search_type == "recieve_bank"){
					
					   $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='دالر' and created_at='$today' group by currency";
					   $res=mysql_query($sql);
					   while($row=mysql_fetch_array($res)){
						     $usd_credit_bank = $row['sum(amount)'];
					   }
					
					   $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='افغانی' and created_at='$today' group by currency";
					   $res=mysql_query($sql);
					   while($row=mysql_fetch_array($res)){
						     $af_credit_bank = $row['sum(amount)'];
					   }
					
					   $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='تومان' and created_at='$today' group by currency";
					   $res=mysql_query($sql);
					   while($row=mysql_fetch_array($res)){
						     $irr_credit_bank = $row['sum(amount)'];
					   }
					
					   $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='کالدار' and created_at='$today' group by currency";
					   $res=mysql_query($sql);
					   while($row=mysql_fetch_array($res)){
						     $pkr_credit_bank = $row['sum(amount)'];
					   }
					   
					      echo"
				          <table width='80%'>
				          <tr>
				          <td><b>مجموع مبالغ</b></td>
				          <td><b>دالر</b></td>
				          <td><b>افغانی</b></td>
				          <td><b>تومان</b></td>
				          <td><b>کالدار</b></td>
				          </tr>
				          <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				          <tr>
						  <td><b>دریافت بانکی (کریدت)</b></td>
				          <td><b>$usd_credit_bank</b></td>
				          <td><b>$af_credit_bank</b></td>
				          <td> <b>$irr_credit_bank</b></td>
				          <td><b>$pkr_credit_bank</b></td>
				          </tr>
				          <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
					      </table>";
					
					}elseif($search_type == "recieve_cash"){
					
					    $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='دالر' and created_at='$today' group by currency";
					    $res=mysql_query($sql);
					    while($row=mysql_fetch_array($res)){
						     $usd_credit_cash = $row['sum(amount)'];
					    }
					
					    $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='افغانی' and created_at='$today' group by currency";
					    $res=mysql_query($sql);
					    while($row=mysql_fetch_array($res)){
						     $af_credit_cash = $row['sum(amount)'];
				    	}
					
					   $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='تومان' and created_at='$today' group by currency";
					   $res=mysql_query($sql);
					   while($row=mysql_fetch_array($res)){
						     $irr_credit_cash = $row['sum(amount)'];
					   }
					
					   $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='کالدار' and created_at='$today' group by currency";
					   $res=mysql_query($sql);
					   while($row=mysql_fetch_array($res)){
						     $pkr_credit_cash = $row['sum(amount)'];
					   }
					   
					      echo"
				          <table width='80%'>
				          <tr>
				          <td><b>مجموع مبالغ</b></td>
				          <td><b>دالر</b></td>
				          <td><b>افغانی</b></td>
				          <td><b>تومان</b></td>
				          <td><b>کالدار</b></td>
				          </tr>
				          <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				          <tr>
						  <td><b>دریافت نقدی (کریدت)</b></td>
				          <td><b>$usd_credit_cash</b></td>
				          <td><b>$af_credit_cash</b></td>
				          <td> <b>$irr_credit_cash</b></td>
				          <td><b>$pkr_credit_cash</b></td>
				          </tr>
			              <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
					      </table>";
					
					}else{
				    $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='دالر' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $usd_credit_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='افغانی' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $af_credit_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='تومان' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $irr_credit_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='کالدار' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $pkr_credit_bank = $row['sum(amount)'];
					}
					
					 $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='' and currency ='دالر' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $usd_debt_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='' and currency ='افغانی' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $af_debt_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='' and currency ='تومان' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $irr_debt_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='کالدار' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $pkr_debt_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='' and currency ='کالدار' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $pkr_debt_bank = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='دالر' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $usd_credit_cash = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='افغانی' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $af_credit_cash = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='تومان' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $irr_credit_cash = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='IN' and currency ='کالدار' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $pkr_credit_cash = $row['sum(amount)'];
					}
					
					 $sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='OUT' and currency ='دالر' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $usd_debt_cash = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='OUT' and currency ='افغانی' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $af_debt_cash = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='OUT' and transact_teller='OUT' and currency ='تومان' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $irr_debt_cash = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='OUT' and currency ='کالدار' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $pkr_debt_cash = $row['sum(amount)'];
					}
					
					$sql="select sum(amount), currency, transact_type from money_transactions where transact_type='IN' and transact_teller='OUT' and currency ='کالدار' and created_at='$today' group by currency";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						     $pkr_debt_cash = $row['sum(amount)'];
					}
					
					$sql="select id from orders where created_at='$today' and type='out'";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)){
						$order_id = $row['id'];
						
						$sql1="select price, currency, quantity from order_details where order_id='$order_id'";
					    $res1=mysql_query($sql1);
					    while($row1=mysql_fetch_array($res1)){
						 
						    if($row1['currency'] == "دالر"){
							    $usd_sel += $row1['price'] * $row1['quantity'];
							}
							
							if($row1['currency'] == "افغانی"){
							   $af_sel += $row1['price'] * $row1['quantity'];
							}
							
							if($row1['currency'] == "تومان"){
							   $irr_sel += $row1['price'] * $row1['quantity'];
							}
							
							if($row1['currency'] == "کالدار"){
							   $pkr_sel += $row1['price'] * $row1['quantity'];
							}
						}
					}
					
						$sql1="select purchase_orders.price as price, purchase_orders.currency as currency, purchase_orders.quantity as quantity from proform_info, purchase_orders where purchase_orders.created_at='$today' and proform_info_id=proform_info.id";
					    $res1=mysql_query($sql1);
					    while($row1=mysql_fetch_array($res1)){
						 
						    if($row1['currency'] == "دالر"){
							    $usd_buy += $row1['price'] * $row1['quantity'];
							}
							
							if($row1['currency'] == "افغانی"){
							   $af_buy += $row1['price'] * $row1['quantity'];
							}
							
							if($row1['currency'] == "تومان"){
							   $irr_buy += $row1['price'] * $row1['quantity'];
							}
							
							if($row1['currency'] == "کالدار"){
							   $pkr_buy += $row1['price'] * $row1['quantity'];
							}
						}
				echo"
				<table width='80%'>
				<tr>
				<td><b>مجموع مبالغ</b></td>
				<td><b>دالر</b></td>
				<td><b>افغانی</b></td>
				<td><b>تومان</b></td>
				<td><b>کالدار</b></td>
				</tr>
				<tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				<tr>
				<tr>
				<td><b>فروش (دبت)</b></td>
				<td><b>$usd_sel</b></td>
				<td><b>$af_sel</b></td>
				<td> <b>$irr_sel</b></td>
				<td><b>$pkr_sel</b></td>
				</tr>
				<tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				<tr>
				<tr>
				<td><b>خرید (کریدت)</b></td>
				<td><b>$usd_buy</b></td>
				<td><b>$af_buy</b></td>
				<td> <b>$irr_buy</b></td>
				<td><b>$pkr_buy</b></td>
				</tr>
				<tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				<tr>
				<td><b>پرداخت بانکی (دبت)</b></td>
				<td><b>$usd_debt_bank</b></td>
				<td><b>$af_debt_bank</b></td>
				<td> <b>$irr_debt_bank</b></td>
				<td><b>$pkr_debt_bank</b></td>
				</tr>
				<tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				<tr>
				<td><b>پرداخت نقدی (دبت)</b></td>
				<td><b>$usd_debt_cash</b></td>
				<td><b>$af_debt_cash</b></td>
				<td> <b>$irr_debt_cash</b></td>
				<td><b>$pkr_debt_cash</b></td>
				</tr>
				<tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				<tr>
				<td><b>دریافت بانکی (کریدت)</b></td>
				<td><b>$usd_credit_bank</b></td>
				<td><b>$af_credit_bank</b></td>
				<td> <b>$irr_credit_bank</b></td>
				<td><b>$pkr_credit_bank</b></td>
				</tr>
				<tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				<tr>
				<td><b>دریافت نقدی (کریدت)</b></td>
				<td><b>$usd_credit_cash</b></td>
				<td><b>$af_credit_cash</b></td>
				<td> <b>$irr_credit_cash</b></td>
				<td><b>$pkr_credit_cash</b></td>
				</tr>
			    <tr><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td><td><hr align='right'/></td></tr>
				</table>";
			 }
				?>
				</div>
				</div>
				 <a href="today_deals_excel.php"><input type="submit" class="submit"  name="report" value="تهیه گزارش"/></a>
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