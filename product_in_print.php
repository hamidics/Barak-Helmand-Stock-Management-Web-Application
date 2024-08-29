<?php 
require_once("../library/db.php");
require_once '../library/excel_library/PHPExcel/IOFactory.php';


?>
		
<?php
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$filename="";
	
	if($_GET['type']=="cyclet" || $_GET['type']=="cycletback" || $_GET['type']=="cycletmontazh"){
		$filename="bill_in_cyclet.xls";
	}else{
		$filename="bill_in_porze.xls";
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
	//Setting the stock name in the file
	$billtype="";
	if($_GET['type']=="porze"){
		$billtype="بل ورود پرزه جات";
	}else if($_GET['type']=="uporze"){
		$billtype="بل ورود ضایعات";
	}else if($_GET['type']=="cycletback"){
		$billtype="بل ورود موتور تکمیل";
	}else if($_GET['type']=="cyclet"){
		$billtype="بل ورود موتور مونتاژ";
	}else if ($_GET['type']=="cycletmontazh"){
		$billtype="بل ورود موتور نیمه مونتاژ";
	}else if ($_GET['type']=="ccyclet"){
		$billtype="بل ورود موتور کلی";
	}
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $billtype);
	$objPHPExcel->getActiveSheet()->setCellValue('C4', $_GET['created_at']);
	$objPHPExcel->getActiveSheet()->setCellValue('F4', $_GET['code']);
	//Main Part
	
				$j=6;
				$i=1;
				if($_GET['type']=="cyclet" || $_GET['type']=="cycletback" || $_GET['type']=="cycletmontazh"){
				$sql="select id, engine, shasy from production where bill_id='$_GET[bill_id]'";
				
				}else{
				$sql="Select quantity, product_id, description from stock_transactions  where bill_id='$_GET[bill_id]' and (parent_id=0 || parent_id='')";
				
				}
				$res=mysql_query($sql);
				while($row=mysql_fetch_array($res)){
				echo "hi";
				$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('B'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('D'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('E'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('F'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('G'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('H'.$j)->applyFromArray($styleThinBlackBorderOutline);
								if($filename=="bill_in_porze.xls"){
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
								
				if( $_GET['type']=="cyclet" ||  $_GET['type']=="cycletback" ||  $_GET['type']=="cycletmontazh"){
				//Merging Cells
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('F'.$j.':G'.$j);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$j.':B'.$j);
				$sq="select product_id, description, quantity from stock_transactions where engine_shasyid='$row[id]' and (parent_id='0' || parent_id='') ";
				$rsp=mysql_query($sq) or die (mysql_error());
				$rwp1=mysql_fetch_array($rsp);
				$sq="select * from products where id='$rwp1[product_id]'";
				$rs=mysql_query($sq) or die (mysql_error());
				$rwp=mysql_fetch_array($rs);
				
				if($rwp['type']==1){
						$type="(مونتاژ)";
					}else if ($rwp['type']==2){
						$type="(نیمه مونتاژ)";
					}else if($rwp['type']==3){
						$type="(تکمیل)";
					}
					$objPHPExcel->getActiveSheet()->setCellValue('H'.$j, $i);
					$objPHPExcel->getActiveSheet()->setCellValue('F'.$j, $rwp['code'].$r['code_cu']."-".$rwp['name'].$type);
					$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $rwp1['quantity']);
					$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $row['engine']);
					$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $row['shasy']);
					$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $rwp1['description']);
				}else{
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('G'.$j.':H'.$j);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('E'.$j.':F'.$j);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A'.$j.':D'.$j);
				
				$sq="select * from products where id='$row[product_id]'";
				$rs=mysql_query($sq) or die (mysql_error());
				$rwp=mysql_fetch_array($rs);
				//Printing 
				$objPHPExcel->getActiveSheet()->setCellValue('I'.$j, $i);
				$objPHPExcel->getActiveSheet()->setCellValue('G'.$j, $rwp['code']."-".$rwp['name']);
				$objPHPExcel->getActiveSheet()->setCellValue('E'.$j, $row['quantity']);
				$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $row['description']);
				
				}
				
				
			
				$i++;
				$j++;
				}
				
			
			
					
	
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	ob_end_clean(); // Added by me
	ob_start(); // Added by me
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="product_in.xls"');
	header('Cache-Control: max-age=0');
	$objWriter->save('php://output');
	