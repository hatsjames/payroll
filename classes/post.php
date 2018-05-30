<?php 
include'class.process.php';
if(isset($_POST['submit_cash'])){
		           	
                     $tbl="tbl_memo";
$cashier=	$_POST['cname'];
$reas=	$_POST['rname'];
$loc=	$_POST['lname'];
$dime=	$_POST['mamount'];
$date=	$_POST['datex'];
$m=$_POST['memo'];

	                          $info=array(                          
	'c_id'=>$_POST['cname'],
	'l_id'=>$_POST['lname'],
	'reason'=>$_POST['rname'],
	'flags'=>$_POST['memo'],
	'amount'=>$_POST['mamount'],
	'm_date'=>$_POST['datex']
	
	);		
	
	$c='c_id='.$_POST['cname'].'';
	$put=new Process($info);
	$put->putData($tbl);
	
   if(isset($_POST['cname'])){
    $t_u='updates'; $tp='payroll';
	                       $opt_s="c_id=".$_POST['cname']."";
	                         $get_salary1=new Process; $salary1=$get_salary1->getData($t_u,$opt_s);
	foreach($salary1 as $value){ $salary_v=$value['balance']; $t_amount=$value['t_amount'];}
	$bal=$salary_v-$dime; $t_am=$t_amount+$dime;  
	
	$update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
	                $upd=new Process($update_data);$opt_up='c_id='.$_POST['cname'].''; $upd->update($t_u,$opt_up);
	
	
	
	$get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);
	foreach($salary2 as $value){ $cur_bal=$value['balance']; $cur_sh=$value['memo'];}
	$bal2=$cur_bal-$dime;$t_sh=$cur_sh+$dime;
	         $update_data2=array('balance'=>$bal2,'memo'=>$t_sh,'p_date'=>$date );
	$upd1=new Process($update_data2);$opt_up1='c_id='.$_POST['cname'].''; $upd1->update($tp,$opt_up1); 
   }
   if($insert){
		echo "SUCCESSFULLY INSERTED";
	}
	header('location:../home.php');
	
}

elseif(isset($_POST['submit_sup'])){
		           	
                     $tbl="tbl_memo";
       $sup=$_POST['sname'];
$reas=$_POST['rname'];
$loc=$_POST['lname'];
$dime=$_POST['mamount'];
$date=$_POST['datex'];
	                
	                          $info=array(
	's_id'=>$_POST['sname'],
	'l_id'=>$_POST['lname'],
	'reason'=>$_POST['rname'],
	'flags'=>$_POST['memo'],
	'amount'=>$_POST['mamount'],
	'm_date'=>$_POST['datex']
	);		
	
	$put=new Process($info);$put->putData($tbl);
	
   if(isset($_POST['sname'])){
    $t_u='updates'; $tp='payroll';
	                       $opt_s="s_id=".$_POST['sname']."";
	                         $get_salary1=new Process; $salary1=$get_salary1->getData($t_u,$opt_s);
	foreach($salary1 as $value){ $salary_v=$value['balance']; $t_amount=$value['t_amount'];}
	$get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);
	$bal=$salary_v-$dime; $t_am=$t_amount+$dime;
	$update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
		 $upd=new Process($update_data);$opt_up='s_id='.$_POST['sname'].''; $upd->update($t_u,$opt_up);
	
	foreach($salary2 as $value){ $cur_bal=$value['balance']; $cur_sh=$value['memo'];}
	$bal2=$cur_bal-$dime;$t_sh=$cur_sh+$dime;
	$update_data2=array('balance'=>$bal2,'memo'=>$t_sh,'p_date'=>$date);
	    $upd1=new Process($update_data2);$opt_up1='s_id='.$_POST['sname'].''; $upd1->update($tp,$opt_up1);
   }
	header('location:../home.php');
	
}
elseif(isset($_POST['submit_sup_sh'])){
                     $tbl="shortages";
	
$sup_s=$_POST['sname'];
$loc=$_POST['lname'];
$short=$_POST['mamount'];
$date=$_POST['datex'];
$res=$_POST['rname'];
	   
	                
	 $info=array(
	's_id'=>$sup_s,
	'loc_id'=>$loc,
	'reason'=>$res,
	's_amount'=>$short,
	's_date'=>$date
	);
	
	$put=new Process($info);$put->putData($tbl);
	                     if(isset($sup_s)){                     	
    $t_u='updates'; $tp='payroll';
	                       $opt_s="s_id=".$_POST['sname']."";
	                         $get_salary1=new Process; $salary1=$get_salary1->getData($t_u,$opt_s);
	foreach($salary1 as $value){ $salary_v=$value['balance']; $t_amount=$value['t_amount'];}
	$bal=$salary_v-$short; $t_am=$t_amount+$short;
	$update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
	                       $upd=new Process($update_data);$opt_up='s_id='.$_POST['sname'].''; $upd->update($t_u,$opt_up);
	$get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);
	foreach($salary2 as $value){ $cur_bal=$value['balance']; $cur_sh=$value['shortage'];}
	$bal2=$cur_bal-$short;$t_sh=$cur_sh+$short;
	$update_data2=array('balance'=>$bal2,'shortage'=>$t_sh,'p_date'=>$date);
	           $upd1=new Process($update_data2);$opt_up1='s_id='.$_POST['sname'].''; $upd1->update($tp,$opt_up1);
   }
   header('location:../home.php');	
}
elseif(isset($_POST['submit_cash_sh'])){
	 
$tbl="shortages";
$cash=$_POST['cname'];
$loc=$_POST['lname'];
$short=$_POST['mamount'];
$date=$_POST['datex'];
$res=$_POST['rname'];	   
						                          
$info=array(
	'c_id'=>$cash,
	'loc_id'=>$loc,
	'reason'=>$res,
	's_amount'=>$short,
	's_date'=>$date
	);		
		//var_dump($info);
	$put=new Process($info);
	$put->putData($tbl);

if(isset($cash)){
        $t_u='updates'; 
         $tp='payroll';
        $opt_s="c_id=".$_POST['cname']."";
	                  $get_salary1=new Process; $salary1=$get_salary1->getData($t_u,$opt_s);
	foreach($salary1 as $value){ $salary_v=$value['balance']; $t_amount=$value['t_amount'];}
	$bal=$salary_v-$short; $t_am=$t_amount+$short;
	
	$update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
	$upd=new Process($update_data);$opt_up='c_id='.$_POST['cname'].''; $upd->update($t_u,$opt_up);
	                 $get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);
			 
	foreach($salary2 as $value){ $cur_bal=$value['balance']; $cur_sh=$value['shortage'];}
	$bal2=$cur_bal-$short;$t_sh=$cur_sh+$short;
	
	           $update_data2=array('balance'=>$bal2,'shortage'=>$t_sh,'p_date'=>$date);
	$upd1=new Process($update_data2);$opt_up1='c_id='.$_POST['cname'].''; $upd1->update($tp,$opt_up1);
   }
   header('location:../home.php');
}

