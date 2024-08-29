<?php 
require_once("../library/db.php");
require_once '../library/excel_library/PHPExcel/IOFactory.php';

?>
		
<?php
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$objPHPExcel = $objReader->load("excel_templates/stockreport.xls");
	
    

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
	$date=$_GET['repdate'];
	//Setting the stock name in the file
	if($_GET['stockid']==1){
		$stockname="گدام موتورهای مونتاژ شده / آماده فروش"."(تاریخ:".$date.")";
	}else if($_GET['stockid']==2){
		$stockname="گدام پرزه جات"."(تاریخ:".$date.")";
	}else if($_GET['stockid']==5){
		$stockname="گدام موتورهای کلی"."(تاریخ:".$date.")";
	}else{
		$stockname="گدام ضایعات"."(تاریخ:".$date.")";
	}
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $stockname);

	
					$j=5;
					$i=1;
					$sql="Select *from stock_transactions where stock_id='$_GET[stockid]' group by product_id";
					$res=mysql_query($sql);
					while ($row=mysql_fetch_array($res)){
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
									$objPHPExcel->getActiveSheet()->getStyle("A".$j.":I".$j)->getFont()->setSize(13);
								$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('B'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
								$objPHPExcel->getActiveSheet()->getStyle('D'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('E'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('F'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('G'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('H'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('I'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
					//Getting product info
					$sql="Select *from products where id='$row[product_id]' order by type asc";
					$result=mysql_query($sql);
					$r=mysql_fetch_array($result);
					$type="";
					if($r['type']==1){
					$type="(مونتاژ)";
					}else if($r['type']==2){
					$type="(نیمه مونتاژ)";
					}else if($r['type']==3){
					$type="(تکمیل)";
					}
					$objPHPExcel->getActiveSheet()->setCellValue('I'.$j, $i);
					$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$j.':B'.$j);
					$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C'.$j.':D'.$j);
					$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E'.$j.':F'.$j);
					$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G'.$j.':H'.$j);
					$objPHPExcel->getActiveSheet()->setCellValue('G'.$j, "(".$r['code'].$r['code_cu'].") - ".$r['name'].$type);
					
					//Getting all transactions which have type in
					$sql1="Select SUM(quantity) from stock_transactions where stock_id='$_GET[stockid]' and product_id='$r[id]' and type='in' group by product_id";
					$result1=mysql_query($sql1) or die(mysql_error());
					$r1=mysql_fetch_array($result1);
					$intransactions=$r1['SUM(quantity)']+0;
					//Getting all transactions which have type out
					$sql2="Select SUM(quantity) from stock_transactions where stock_id='$_GET[stockid]' and product_id='$r[id]' and  type='out' group by product_id";
					$result2=mysql_query($sql2);
					$r2=mysql_fetch_array($result2);
					$outtransactions=$r2['SUM(quantity)']+0;
					//Calculating the balance
					$balance=$intransactions-$outtransactions;
					$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $intransactions);
					$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $outtransactions);
					$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $balance);
					
					$j++;
					$i++;
					}
							
				
	  
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	ob_end_clean(); // Added by me
	ob_start(); // Added by me
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="report_plans_completed.xls"');
	header('Cache-Control: max-age=0');
	$objWriter->save('php://output');