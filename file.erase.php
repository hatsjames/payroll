<?php include('classes/class.process.php');
 ///delete ids
   
   $cash_m_id=$_GET['delete_row_m1'];$sup_m_id=$_GET['delete_row_m2']; $cash_sh_id=$_GET['delete_row_sh1']; $sup_sh_id=$_GET['delete_row_sh2']; 
   $cash_l_id=$_GET['delete_row_l1']; $sup_l_id=$_GET['delete_row_l2']; $cash_a_id=$_GET['delete_row_a1']; $sup_a_id=$_GET['delete_row_a2']; 



if(isset($_GET['delete_row_s1'])){
	  $cash_s_id=$_GET['delete_row_s1'];
       
  ///updatig justttttttt////
							  $tbl="tbl_cashier";
							  $tbl_u="updates";
							  $tbl_p="payroll";
							  $tbl_m="tbl_memo";
							  $tbl_s="shortages";
							  $tbl_l="tbl_loan";
							  $tbl_a="advance";
							   
	           $opt="c_id=".$cash_s_id."";
	               $proc=new Process;$rase=$proc->delete($tbl,$opt);
				                       $proc1=new Process;$rase1=$proc1->delete($tbl_u,$opt);
					   $proc2=new Process;$rase2=$proc2->delete($tbl_p,$opt);
					   $proc3=new Process;$rase3=$proc3->delete($tbl_m,$opt);
					   $proc4=new Process;$rase4=$proc4->delete($tbl_s,$opt);
					   $proc5=new Process;$rase5=$proc5->delete($tbl_l,$opt);
					   $proc6=new Process;$rase6=$proc6->delete($tbl_a,$opt);
				     header("location:updates.php");	
				
}