elseif(isset($_POST['submit_advance_sup'])){	           	
                     $tbl="advance";
$sup=$_POST['sname'];
$loc=$_POST['lname'];$i=$_POST['i_amount'];
$adv=$_POST['mamount'];
$date=$_POST['datex'];
$bal_=$adv-$i;

	                          $info=array(
	's_id'=>$_POST['sname'],
	'reason'=>$_POST['rname'],
	'a_amount'=>$_POST['mamount'],
	'a_install'=>$_POST['i_amount'],
	'a_bal'=>$bal_,
	'a_status'=>'Updated',
	'a_date'=>$_POST['datex']
	);			
	
	
	$tp='advance'; $copt="s_id=".$_POST['sname']."";

	$check_loan=new Process; 
	$cl=$check_loan->getData($tp,$copt);
             foreach($cl as $val){ $lvalue=$val['a_amount'];
	       $ldate=$val['a_date'];
	}
               $dates1=strtotime($ldate);
			     $dates2=strtotime($date);
				 
                   $datel1=date("Y-m",$dates1);
				       $datel2=date("Y-m",$dates2);
					 
		
					//issues    
					   
			if(($datel2 <= $datel1)){
				
				header('location:../home.php');		 

			}else{
				
	
	$put=new Process($info);
	$put->putData($tbl);
  
  if(isset($_POST['sname'])){
    	
    $t_u='updates'; $tp='payroll';
	                       $opt_s="s_id=".$_POST['sname']."";
	                         $get_salary1=new Process; $salary1=$get_salary1->getData($t_u,$opt_s);
							 
	foreach($salary1 as $value){
		$salary_v=$value['balance']; $t_amount=$value['t_amount'];}
	$bal=$salary_v-$i; $t_am=$t_amount+$i;
	
	$update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
	       $upd=new Process($update_data);$opt_up='s_id='.$_POST['sname'].''; $upd->update($t_u,$opt_up);
		   
		   
		   $get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);		
	foreach($salary2 as $value){ $cur_bal=$value['balance'];}
	          $bal2=$cur_bal-$i;$t_sh=$i;
	
	$update_data2=array('balance'=>$bal2,'advance'=>$t_sh,'p_date'=>$date );
	$upd1=new Process($update_data2);$opt_up1='s_id='.$_POST['sname'].''; 
	$upd1->update($tp,$opt_up1);
   
}
  
   header('location:../home.php');
   }
}

