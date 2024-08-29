<?php 
require_once("../library/db.php");
require_once '../library/excel_library/PHPExcel/IOFactory.php';

?>
		
<?php
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$objPHPExcel = $objReader->load("excel_templates/stockreport_main.xls");
	
    

	$i = 1;
	$j = 4;
			
	$styleThinBlackBorderOutline = array(
	    'borders' => array(
		    'outline' => array(
			    'style' => PHPExcel_Style_Border::BORDER_THIN,
			        'color' => array('argb' => 'FF000000'),
		        ),
	        ),
        );
	//$date=date("Y m d");
	//Setting the stock name in the file
	if($_GET['stockid']==1){
		$stockname="گدام موتورهای مونتاژ / آماده فروش";
	}else if($_GET['stockid']==2){
		$stockname="گدام پرزه جات";
	}else if($_GET['stockid']==3){
		$stockname="گدام ضایعات";
	}else if($_GET['stockid']==4){
		$stockname="موتورهای مونتاژ شده";
	}else if($_GET['stockid']==5){
		$stockname="موتورهای نیمه مونتاژ";
	}else if($_GET['stockid']==6){
		$stockname="موتورهای تکمیل";
	}else if($_GET['stockid']==7){
		$stockname="موتورهای کلی";
	}else{
		$stockname="همه گدام ها";
	}
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $stockname);
	
	//Main Part
					$stock="همه گدام ها";
					$type="%";
					//Getting the stock name
					if($_GET['stockid']==1){
						$stock="گدام موتورهای مونتاژ / آماده فروش";
						$type="";
					}else if ($_GET['stockid']==2){
						$stock="گدام پرزه جات";
						$type="";
					}else if ($_GET['stockid']==3){
						$stock="گدام ضایعات";
						$type="";
					}else if($_GET['stockid']==4){
						$_GET['stockid']=1;
						$type="and type='1'";
						$stock="موتورهای مونتاژ شده";
					}else if($_GET['stockid']==5){
						$stock="موتورهای نیمه مونتاژ";
						$_GET['stockid']=1;
						$type="and type='2'";
					}else if($_GET['stockid']==6){
						$stock="موتورهای تکمیل";
						$_GET['stockid']=1;
						$type="and type='3'";
					}else if($_GET['stockid']==7){
						$stock="موتورهای کلی";
						$_GET['stockid']=5;
						$type="and type LIKE '$type'";
					}
					if($_GET['fromdate']!="%" and $_GET['todate']!="%"){
						$stock.="گزارش $stock از تاریخ : $_GET[fromdate]  تا تاریخ $_GET[todate]";
						$q="created_at between '$_GET[fromdate]' and '$_GET[todate]' and ";
					}else if($_GET['fromdate']!="%" and $_GET['todate']=="%"){
						$stock.="گزارش $stock در تاریخ : $_GET[fromdate]  ";
						$q="created_at='$_GET[fromdate]' and";
					}else if($_GET['fromdate']=="%" and $_GET['todate']!="%"){
						$stock.="<br/><br/><h3>گزارش $stock در تاریخ : $_GET[todate]  ";
						$q="created_at='$_GET[todate]' and";
					}
					
					$sql="select * from stock_transactions where ".$q." (type='in' or type='out') and stock_id LIKE '$_GET[stockid]'";
					$res=mysql_query($sql) or die (mysql_error());
					$j=5;
					$i=1;
					while($row=mysql_fetch_array($res)){
						//Getting product info
						$sql="Select *from products where id='$row[product_id]' $type";
						$result=mysql_query($sql);
						$r=mysql_fetch_array($result);
						$type="";
						if($r['type']==1){
						$type="(مونتاژ)";
						}else if($r['type']==2){
						$type="(نیمه مونتاژ)";
						}else if($r['type']==3){
						$type="(تکمیل)";
						}else 
						if($r['category_id']==2){
						$type="(پرزه)";
						}else if ($r['category_id']=3 and $row['stock_id']==4){
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
						//Printing info into excel file
								$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('B'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('D'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('E'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('F'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('G'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('H'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('I'.$j)->applyFromArray($styleThinBlackBorderOutline);
								//setting height and font size
									$objPHPExcel->getActiveSheet()->getRowDimension($j)->setRowHeight(30);
									$objPHPExcel->getActiveSheet()->getStyle("A".$j.":I".$j)->getFont()->setSize(11);
								$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('B'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
								$objPHPExcel->getActiveSheet()->getStyle('D'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('E'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('F'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('G'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('H'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('I'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								//Merging some cells
								$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G'.$j.':H'.$j);
								$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E'.$j.':F'.$j);
								$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$j.':B'.$j);
								//Getting product info
								$objPHPExcel->getActiveSheet()->setCellValue('I'.$j, $i);
								
								$objPHPExcel->getActiveSheet()->setCellValue('G'.$j, "(".$r['code'].$r['code_cu'].") - ".$r['name'].$type);
								$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $row['created_at']."(".$row['time'].")");
								$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $transactiontype);
								$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $row['quantity']);
								$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $row['description']);
								$i++;
								$j++;
					}
	
					
					
	  
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	ob_end_clean(); // Added by me
	ob_start(); // Added by me
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="stock_report.xls"');
	header('Cache-Control: max-age=0');
	$objWriter->save('php://output');