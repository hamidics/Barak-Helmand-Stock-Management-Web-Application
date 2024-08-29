<?php 
require_once("../library/db.php");
require_once '../library/excel_library/PHPExcel/IOFactory.php';


?>
		
<?php
	$objReader = PHPExcel_IOFactory::createReader('Excel5');
	$filename="";
	
		$filename="products.xls";
	
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
				if($_GET['catid']==1){
						$type="موتورها";
					}else if ($rw['catid']==2){
						$type="پرزه جات";
					}
					
	//Setting the stock name in the file
	$billtype="";
		$billtype="لیست   $type";
	//Printing general information
	$objPHPExcel->getActiveSheet()->setCellValue('A1', $billtype);
	
	
				$j=5;
				$i=1;
				if($_GET['catid']==2){
					$ss=" || category_id=3";
				}
				$sql="Select * from products  where category_id='$_GET[catid]' $ss ";
				
				$res=mysql_query($sql);
				while($row=mysql_fetch_array($res)){
				
				$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('B'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->applyFromArray($styleThinBlackBorderOutline);
								$objPHPExcel->getActiveSheet()->getStyle('D'.$j)->applyFromArray($styleThinBlackBorderOutline);
								
								
								
								//setting height and font size
									$objPHPExcel->getActiveSheet()->getRowDimension($j)->setRowHeight(30);
									$objPHPExcel->getActiveSheet()->getStyle("A".$j.":I".$j)->getFont()->setSize(11);
								$objPHPExcel->getActiveSheet()->getStyle('A'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('B'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								$objPHPExcel->getActiveSheet()->getStyle('C'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);	
								$objPHPExcel->getActiveSheet()->getStyle('D'.$j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
								
				//Merging Cells
				
					$objPHPExcel->getActiveSheet()->setCellValue('D'.$j, $i);
					$objPHPExcel->getActiveSheet()->setCellValue('C'.$j, $row['code'].$row['code_cu']."-".$row['name']);
					$objPHPExcel->getActiveSheet()->setCellValue('B'.$j, $row['unit']);
					if($row['category_id']==2){
						$ptype="پرزه اصلی";
					}else if($row['category_id']=3){
						$ptype="پرزه فرعی";
					}
					if($rw['category_id']==1 and $row['type']==1){
						$ptype="مونتاژ شده";
					}else if($rw['category_id']==1 and $row['type']==2){
						$ptype="نیمه مونتاژ";
					}else if($rw['category_id']==1 and $row['type']==3){
						$ptype="تکمیل";
					}
					$objPHPExcel->getActiveSheet()->setCellValue('A'.$j, $ptype);
			
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
	