elseif(isset($_POST['submit_advance_cash'])){	           	
                     $tbl="advance";
$cash=$_POST['cname'];
$loc=$_POST['lname'];$i=$_POST['i_amount'];
$adv=$_POST['mamount'];
$date=$_POST['date'];
$bal_=$adv-$i;

	                          $info=array(
	'c_id'=>$_POST['cname'],
	'reason'=>$_POST['rname'],
	'a_amount'=>$_POST['mamount'],
	'a_install'=>$_POST['i_amount'],
	'a_bal'=>$bal_,
	'a_status'=>'Updated',
	'a_date'=>$_POST['datex']
	);		
	
	$tp='advance'; $copt="c_id=".$_POST['cname']."";
	$check_loan=new Process; 
	$cl=$check_loan->getData($tp,$copt);
             foreach($cl as $val){ $lvalue=$val['a_amount'];
	       $ldate=$val['a_date'];
	}
               $dates1=strtotime($ldate);
			     $dates2=strtotime($date);
				 
                   $datel1=date("Y-m",$dates1);
				       $datel2=date("Y-m",$dates2);
					 
					
				
					//issues    
					   
			if(($datel2 <= $datel1)){
				header('location:../home.php');		 

			}else{
			
	$put=new Process($info);$put->putData($tbl);
  
  if(isset($_POST['cname'])){
    $t_u='updates'; $tp='payroll';
	                       $opt_s="c_id=".$_POST['cname']."";
	                         $get_salary1=new Process; $salary1=$get_salary1->getData($t_u,$opt_s);
	foreach($salary1 as $value){ $salary_v=$value['balance']; $t_amount=$value['t_amount'];}
	
	$bal=$salary_v-$i; $t_am=$t_amount+$i;
	$update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
	    $upd=new Process($update_data);$opt_up='c_id='.$_POST['cname'].''; $upd->update($t_u,$opt_up);
		
	$get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);
	foreach($salary2 as $value){ $cur_bal=$value['balance']; $cur_sh=$value['advance'];}
	$bal2=$cur_bal-$i;$t_sh=$i;
	
             $update_data2=array('balance'=>$bal2,'advance'=>$t_sh,'p_date'=>$date);
	                 $upd1=new Process($update_data2);$opt_up1='c_id='.$_POST['cname'].''; $upd1->update($tp,$opt_up1);
   }
   header('location:../home.php');
   }
}
elseif(isset($_POST['submit_loan_sup'])){
		            $tbl="tbl_loan";				
$sup=$_POST['sname'];
$loc=$_POST['lname'];
$lo=$_POST['mamount'];
$i=$_POST['i_amount'];
$date=$_POST['datex'];
$bal_l=$lo-$i;

	  $info=array(
	's_id'=>$_POST['sname'],
	'reason'=>$_POST['rname'],
	'l_amount'=>$_POST['mamount'],
	'l_install'=>$_POST['i_amount'],
	'l_bal'=>$bal_l,
	'l_status'=>'Updated',
	'l_date'=>$_POST['datex']
	
	);		
	
	
	$tp='tbl_loan'; $copt="s_id=".$_POST['sname']."";
	
	
	$check_loan=new Process; 
	$cl=$check_loan->getData($tp,$copt);
             foreach($cl as $val){ $lvalue=$val['l_amount'];
	       $ldate=$val['l_date'];
	}
               $dates1=strtotime($ldate);
			     $dates2=strtotime($date);
				 
                   $datel1=date("Y-m",$dates1);
				       $datel2=date("Y-m",$dates2);
					 
					
				
					//issues    
					   
			if( ($datel2 <= $datel1)){
				header('location:../home.php');	
				
				//echo $datel2;
				//echo $datel1;	 

			}else{
				
				
				
											
	$put=new Process($info);
	$put->putData($tbl);
	
  if(isset($_POST['sname'])){
  	
    $t_u='updates'; $tp='payroll';
	                       $opt_s="s_id=".$_POST['sname']."";
	                         $get_salary1=new Process; $salary1=$get_salary1->getData($t_u,$opt_s);
	foreach($salary1 as $value){ $salary_v=$value['balance']; $t_amount=$value['t_amount'];}
	$bal=$salary_v-$i; $t_am=$t_amount+$i;
	          
			  
	          $update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
			  $upd=new Process($update_data);$opt_up='s_id='.$_POST['sname'].''; $upd->update($t_u,$opt_up);
			 		 
	$get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);
	foreach($salary2 as $value){ $cur_bal=$value['balance']; $cur_sh=$value['loan'];}
	 $bal2=$cur_bal-$i;$t_sh=$i;
	
	      $update_data2=array('balance'=>$bal2,'loan'=>$t_sh,'p_date'=>$date );              
	$upd1=new Process($update_data2);$opt_up1='s_id='.$_POST['sname'].''; $upd1->update($tp,$opt_up1);
   
}
   header('location:../home.php');
	 
   }
   }

