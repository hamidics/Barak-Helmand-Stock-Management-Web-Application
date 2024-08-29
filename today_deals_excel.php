<?php		
require_once("../library/db.php");
require_once '../library/excel_library/PHPExcel/IOFactory.php';
require_once '../library/pdate.php';
			
			$objReader = PHPExcel_IOFactory::createReader('Excel5');
			$objPHPExcel = $objReader->load("excel_templates/today_deals.xls");
			$today=pdate("Y-m-d");
			$time=pdate("H A");
			$date_and_time = $today."   :".$time;
			$objPHPExcel->getActiveSheet()->setCellValue('A4', $date_and_time);
			
			$i = 6;
			
			$styleThinBlackBorderOutline = array(
	            'borders' => array(
		           'outline' => array(
			           'style' => PHPExcel_Style_Border::BORDER_THIN,
			                'color' => array('argb' => 'FF000000'),
		            ),
	            ),
            );
			
			            $sql3="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_teller='IN'";
				        $res3=mysql_query($sql3) or die(mysql_error());
				        while($row3=mysql_fetch_array($res3)){
						  $i++;
						  $code_recieve_cash = $row3['code'];
						  $deal_by_recieve_cash = $row3['deal_by'];
					      $amount_recieve_cash = $row3['amount'] + 0;
					      $currency_recieve_cash = $row3['currency'];
						  $reason_recieve_cash = $row3['reason'];
						  $type_recieve_cash = "دریافت نقدی";
						  $amount_by_currency_recieve_cash = $row3['amount']." ".$row3['currency'];

						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
						  $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  
						   $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, '0');
						   $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $amount_by_currency_recieve_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $deal_by_recieve_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $reason_recieve_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $type_recieve_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $code_recieve_cash);
				        }
						
	                   $sql4="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_type='IN' and transact_teller=''";
				       $res4=mysql_query($sql4) or die(mysql_error());
				       while($row4=mysql_fetch_array($res4)){
						  $i++;
						  $code_recieve_bank = $row4['code'];
						  $deal_by_recieve_bank = $row4['deal_by'];
					      $amount_recieve_bank = $row4['amount'];
					      $currency_recieve_bank = $row4['currency'];
						  $reason_recieve_bank = $row4['reason'];
						  $type_recieve_bank = "دریافت بانکی";
						  $amount_by_currency_recieve_bank = $row4['amount']." ".$row4['currency'];
				           
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
						  $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  
						   $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, '0');
						   $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $amount_by_currency_recieve_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $deal_by_recieve_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $reason_recieve_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $type_recieve_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $code_recieve_bank);
	                      
				        }
						
			
			            $sql1="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_type='OUT' and transact_teller=''";
				        $res1=mysql_query($sql1) or die(mysql_error());
				        while($row1=mysql_fetch_array($res1)){
						  $i++;
						  $code_pay_bank = $row1['code'];
						  $deal_by_pay_bank = $row1['deal_by'];
					      $amount_pay_bank = $row1['amount'];
					      $currency_pay_bank = $row1['currency'];
						  $reason_pay_bank = $row1['reason'];
						  $type_pay_bank = "پراخت بانکی";
						  $amount_by_currency_pay_bank = $row1['amount']." ".$row1['currency'];
				           
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
						  $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  
						   $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $amount_by_currency_pay_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, '0');
						   $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $deal_by_pay_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $reason_pay_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $type_pay_bank);
						   $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $code_pay_bank);
	                      
				        }
						
						$sql2="Select code, created_at, amount, currency, reason, deal_by from money_transactions where created_at='$today' and transact_teller='OUT'";
				        $res2=mysql_query($sql2) or die(mysql_error());
				        while($row2=mysql_fetch_array($res2)){
						  $i++;
						  $code_pay_cash = $row2['code'];
						  $deal_by_pay_cash = $row2['deal_by'];
					      $amount = $row2['amount'] + 0;
					      $currency_pay_cash = $row2['currency'];
						  $reason_pay_cash = $row2['reason'];
						  $type_pay_cash = "پراخت نقدی";
						  $amount_by_currency_pay_cash = $row2['amount']." ".$row2['currency'];
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
						  $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  
						   $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $amount_by_currency_pay_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, '0');
						   $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $deal_by_pay_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $reason_pay_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $type_pay_cash);
						   $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $code_pay_cash);
				        }
					   
					       $sql7="Select proform_info.id as proform_id, purchase_orders.price as price, purchase_orders.currency as currency, purchase_orders.quantity as quantity, purchase_orders.product_id as product_id from proform_info, purchase_orders where proform_info_id=proform_info.id and purchase_orders.created_at='$today'";
				           $res7=mysql_query($sql7) or die(mysql_error());
				           while($row7=mysql_fetch_array($res7)){
						      $i++;
					          $price_proform = $row7['price'];
						      $currency_proform = $row7['currency'];
						      $quantity_proform = $row7['quantity'];
						      $amount_proform = $row7['price'] * $row7['quantity'];
						      $product_id_proform = $row7['product_id'];
							  $proform_id = $row7['proform_id'];
							  $type_proform = "خرید";
						      $amount_by_currency_proform = $amount_proform." ".$currency_proform;
						   
						      $sql8="Select name from products where id='$product_id_proform'";
				              $res8=mysql_query($sql8) or die(mysql_error());
				              $row8=mysql_fetch_array($res8);
					          $product_name_proform = $row8['name'];
						      $description_proform = $product_name_proform." به تعداد ".$quantity_proform." فی قیمت ".$price_proform." ".$currency_proform;
					    
					        $sql5="Select id, code, dealer_id from proforms where id='$proform_id'";
				            $res5=mysql_query($sql5) or die(mysql_error());
				            while($row5=mysql_fetch_array($res5)){
					            $id_proform = $row5['id'];
						        $code_proform = $row5['code'];
						        $dealer_id_proform = $row5['dealer_id'];
					    
				                $sql6="Select first_name, last_name, company from dealers where id='$dealer_id_proform'";
				                $res6=mysql_query($sql6) or die(mysql_error());
				                $row6=mysql_fetch_array($res6);
					            $dealer_proform = $row6['first_name']." ".$row6['last_name']." ".$row6['company'];
							}
							   
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
						  $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  
						   $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, '0');
						   $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $amount_by_currency_proform);
						   $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $dealer_proform);
						   $objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $description_proform);
						   $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $type_proform);
						   $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $code_proform);
					
					}
						
						$sql9="Select id, code, dealer_id from orders where created_at='$today' and type='out'";
				        $res9=mysql_query($sql9) or die(mysql_error());
				        while($row9=mysql_fetch_array($res9)){
						    $i++;
					        $id_order = $row9['id'];
						    $code_order = $row9['code'];
						    $dealer_id_order = $row9['dealer_id'];
					    
				            $sql10="Select first_name, last_name, company from dealers where id='$dealer_id_order'";
				            $res10=mysql_query($sql2) or die(mysql_error());
				            while($row10=mysql_fetch_array($res10)){
					            $dealer_order = $row10['first_name']." ".$row10['last_name']." ".$row10['company'];
					        }
					   
					        $sql11="Select price, currency, quantity, product_id from order_details where order_id='$id_order'";
				            $res11=mysql_query($sql11) or die(mysql_error());
				            while($row11=mysql_fetch_array($res11)){
					            $price_order = $row11['price'];
						        $currency_order = $row11['currency'];
						        $quantity_order = $row11['quantity'];
						        $amount_order = $row11['price'] * $row11['quantity'];
						        $product_id_order = $row11['product_id'];
								$type = "فروش";
						        $amount_by_currency_order = $amount_order." ".$currency_order;
						   
						        $sql12="Select name from products where id='$product_id_order'";
				                $res12=mysql_query($sql12) or die(mysql_error());
				                while($row12=mysql_fetch_array($res12)){
					                $product_name_order = $row12['name'];
					            }
						        $description_order = $product_name_order." به تعداد ".$quantity_order." فی قیمت ".$price_order." ".$currency_order;
					    } 
					   
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  $objPHPExcel->getActiveSheet()->getStyle('I'.$i)->applyFromArray($styleThinBlackBorderOutline);
	                      $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($styleThinBlackBorderOutline);
						  
						  $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
						  $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  $objPHPExcel->getActiveSheet()->getStyle('J'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
						  
						   $objPHPExcel->getActiveSheet()->setCellValue('A'.$i, $amount_by_currency_order);
						   $objPHPExcel->getActiveSheet()->setCellValue('B'.$i, '0');
						   $objPHPExcel->getActiveSheet()->setCellValue('C'.$i, $dealer_order);
						   $objPHPExcel->getActiveSheet()->setCellValue('D'.$i, $description_order);
						   $objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $type_order);
						   $objPHPExcel->getActiveSheet()->setCellValue('J'.$i, $code_order);
					  }
						
					$objPHPExcel->setActiveSheetIndex(1);
	                $objPHPExcel->getActiveSheet()->setCellValue('A4', $date_and_time);
					
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
					    $objPHPExcel->getActiveSheet()->setCellValue('G7', $usd_sel);
						$objPHPExcel->getActiveSheet()->setCellValue('G8', $usd_buy);
						$objPHPExcel->getActiveSheet()->setCellValue('G9', $usd_debt_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('G10', $usd_debt_cash);
						$objPHPExcel->getActiveSheet()->setCellValue('G11', $usd_credit_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('G12', $usd_credit_cash);
						$objPHPExcel->getActiveSheet()->setCellValue('E7', $af_sel);
						$objPHPExcel->getActiveSheet()->setCellValue('E8', $af_buy);
						$objPHPExcel->getActiveSheet()->setCellValue('E9', $af_debt_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('E10', $af_debt_cash);
						$objPHPExcel->getActiveSheet()->setCellValue('E11', $af_credit_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('E12', $af_credit_cash);
						$objPHPExcel->getActiveSheet()->setCellValue('C7', $irr_sel);
						$objPHPExcel->getActiveSheet()->setCellValue('C8', $irr_buy);
						$objPHPExcel->getActiveSheet()->setCellValue('C9', $irr_debt_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('C10', $irr_debt_cash);
						$objPHPExcel->getActiveSheet()->setCellValue('C11', $irr_credit_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('C12', $irr_credit_cash);
						$objPHPExcel->getActiveSheet()->setCellValue('A7', $pkr_sel);
						$objPHPExcel->getActiveSheet()->setCellValue('A8', $pkr_buy);
						$objPHPExcel->getActiveSheet()->setCellValue('A9', $pkr_debt_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('A10', $pkr_debt_cash);
						$objPHPExcel->getActiveSheet()->setCellValue('A11', $pkr_credit_bank);
						$objPHPExcel->getActiveSheet()->setCellValue('A12', $pkr_credit_cash);

					
					
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			
			ob_end_clean(); // Added by me
			ob_start(); // Added by me
			
			// Sending headers to force the user to download the file
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="today_deals-'.$today.'.xls"');
			header('Cache-Control: max-age=0');
			
			$objWriter->save('php://output');
?>