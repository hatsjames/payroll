
<?php 
error_reporting(E_ALL);ini_set('display_errors', TRUE);ini_set('display_startup_errors', TRUE);date_default_timezone_set('Europe/London');
include"../classes/class.process.php";include'../PHPExcel-1.8/Classes/PHPExcel.php';include'../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';




$tbl="payroll";$op="c_id is Null ";$export=new Process;$excel=$export->getData($tbl,$op);
				                                     $o=new PHPExcel();
    // You can set many properties 
    
                               $o->getActiveSheet()->setTitle("PAYROLL Report");
                                
	     $o->setActiveSheetIndex(0); 

$o->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
  $o->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $o->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
     $o->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
       $o->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
          $o->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);


          $o->getActiveSheet()->getStyle("A1:F1")->applyFromArray(array("font" => array("bold" => true)));


          $o->getActiveSheet()->setCellValue('A1', 'Salary');
        $o->getActiveSheet()->setCellValue('B1', 'Memos');
     $o->getActiveSheet()->setCellValue('C1', 'Shortages');
   $o->getActiveSheet()->setCellValue('D1', 'Advances');
 $o->getActiveSheet()->setCellValue('E1', 'Loans');
$o->getActiveSheet()->setCellValue('F1', 'Net_Amount');


$rowCount = 2; 	
                  	
                  	
                  		foreach($excel as $rows){                 	         	          																				
		//echo $rows['p_salary'];												                  	         	                	
$o->getActiveSheet()->SetCellValue('A'.$rowCount, $rows['p_salary']); 
   $o->getActiveSheet()->SetCellValue('B'.$rowCount, $rows['memo']); 
     $o->getActiveSheet()->SetCellValue('C'.$rowCount, $rows['shortage']); 
       $o->getActiveSheet()->SetCellValue('D'.$rowCount, $rows['advance']); 
         $o->getActiveSheet()->SetCellValue('E'.$rowCount, $rows['loan']); 
           $o->getActiveSheet()->SetCellValue('F'.$rowCount, $rows['balance']); 
    // Increment the Excel row counter
    $rowCount++;  
}

header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="payroll.xls"'); 
header('Cache-Control: max-age=0'); 

$obj = PHPExcel_IOFactory::createWriter($o, 'Excel2007'); 
ob_end_clean();
$obj->save('php://output');	

exit;
   
?>