//loan problems
 elseif(isset($_POST['submit_loan_cash'])){
 					                   	
					                   $tbl="tbl_loan";
	 	 
$lo=$_POST['mamount'];
$i=$_POST['i_amount'];
$bal_l=$lo-$i;
$date=$_POST['datex'];
		//array for inserting//
		
		$updated='Updated';
		
$info=array(

    'c_id'=>$_POST['cname'],
	'reason'=>$_POST['rname'],
	'l_amount'=>$lo,
	'l_install'=>$i,
	'l_bal'=>$bal_l,
	'l_status'=>'Updated',
	'l_date'=>$_POST['datex']
	);	
	
	
	
	
	$tp='tbl_loan'; $copt="c_id=".$_POST['cname']."";
	
	
	$check_loan=new Process; 
	$cl=$check_loan->getData($tp,$copt);
             foreach($cl as $val){ $lvalue=$val['l_amount'];
	       $ldate=$val['l_date'];
	}
               $dates1=strtotime($ldate);
			     $dates2=strtotime($date);
				 
                   $datel1=date("Y-m",$dates1);
				       $datel2=date("Y-m",$dates2);
					 
					
				
					//issues    
					   
			if(($datel2 <= $datel1)){
				
				header('location:../home.php');		 

			}else{
				
			
$put=new Process($info);
             $put->putData($tbl);			
			 
			//come on... 
			 
			 
							if(isset($_POST['cname'])){
  	$t_u='updates'; $tp='payroll';
	                        $opt_s="c_id=".$_POST['cname']."";
						    $get_salary1=new Process; 
						    $salary1=$get_salary1->getData($t_u,$opt_s);
							 
	foreach($salary1 as $value){$salary_v=$value['balance']; $t_amount=$value['t_amount'];}
    $bal=$salary_v-$i; $t_am=$t_amount+$i;
	$update_data=array('balance'=>$bal,'t_amount'=>$t_am,'u_date'=>date('Y-m-d') );
	               $upd=new Process($update_data);
				             $opt_up='c_id='.$_POST['cname'].''; 
				             $upd->update($t_u,$opt_up);
				             
							 
				         $get_salary2=new Process; $salary2=$get_salary2->getData($tp,$opt_s);
	               foreach($salary2 as $value){ $cur_bal=$value['balance'];}

	               $bal2=$cur_bal-$i;$t_sh=$i;
				   $update_data2=array('balance'=>$bal2,'loan'=>$t_sh,'p_date'=>date('Y-m-d'));
	 
	                $upd1=new Process($update_data2);
	                $opt_up1='c_id='.$_POST['cname'].'';
                    $upd1->update($tp,$opt_up1);
          }
  
            header('location:../home.php');	
}   }                 

/*
elseif(isset($_POST['test'])){
 
	                    $tbl='test';
			   $allowance=$_POST['allow'];
	//$up_id=$_POST['id'];
	           $_info=array(
	
	
	'location'=>$_POST['lname'],
	'name'=>$_POST['sname'],
	'phone'=>$_POST['mamount']
	    );		 
				 		 	//	var_dump($cashier_info);
				 		 				 		 	
	 $insert1=new Process($_info);
	 $insert1->putData($tbl);
	 
	              $last1=$insert1->insert_id();
				  
	      
header('location:../home.php');
}

*/

 elseif(isset($_POST['fcash'])){
 
	                         //   $ids=$_POST['idx'];
	                    $tbl='tbl_cashier';
			 //  $allowance=$_POST['allow'];
	//$up_id=$_POST['id'];
	
	$sname=$_POST['sname'];
	$lname=$_POST['lname'];
	$cname=$_POST['cname'];
	$samount=$_POST['samount'];
	$allow=$_POST['allow'];
	$date=date('Y-m-d');
	
	           $cashier_info=array(
	's_id'=>$sname,
	'l_id'=>$lname,
	'c_name'=>$cname,
	'salary'=>$samount,
	'c_allowance'=>$allow,
	'c_date'=>$date,
	'ccode'=>'KC'
	    );		 	 	//	var_dump($cashier_info);
				 		 	
				 		 	
	 $insert1=new Process($cashier_info);
	 $insert1->putData($tbl);
	 
	              $last1=$insert1->insert_id();
				  
	                              if(isset($cname)){
		  $tbl_u='updates';
		  $up_data=array(
		'c_id'=>$last1,
		'salary'=>$samount,
		'balance'=>$samount,
		'u_date'=>$date			
		);
		
	$updates=new Process($up_data);
	     $updates->putData($tbl_u);
	
	$tp="payroll";
		$up_data2=array(	
		'c_id'=>$last1,
		'P_salary'=>$samount,
		'balance'=>$samount
		);
		$updates2=new Process($up_data2);
		$updates2->putData($tp);
	
	}
header('location:../home.php');
}


elseif(isset($_POST['floc'])){
	           $tbl='tbl_location';
 $loc_info=array(
	's_id'=>$_POST['sname'],
	'l_name'=>$_POST['lname']
	  );
	  
	$insert1=new Process($loc_info);
	$insert1->putData($tbl);
	
header('location:../home.php');

}
//cashier salary update
elseif(isset($_POST['salary_update1'])){
	                        $ids=$_POST['cash_id']; 
	           $opt_p="c_id=".$ids."";
			   $amou=$_POST['camount'];
	                           $tbl2='tbl_cashier';
	                           $tbl3='payroll';
	                                          $tbl4='updates';
						   $cash_info2=array('salary'=>$amou); 
						   $update2=new Process($cash_info2);
						   $update2->update($tbl2,$opt_p);
						   
	 /*getting values from other tables for updates */
	                
                            $perfom_ch=new Process;
                            $ch=$perfom_ch->getData($tbl3,$opt_p);
							         foreach($ch as $is){$loa=$is['loan'];$adv=$is['advance'];}         
                                           $tv=$loa+$adv;
						  $bal=$amou-$tv;
	  $cash_info3=array('p_salary'=>$amou,'balance'=>$bal); 
	  $cash_info4=array('salary'=>$amou,'t_amount'=>$tv,'balance'=>$bal); 
	
	 $opt1="c_id=".$ids."";
	 $update3=new Process($cash_info3);$update3->update($tbl3,$opt1);
	 
$update4=new Process($cash_info4);
$update4->update($tbl4,$opt1);
header('location:../updates.php');

}//supervisor salary update