elseif(isset($_GET['delete_row_s2'])){$sup_s_id=$_GET['delete_row_s2']; 
       
  //updatig justttttttt//
							    $tbl="supervisor";
							    $tbl_u="updates";
							    $tbl_p="payroll";
	                            $tbl_m="tbl_memo";
							    $tbl_s="shortages";
							    $tbl_l="tbl_loan";
							    $tbl_a="advance";
	           $opt="s_id=".$sup_s_id."";
			   
	               $proc=new Process;$rase=$proc->delete($tbl,$opt);
				                   $proc1=new Process;$rase1=$proc1->delete($tbl_u,$opt);
					   $proc2=new Process;$rase2=$proc2->delete($tbl_p,$opt);
					       $proc3=new Process;$rase3=$proc3->delete($tbl_m,$opt);
					       $proc4=new Process;$rase4=$proc4->delete($tbl_s,$opt);
					   $proc5=new Process;$rase5=$proc5->delete($tbl_l,$opt);
					   $proc6=new Process;$rase6=$proc6->delete($tbl_a,$opt);
				          header("location:updates.php");	
		
   }elseif(isset($_GET['delete_row_m2'])){
   
                           if(isset($_GET['sup_id_m'])){  $sup_id_m=$_GET['sup_id_m']; 
	            
  //updatig justttttttt//
							 $tbl="tbl_memo";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 
	$opt1="s_id=".$sup_id_m."";
	$per_check=new Process;$data=$per_check->getData($tbl,$opt1);foreach($data as $l){$ist=$l['amount'];}
	$perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1){$pv=$l1['balance'];$pl=$l1['memo'];}
	$perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){$pv2=$l2['balance'];$pl2=$l2['t_amount'];}
	
	//updates
	    $u_new_val=$pv2+$ist;
	    $u_new_l_v=$pl2-$ist;
	$opt2="s_id=".$sup_id_m."";
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	//update payroll
	
	$new_val=$pv+$ist;
	$new_l_v=$pl-$ist;
	$opt2="s_id=".$sup_id_m."";
	     $up_info=array('balance'=>$new_val,'memo'=>$new_l_v);
	       $update=new Process($up_info);$update->update($tbl_p,$opt2);
	        $update2=new Process($up_info2);$update2->update($tbl_u,$opt2);
	//
			}
	           $opt="m_id=".$sup_m_id."";$tbl="tbl_memo";
	               $proc=new Process;$rase=$proc->delete($tbl,$opt);
				                             header("location:updates.php");
					 				 		 	
     }elseif(isset($_GET['delete_row_m1'])&&isset($_GET['cash_id_m'])){
	                                  if(isset($_GET['cash_id_m'])){
	                         $cash_id_m=$_GET['cash_id_m'];
	            
  ///updatig justttttttt/
							 $tbl="tbl_memo";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 	 
	$opt1="c_id=".$cash_id_m."";
	
	$per_check=new Process;$data=$per_check->getData($tbl,$opt1);foreach($data as $l){$ist=$l['amount'];}
	$perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1){
		$pv=$l1['balance'];
	    $pl=$l1['memo'];}     
	$perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){$pv2=$l2['balance'];
	$pl2=$l2['t_amount'];}
	////updates
		
	$u_new_val=$pv2+$ist;
	
	$u_new_l_v=$pl2-$ist;
	
	$opt2="c_id=".$cash_id_m."";
	
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	
	///update payroll 
	
		  $new_val=$pv+$ist;
	      $new_l_v=$pl-$ist;
		
	$opt2="c_id=".$cash_id_m."";
	$up_info=array('balance'=>$new_val,'memo'=>$new_l_v);
		   $update=new Process($up_info);$update->update($tbl_p,$opt2);
	            $update2=new Process($up_info2);
	            }	  
				 //$update2->update($tbl_u,$opt2);
	 $opt="m_id=".$cash_m_id."";$tbl="tbl_memo";
	            
	            //   $proc=new Process;$rase=$proc->delete($tbl,$opt);
				  //  header("location:updates.php");	
					
				header("location:updates.php");			
}
elseif(isset($_GET['delete_row_sh1'])){
		
	  if(isset($_GET['cash_id_sh'])){
	                   $cash_id_sh=$_GET['cash_id_sh'];
  ///updatig justttttttt////
							 $tbl="shortages";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 
	$opt1="c_id=".$cash_id_sh."";
	
	$per_check=new Process;$data=$per_check->getData($tbl,$opt1);foreach($data as $l){$ist=$l['s_amount'];}
	    $perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1){$pv=$l1['balance'];
	    $pl=$l1['shortage'];}
	    $perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){$pv2=$l2['balance'];
	    $pl2=$l2['t_amount'];}
	
	////updates
	
	$u_new_val=$pv2+$ist;
	   $u_new_l_v=$pl2-$ist;
	   
	$opt2="c_id=".$cash_id_sh."";
	
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	///update payroll
	
	$new_val=$pv+$ist;
	$new_l_v=$pl-$ist;
	$opt2="c_id=".$cash_id_sh."";
	 
	 
	 $up_info=array('balance'=>$new_val,'shortage'=>$new_l_v);
	       $update=new Process($up_info);$update->update($tbl_p,$opt2);
	 $update2=new Process($up_info2);$update2->update($tbl_u,$opt2);
	////
	
}
	 $opt="sh_id=".$cash_sh_id."";$tbl="shortages";
	               $proc=new Process;$rase=$proc->delete($tbl,$opt);
				    header("location:updates.php");	
										
					
}
elseif(isset($_GET['delete_row_sh2'])){
	
	 if(isset($_GET['sup_id_sh'])){$sup_id_sh=$_GET['sup_id_sh']; 
  ///updating justttttttt////
							 $tbl="shortages";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 
	$opt1="s_id=".$sup_id_sh."";
	$per_check=new Process;$data=$per_check->getData($tbl,$opt1);foreach($data as $l){$ist=$l['s_amount'];}
	      $perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1){$pv=$l1['balance'];$pl=$l1['shortage'];}
	
	$perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){$pv2=$l2['balance'];$pl2=$l2['t_amount'];}
	////updates
	$u_new_val=$pv2+$ist;
	$u_new_l_v=$pl2-$ist;
	$opt2="s_id=".$sup_id_sh."";
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	//update payroll
	
	$new_val=$pv+$ist;
	$new_l_v=$pl-$ist;
	$opt2="s_id=".$sup_id_sh."";
	$up_info=array('balance'=>$new_val,'shortage'=>$new_l_v);
	       $update=new Process($up_info);$update->update($tbl_p,$opt2);
	 $update2=new Process($up_info2);$update2->update($tbl_u,$opt2);
	

}
	 $opt="sh_id=".$sup_sh_id."";$tbl="shortages";
	               $proc=new Process;$rase=$proc->delete($tbl,$opt);
				     header("location:updates.php");	
					 			
	
}
elseif(isset($_GET['delete_row_l1'])){
	  if(isset($_GET['cash_id_l'])){   $cash_id_l=$_GET['cash_id_l'];
	  ///updatig justttttttt////
							 $tbl="tbl_loan";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 
   $opt1="c_id=".$cash_id_l."";
	$per_check=new Process;$data=$per_check->getData($tbl,$opt1);foreach($data as $l){$ist=$l['l_install'];}
	$perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1){$pv=$l1['balance'];$pl=$l1['loan'];}
	$perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){$pv2=$l2['balance'];$pl2=$l2['t_amount'];}
	////updates
	$u_new_val=$pv2+$ist;
	$u_new_l_v=$pl2-$ist;
	$opt2="c_id=".$cash_id_l."";
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	///update payroll
	
	$new_val=$pv+$ist;
	$new_l_v=$pl-$ist;
	$opt2="c_id=".$cash_id_l."";
	$up_info=array('balance'=>$new_val,'loan'=>$new_l_v);
	       $update=new Process($up_info);$update->update($tbl_p,$opt2);
	 $update2=new Process($up_info2);$update2->update($tbl_u,$opt2);
	////
	
	
}
	
	 $opt="ln_id=".$cash_l_id."";$tbl="tbl_loan";
	               $proc=new Process;$rase=$proc->delete($tbl,$opt);
				    header("location:updates.php");	
										
}
elseif(isset($_GET['delete_row_l2'])){
		
	if(isset($_GET['sup_id_l'])){
	
	                      ///updatig just////
	                      
							 $tbl="tbl_loan";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 
	$sup_id_l=$_GET['sup_id_l'];
	
	$opt1="s_id=".$sup_id_l."";
	
	$per_check=new Process;
	$data=$per_check->getData($tbl,$opt1);
	
	foreach($data as $l){$ist=$l['l_install'];}
	

$perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1)
	{$pv=$l1['balance'];$pl=$l1['loan'];}
	
$perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){
	$pv2=$l2['balance'];$pl2=$l2['t_amount'];}
	////updates
	$u_new_val=$pv2+$ist;
	$u_new_l_v=$pl2-$ist;
	$opt2="s_id=".$sup_id_l."";
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	
	
	
	///update payroll
	
	$new_val=$pv+$ist;
	$new_l_v=$pl-$ist;
	$opt2="s_id=".$sup_id_l."";
	$up_info=array('balance'=>$new_val,'loan'=>$new_l_v);
	       $update=new Process($up_info);$update->update($tbl_p,$opt2);
	 $update2=new Process($up_info2);$update2->update($tbl_u,$opt2);
	////
	
	
	
	  }
	
	 $opt="ln_id=".$sup_l_id."";$tbl="tbl_loan";
	              $proc=new Process;$rase=$proc->delete($tbl,$opt);
				     header("location:updates.php");
					 
					 		
	
}
elseif(isset($_GET['delete_row_a1'])){
	            	
	            if(isset($_GET['cash_id_a'])){  $cash_id_a=$_GET['cash_id_a'];
	                      ///updatig justttttttt////
							 $tbl="advance";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 
$opt1="c_id=".$cash_id_a."";
	$per_check=new Process;  $data=$per_check->getData($tbl,$opt1);foreach($data as $l){$ist=$l['a_install'];}
	$perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1){$pv=$l1['balance'];$pl=$l1['advance'];}
	$perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){$pv2=$l2['balance'];$pl2=$l2['t_amount'];}
	////updates
	$u_new_val=$pv2+$ist;
	$u_new_l_v=$pl2-$ist;
	$opt2="c_id=".$cash_id_a."";
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	///update payroll
	

	$new_val=$pv+$ist;
	$new_l_v=$pl-$ist;
	$opt2="c_id=".$cash_id_a."";
	$up_info=array('balance'=>$new_val,'advance'=>$new_l_v);
	       $update=new Process($up_info);$update->update($tbl_p,$opt2);
	 $update2=new Process($up_info2);$update2->update($tbl_u,$opt2);
	////
	
	  }
	                              $opt="a_id=".$cash_a_id."";$tbl="advance";
	                 $proc=new Process;$rase=$proc->delete($tbl,$opt);
				     header("location:updates.php");
					 
}
elseif(isset($_GET['delete_row_a2'])){
      ///updatig justttttttt////
      if(isset($_GET['sup_id_a'])){ $sup_id_a=$_GET['sup_id_a'];
							 
							 $tbl="advance";
							 $tbl_u="updates";
							 $tbl_p="payroll";
							 
$opt1="s_id=".$sup_id_a."";

	$per_check=new Process;$data=$per_check->getData($tbl,$opt1);foreach($data as $l){$ist=$l['a_install'];}
    $perc_check1=new Process;$data1=$perc_check1->getData($tbl_p,$opt1);foreach($data1 as $l1){$pv=$l1['balance'];$pl=$l1['advance'];}
    $perc_check2=new Process;$data2=$perc_check2->getData($tbl_u,$opt1);foreach($data2 as $l2){$pv2=$l2['balance'];$pl2=$l2['t_amount'];}
	
	////updates
	$u_new_val=$pv2+$ist;
	$u_new_l_v=$pl2-$ist;
	
	$opt2="s_id=".$sup_id_a."";
	$up_info2=array('balance'=>$u_new_val,'t_amount'=>$u_new_l_v);
	///update payroll
	$new_val=$pv+$ist;
	$new_l_v=$pl-$ist;
	
	$opt2="s_id=".$sup_id_a."";
	$up_info=array('balance'=>$new_val,'advance'=>$new_l_v);
	 $update=new Process($up_info);$update->update($tbl_p,$opt2);
	 $update2=new Process($up_info2);$update2->update($tbl_u,$opt2);
	////
	

	  }
	 $opt="a_id=".$sup_a_id."";$tbl="advance";
	               $proc=new Process;$rase=$proc->delete($tbl,$opt);
				    header("location:updates.php");		
	
}

?>
