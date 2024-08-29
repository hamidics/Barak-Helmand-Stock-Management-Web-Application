<?php 
require_once("../library/db.php");
require_once '../library/excel_library/PHPExcel/IOFactory.php';


?>
		
<?php
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$filename="";
	
	if($_GET['stockid']==1){
		$filename="products_cyclet.xls";
	}else{
		$filename="products_porze.xls";
	}
    $objPHPExcel = $objReader->load("excel_templates/$filename");


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
	//Getting information about product
	$sql="select code, name, type from products where id='$_GET[product_id]'";
	$res=mysql_query($sql) or die (mysql_error());
	$rw=mysql_fetch_array($res);
	//Getting  product type
	$type="";
				if($rw['type']==1){
						$type="(مونتاژ)";
					}else if ($rw['type']==2){
						$type="(نیمه مونتاژ)";
					}else if($rw['type']==3){
						$type="(تکمیل)";
					}
					if($_GET['stockid']==3){
						$type="(پرزه)";
					}else if($_GET['stockid']==4){
						$type="(ضایعات)";
					}
	
	//Setting the stock name in the file
	$billtype="";
		$billtype="اطلاعات ورودی و خروجی (".$rw['code'].")".$rw['name'].$type;
	//Printing general information
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $billtype);
	if($_GET['stockid']==1){
		$objPHPExcel->getActiveSheet()->setCellValue('E4', $_GET['intrans']);
	}else{
		$objPHPExcel->getActiveSheet()->setCellValue('G4', $_GET['intrans']);
	}
	$objPHPExcel->getActiveSheet()->setCellValue('C4', $_GET['outtrans']);
	$objPHPExcel->getActiveSheet()->setCellValue('A4', $_GET['balance']);
	//Main Part
	
				$j=6;
				$i=1;
				
				$sql="Select * from stock_transactions  where product_id='$_GET[product_id]' and stock_id='$_GET[stockid]' and type!='pending'";
				
				$res=mysql_query($sql);
				while($row=mysql_fetch_array($res)){
				
				$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('B'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('D'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('E'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('F'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('G'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('H'.$j)->applyFromArray($styleThinBlackBorderOutline);
								if($_GET['stockid']!=1 ){
								$objPHPExcel->getActiveSheet()->getStyle('I'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('I'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

								}
								
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

				if( $_GET['stockid']==1){
				//Merging Cells
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('F'.$j.':G'.$j);
				
					$objPHPExcel->getActiveSheet()->setCellValue('H'.$j, $i);
					$objPHPExcel->getActiveSheet()->setCellValue('F'.$j, $rw['code'].$r['code_cu']."-".$rw['name'].$type);
					//
					$transactiontype="";
					if($row['type']=="in"){
						$transactiontype="ورودی";
					}else if ($row['type']=="out"){
						$transactiontype="خروجی";
					}else{	
						$transactiontype="فروش";
					}
					$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $transactiontype);
					//Getting engine and shasy num
					$sq="select engine, shasy from production where id='$row[engine_shasyid]'";
					$rsengine=mysql_query($sq) or die (mysql_error());
					$rwengine=mysql_fetch_array($rsengine);
					$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $rwengine['engine']);
					$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $rwengine['shasy']);
					$objPHPExcel->getActiveSheet()->setCellValue('B'.$j, $row['created_at']."(".$row['time'].")");
					$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $row['description']);
				}else{
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G'.$j.':H'.$j);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E'.$j.':F'.$j);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$j.':B'.$j);
				
				$sq="select * from products where id='$row[product_id]'";
				$rs=mysql_query($sq) or die (mysql_error());
				$rwp=mysql_fetch_array($rs);
				//Transaction type
				$transactiontype="";
					if($row['type']=="in"){
						$transactiontype="ورودی";
					}else if ($row['type']=="out"){
						$transactiontype="خروجی";
					}else{	
						$transactiontype="فروش";
					}
				//Printing 
				$objPHPExcel->getActiveSheet()->setCellValue('I'.$j, $i);
				$objPHPExcel->getActiveSheet()->setCellValue('G'.$j, $rw['code']."-".$rw['name']);
				$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $row['quantity']);
				$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $transactiontype);
				$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $row['created_at']."(".$row['time'].")");
				$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $row['description']);
				
				}
				
				
			
				$i++;
				$j++;
				}
				
			
			
					
	
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	ob_end_clean(); // Added by me
	ob_start(); // Added by me
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="stock_product.xls"');
	header('Cache-Control: max-age=0');
	$objWriter->save('php://output');
	