elseif(isset($_POST['salary_update2'])){
	          
			   $ids=$_POST['sup_id']; 
	                  $opt_p="s_id=".$ids."";
					  
			   $amou=$_POST['samount'];
	                           $tbl2='supervisor';
	                           $tbl3='payroll';
	                           $tbl4='updates';
							   
						   $cash_info2=array('s_salary'=>$amou); 
						   
	 /*getting values from other tables for updates */
	 
	                 $opt1="s_id=".$ids."";
	                        $update2=new Process($cash_info2);
	                                                         $update2->update($tbl2,$opt1);
                $perfom_ch=new Process;
                            $ch=$perfom_ch->getData($tbl3,$opt_p);
							         foreach($ch as $is){$loa=$is['loan'];
							         $adv=$is['advance'];
									 }$tv=$loa+$adv;
						                         $bal=$amou-$tv;
	
	  $cash_info3=array('p_salary'=>$amou,'balance'=>$bal); 
	         $update3=new Process($cash_info3);
	 $update3->update($tbl3,$opt1);
	
	  $cash_info4=array('salary'=>$amou,'t_amount'=>$tv,'balance'=>$bal); 
	  
      $update4=new Process($cash_info4);
      $update4->update($tbl4,$opt1);
    header('location:../updates.php');
}

///supervisor update 
//supervisor updateeeess
elseif(isset($_POST['sup_update'])){ $s_id=$_POST['sup_id'];
						  $tbl='supervisor'; 
						  $tbl2='tbl_location';
						  $l=$_POST['lname'];
						  
	           $super_info=array(
	's_name'=>$_POST['sname'],
	's_date'=>date('Y-m-d')
	             );		 
			$op="s_id=".$s_id."";	 
				 
			      $super_info2=array(
	                      's_id'=>$s_id);	 
			$op2="l_id=".$l."";	 
	$insertx=new Process($super_info);$insertx->update($tbl,$op);	
	      $insertx2=new Process($super_info2);$insertx2->update($tbl2,$op2);
	header('location:../updates.php');   
             }
//cashier update 
elseif(isset($_POST['cash_update'])){
	                           $c_id=$_POST['cash_id'];
                          $tbl='tbl_cashier';
	           $super_info=array(
	           'c_name'=>$_POST['cname'],
	           'l_id'=>$_POST['lname'],
	           's_id'=>$_POST['sname'],
	           'date'=>date('Y-m-d')
	             );
			
$op="c_id=".$c_id."";	 
	             $insertx=new Process($super_info);
$insertx->update($tbl,$op);
header('location:../updates.php');

}


elseif(isset($_POST['fsup'])){
               $tbl='supervisor';
	           $super_info=array(
	's_name'=>$_POST['sname'],
	's_salary'=>$_POST['samount'],
	'incentives'=>$_POST['incent'],
	's_allowance'=>$_POST['allow'],
	's_date'=>date('Y-m-d'),
	'scode'=>'KS'
	             );
				 
	$insertx=new Process($super_info);
	                        $insertx->putData($tbl);	
	                                $last2=$insertx->insert_id();
									
									
		//echo $last2;
			
if(isset($_POST['sname'])){
		        $tbl_u1='updates';
		        $up_data1=array(
		's_id'=>$last2,
		'salary'=>$_POST['samount'],
		'balance'=>$_POST['samount'],
		'u_date'=>date('Y-m-d')		
		);
	
		$updates1=new Process($up_data1);
		$updates1->putData($tbl_u1);
		
		$tp="payroll";
		$up_data2=array(	
		's_id'=>$last2,
		'p_salary'=>$_POST['samount'],
		'balance'=>$_POST['samount']
		);
	
		$updates2=new Process($up_data2);$updates2->putData($tp);		
}
header('location:../home.php');
}
elseif(isset($_POST['login'])){
 	     //$items=$_POST['item'];
 	           $username=$_POST['username'];
		       $password=md5($_POST['password']);
		       $tbl_user='users';
		  //$name=$_POST['full_name'];
		  $gen1=new Process();
		  
		               $gen1->login($username,$password,$tbl_user);
			                       
 }
elseif(isset($_POST['register'])){$tbl='users';
 	     //$items=$_POST['item'];
 	  
		 $username=$_POST['username'];
		 $password=md5($_POST['password']);
		 $reg_info=array(
		         'username'=>$username,
		            'password'=>$password);		              
		 
		  $genx=new Process($reg_info);
		              $insert=$genx->register($tbl);		              
}
//payrol point

 if(isset($_POST['py'])){
    $sqlDATE="UPDATE payroll SET p_date =NOW()";
	$dumpDATE=new Process;
	$dumpDATE->dump($sqlDATE);
                          $tbl1="payroll"; 
	                          $tbl2="updates";
                          $op="s_id is NULL";	
						  				  
	$sql="INSERT INTO payrol_h(p_id,c_id,s_id,p_salary,memo,shortage,loan,advance,balance,date)
	SELECT p_id,c_id,s_id,p_salary,memo,shortage,loan,advance,balance,date FROM payroll WHERE s_id is NULL";
	
	$dump=new Process;
	           $dump->dump($sql); 
	/*   $condn=""
			   $get_all_cls=new Process;
			      $cls=$get_all_cls->getData($tbl1,$op);
				  foreach($cls as $values){
				  	$all[]=$values['salary'];
				  }
			*/
			
               $array_info=array(
	'memo'=>0,
	'shortage'=>0,
	);	
	
	$pay_check=new Process($array_info);
	    $pay_check->update($tbl1,$op);		
		
		
	$sql2="UPDATE payroll SET balance=p_salary WHERE s_id is NULL";
	$dump1=new Process;
	$dump1->dump($sql2);
	//update date
	
	
	
		///updatessssstbl
		
					    $op1="s_id is NULL";
					  	$info1=array('t_amount'=>0);
						
$up_check=new Process($info1);
	                $up_check->update($tbl2,$op1);	
					/* tbl_advance */
					 
					
					$tbl_adv="advance";$cond_adv="s_id is NULL AND status='Updated'";
					$array_adv=array(
					'a_status'=>'Active');
					$update_adv=new Process($array_adv);
					$update_adv->update($tbl_adv,$cond_adv);
					
					/* tbl_loan */
					 
					$tbl_lo="tbl_loan";$cond_lo="s_id is NULL AND status='Updated'";
					$array_lo=array(
					'l_status'=>'Active'
					);
					$update_lo=new Process($array_lo);
					$update_lo->update($tbl_lo,$cond_lo);
						
			$sql1="UPDATE updates SET balance=salary WHERE s_id is NULL"; 
	$dump3=new Process;
	$dump3->dump($sql1);
		
			
	              
	                      	  
header('location:../home.php');	
}
elseif(isset($_POST['py1'])){
	      	
	$sqlDATE="UPDATE payroll SET p_date =NOW()";
	$dumpDATE=new Process;
	$dumpDATE->dump($sqlDATE);
			   
			     	
	      	
	      
 $tbl1="payroll";
	
	             $tbl2="updates";
			     $op="c_id is NULL";	
				 	
				 $sql="INSERT INTO payrol_h				     
				     SELECT*FROM payroll WHERE c_id is NULL";
				
	$dump=new Process;
	           $dump->dump($sql);	
			   
			/*   
			    $get_all_cls=new Process;
			      $cls=$get_all_cls->getData($tbl1,$op);
				  foreach($cls as $values){
				  	$all[]=$values['salary'];
				  }
			   
			   */
			   
			   	//update date
	
			   
	            $array_info=array(
	'memo'=>0,
	'shortage'=>0,
	);
			   
	$pay_check=new Process($array_info);
	                  $pay_check->update($tbl1,$op);
					  
		$sql2="UPDATE payroll SET balance=p_salary WHERE c_id is NULL";
	                  $dump1=new Process;
	           $dump1->dump($sql2); 
			   			  				
										
		/////UPDATING UPDATES TABLESS
											 
	$op1="c_id is NULL";
					  	$info1=array(
   't_amount'=>0
	);
	$up_check=new Process($info1);
	                  $up_check->update($tbl2,$op1);  
					  
					  
				/* tbl_advance */
					 
					
					$tbl_adv="advance";$cond_adv="c_id is NULL AND status='Updated'";
					$array_adv=array(
					'a_status'=>'Active');
					$update_adv=new Process($array_adv);
					$update_adv->update($tbl_adv,$cond_adv);
					
					/* tbl_loan */
					 
					$tbl_lo="tbl_loan";$cond_lo="c_id is NULL AND status='Updated'";
					$array_lo=array(
					'l_status'=>'Active'
					);
					$update_lo=new Process($array_lo);
					$update_lo->update($tbl_lo,$cond_lo);
				
				  
					         
		$sql3="UPDATE updates SET balance=salary WHERE c_id is NULL";
	
	$dump2=new Process;
	           $dump2->dump($sql3); 
			   		  	  				  
	header('location:../home.php');
}

/*on activationnnnnnnnnnnnnnn*/

elseif(isset($_POST['activate1'])){
	
	 $table1="tbl_loan";
	                $table2="payroll";
	 $table3="updates";
	            $cash_id=$_POST['id'];
				          $cond="c_id=".$_POST['activate1']."";
						  
				/*updating loan on activation*/		  
	$geti=new Process;
	              $vli=$geti->getData($table1,$cond);
				  	  
	                  foreach($vli as $val){
	  		
	  	    $inst=$val['l_install'];
		
		
		$old_bal=$val['l_bal'];
	
	  }
	  
	 if($old_bal==0){
	 	$array1=array('loan'=>0);
	   	$set=new Process($array1);
		    $set->update($table2,$cond);
		            $array2=array('l_status'=>'Cleared');
				     $set1=new Process($array2);
		                 $set1->update($table1,$cond);
						 
		                               header('location:../home.php');
		
	   }else{
	   	 
		 $new_bal=$old_bal-$inst;
	    $bal_array=array(
	
	'l_bal'=>$new_bal,
	'l_status'=>'Updated');
	
	         //$cond1="c_id=".$cash_id."";	
	           
	   $update=new Process($bal_array);
	                $update->update($table1,$cond);
						
					
					
					//another check again///
					
					if($new_bal==0){
		 	
			$array3=array('loan'=>0);
              $set2=new Process($array3);
		            $set2->update($table2,$cond);
				 
				  $array4=array('l_status'=>'Cleared');
				      $set3=new Process($array4);
					     $set3->update($table1,$cond);

		 }
						/*updating tbl updates on activation*/
						
				$get_u_bal=new Process;
				$u_bal=$get_u_bal->getData($table3,$cond);
				foreach($u_bal as $u_val){
					$balance=$u_val['balance'];
					$t_am=$u_val['t_amount'];
				}
				  
				  $new_t_am=$t_am+$inst;
				  $new_u_bal=$balance-$inst;
				  
				  $u_bal_array=array(
				  't_amount'=>$new_t_am,
				  'balance'=>$new_u_bal
				  );
				  
				  $update1=new Process($u_bal_array);
				  $update1->update($table3,$cond);
				  
						/*updating tbl payroll on activation*/	
	   
	   $get_p_bal=new Process;
				$p_bal=$get_p_bal->getData($table2,$cond);
				foreach($p_bal as $p_val){
					$balance_p=$p_val['balance'];
				
				}
				  $new_p_bal=$balance_p-$inst;
				  
				  $p_bal_array=array(
				  'balance'=>$new_p_bal
				  );
				  
				  $update2=new Process($p_bal_array);
				  $update2->update($table2,$cond);
				  
	 
	header('location:../home.php');
	}
}
elseif(isset($_POST['activate2'])){
	
	 $table1="tbl_loan";
	                $table2="payroll";
	 $table3="updates";
	            $cash_id=$_POST['id'];
				
				          $cond="s_id=".$_POST['activate2']."";
						  
				/*updating loan on activation*/		  
	$geti=new Process;
	              $vli=$geti->getData($table1,$cond);
				  	  
	                  foreach($vli as $val){
	  		
	  	    $inst=$val['l_install'];
		
		$old_bal=$val['l_bal'];
	  }
	 
	 
	  if($old_bal==0){
	 	$array1=array('loan'=>0);
	   	$set=new Process($array1);
		$set->update($table2,$cond);
		          $array2=array('l_status'=>'Cleared');
				     $set1=new Process($array2);
		                 $set1->update($table1,$cond);
		                               header('location:../home.php');
		
	   }else{
	   	 
		 $new_bal=$old_bal-$inst;
	
	$bal_array=array(
	'l_bal'=>$new_bal,
	'l_status'=>'Updated');
	//   $cond1="c_id=".$cash_id."";	
	           
	   $update=new Process($bal_array);
	                $update->update($table1,$cond);
					
					
					
					 if($new_bal==0){
		 	
			$array3=array('loan'=>0);
              $set2=new Process($array3);
		            $set2->update($table2,$cond);
				  
				 
				  $array4=array('l_status'=>'Cleared');
				      $set3=new Process($array4);
					     $set3->update($table1,$cond);

		 }
	  
					
					
					
						/*updating tbl updates on activation*/
						
				$get_u_bal=new Process;
				$u_bal=$get_u_bal->getData($table3,$cond);
				foreach($u_bal as $u_val){
					$balance=$u_val['balance'];
					$t_am=$u_val['t_amount'];
				}
				  
				  $new_t_am=$t_am+$inst;
				  $new_u_bal=$balance-$inst;
				  
				  $u_bal_array=array(
				  't_amount'=>$new_t_am,
				  'balance'=>$new_u_bal
				  );
				  
				  $update1=new Process($u_bal_array);
				  $update1->update($table3,$cond);
				  
						/*updating tbl payroll on activation*/	
	   
	   $get_p_bal=new Process;
				$p_bal=$get_p_bal->getData($table2,$cond);
				foreach($p_bal as $p_val){
					$balance_p=$p_val['balance'];
				
				}
				
				  $new_p_bal=$balance_p-$inst;
				  
				  $p_bal_array=array(
				  'balance'=>$new_p_bal
				  );
				  
				  $update2=new Process($p_bal_array);
				  $update2->update($table2,$cond);
	  
	header('location:../home.php');
	}
	}

////advance tablesssssssssssss

elseif(isset($_POST['activate3'])){
	
	 $table1="advance";
	                $table2="payroll";
	 $table3="updates";
	            $cash_id=$_POST['id'];
				          $cond="c_id=".$_POST['activate3']."";
						  
				/*updating loan on activation*/		  
	$geti=new Process;
	              $vli=$geti->getData($table1,$cond);
				  	  
	                  foreach($vli as $val){
	  		
	  	    $inst=$val['a_install'];
		
		$old_bal=$val['a_bal'];
	  }
	 
	 
	  if($old_bal==0){
	 	$array1=array('advance'=>0);
	   	$set=new Process($array1);
		$set->update($table2,$cond);
		          
		$array2=array('a_status'=>'Cleared');
				     $set1=new Process($array2);
		                 $set1->update($table1,$cond);
		                               header('location:../home.php');
		
	   }else{
	   	 
		 $new_bal=$old_bal-$inst;
	$bal_array=array(
	
	'a_bal'=>$new_bal,
	'a_status'=>'Updated');
	
	        $cond="c_id=".$_POST['activate3']."";	
	           
	   $update=new Process($bal_array);
	                $update->update($table1,$cond);
					
					
					
		 if($new_bal==0){
		 	
			$array3=array('advance'=>0);
              $set2=new Process($array3);
		            $set2->update($table2,$cond);
				  
				 
				  $array4=array('a_status'=>'Cleared');
				      $set3=new Process($array4);
					     $set3->update($table1,$cond);

		 }
					
					
						/*updating tbl updates on activation*/
						
				$get_u_bal=new Process;
				$u_bal=$get_u_bal->getData($table3,$cond);
				foreach($u_bal as $u_val){
					$balance=$u_val['balance'];
					$t_am=$u_val['t_amount'];
				}
				  
				  $new_t_am=$t_am+$inst;
				  $new_u_bal=$balance-$inst;
				  
				  $u_bal_array=array(
				  't_amount'=>$new_t_am,
				  'balance'=>$new_u_bal
				  );
				  
				  $update1=new Process($u_bal_array);
				  $update1->update($table3,$cond);
				  
						/*updating tbl payroll on activation*/	
	   
	   $get_p_bal=new Process;
				$p_bal=$get_p_bal->getData($table2,$cond);
				foreach($p_bal as $p_val){
					$balance_p=$p_val['balance'];
				
				}
				
				  $new_p_bal=$balance_p-$inst;
				  
				  $p_bal_array=array(
				  'balance'=>$new_p_bal
				  );
				  
				  $update2=new Process($p_bal_array);
				  $update2->update($table2,$cond);
				  
	   
	header('location:../home.php');
	}
}
elseif(isset($_POST['activate4'])){
	
	 $table1="advance";
	                $table2="payroll";
	 $table3="updates";
	            $cash_id=$_POST['id'];
				
				          $cond="s_id=".$_POST['activate4']."";
						  
				/*updating loan on activation*/		  
	$geti=new Process;
	              $vli=$geti->getData($table1,$cond);
				  	  
	                  foreach($vli as $val){
	  		
	  	    $inst=$val['a_install'];
		
		$old_bal=$val['a_bal'];
	  }
	 
	 
	 
	 
	
	 
	 
	  if($old_bal==0){
	 
	 	$array1=array('advance'=>0);
	   	    $set=new Process($array1);
		          $set->update($table2,$cond);
				  
				  $array2=array('a_status'=>'Cleared');
				     $set1=new Process($array2);
		                 $set1->update($table1,$cond);
		                               header('location:../home.php');
		
	   }else{
	   	 
		 $new_bal=$old_bal-$inst;
	     $bal_array=array('a_bal'=>$new_bal,
	'a_status'=>'Updated');
  
	   $update=new Process($bal_array);
	                $update->update($table1,$cond);
					
					
					if($new_bal==0){
		 	
			$array3=array('advance'=>0);
              $set2=new Process($array3);
		            $set2->update($table2,$cond);
				  
				 
				  $array4=array('a_status'=>'Cleared');
				      $set3=new Process($array4);
					     $set3->update($table1,$cond);

		 }
		 		
						/*updating tbl updates on activation*/
						
				$get_u_bal=new Process;
				 $u_bal=$get_u_bal->getData($table3,$cond);
				   foreach($u_bal as $u_val){
					 $balance=$u_val['balance'];
					    $t_am=$u_val['t_amount'];
				}
				  
				  $new_t_am=$t_am+$inst;
				  $new_u_bal=$balance-$inst;
				  
				  $u_bal_array=array(
				      't_amount'=>$new_t_am,
				  'balance'=>$new_u_bal
				  );
				  
				  $update1=new Process($u_bal_array);
				  $update1->update($table3,$cond);
				  
						/*updating tbl payroll on activation*/	
	   
	   $get_p_bal=new Process;
				$p_bal=$get_p_bal->getData($table2,$cond);
				foreach($p_bal as $p_val){
					$balance_p=$p_val['balance'];
				
				}
				
				  $new_p_bal=$balance_p-$inst;
				  $p_bal_array=array(
				  'balance'=>$new_p_bal
				  );
				  
				  $update2=new Process($p_bal_array);
				  $update2->update($table2,$cond);
		
	header('location:../home.php');
	
	}
	}
?>