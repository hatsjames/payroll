<?php 
 include_once'class.process.php';
 
                         if (isset($_POST['save'])){
	   switch($_POST['action']){
	  	// add all the information
	  	case 'post':
		 $get_them=new Process;$tbl1='stock';
			
	     $items=$_POST['item'];
		  $qua=$_POST['quant'];
		  
		           $sup=$_POST['superv'];
		           $unit1=$_POST['unit'];
		 $date=$_POST['date'];
		 $stat1=$_POST['i_status'];
		 $k=0; for($k=0;$k<count($items);$k++){$options = 'item_id LIKE "%'.$items[$k].'%"';
		   if(!empty($qua)){
		   	$qua_value=$get_them->getData($tbl1,$options);foreach($qua_value as $values){ $quant_value=$values['quantity']; $id=$values['stock_id'];}
	          $new_value = ($quant_value-$qua[$k]);$more_options='stock_id = '.$id.'';
			                     $new_info = array('quantity'=>$new_value);
			                     $updating = new Process($new_info);
			        $updating->update($tbl1,$more_options);
							//echo "$id";
		   }
	      $tbl='general_info';
		  
		   $info=array('gen_id'=>'','location_name'=>$_POST['loc'],'item_name'=>$items[$k],'supervisor_name'=>$sup[$k],
		     'quantity'=>$qua[$k],'unit'=>$unit1[$k],'date'=>$date,'item_status'=>$stat1[$k]
		);
		
		  $gen=new Process($info);
		                 $gen->putData($tbl);
			       $id=$gen->insert_id();
			 
			 	  			     $tbl3='barcodes';
				        $serial=$_POST['serial'];  
				  $warrant=$_POST['warrant'];
				  $y=0;
				  for($y=0;$y<count($serial);$y++){
				  $barcodes_info=array('serial_id'=>'','gen_id'=>$id,'serial'=>$serial[$y],'warrant'=>$warrant[$y]);
					if(isset($_POST['serial'])){
					 $addbarcodes=new Process($barcodes_info);
					                     $addbarcodes->putData($tbl3);
					}else{ break;}
		         }
			}
			      header('Location:../within.php');
			      break;
			  
 	  //add locations
 
 	  case 'locations':
	 $location=$_POST['locations'];
	   $i=0;
		 for($i=0;$i<count($location);$i++){;
 	  	   $tbl='location';
		     $info=array('loc_id'=>'','l_name'=>$location[$i]);
		       $loc=new Process($info);
		          $loc->putData($tbl);
			      
		  }
		   header('Location:../home.php');
 	  break;
	  
	  // adding users data
	  case'add_users':
 	   $tbl='users';
		  $info=array();
		    $user=new Process($info);
		          $user->putData($tbl);
			     header('Location:../home.php');
 	  break;
	  
	 case'stock':
	 	$tbl='stock'; 
	    $check=new Process;
	    $item=$_POST['items']; 
			  $category=$_POST['category'];
			  $unit=$_POST['unit'];;
			  $quant=$_POST['quantity'];
			  $supplier=$_POST['supplier'];
			  $warrant=$_POST['warrant'];
			  $category=$_POST['category'];
			  $date=$_POST['date'];
			  $serial=$_POST['serial'];  
			  $bar=$_POST['bar'];
			  $unit1=$_POST['unit'];
	  $i=0;
	  $new_value=array();
		for($i=0;$i<count($item);$i++){
			//check if item exists
			$options = 'item_id LIKE "%'.$item[$i].'%"';
			   $check_item = $check->retrieve_rows($tbl,$options);
	if($check_item > 0){ $get_item = $check->getData($tbl,$options);foreach($get_item as $value){$exist=$value['quantity'];$id=$value['stock_id'];} 
				  $new_value = ($exist+$quant[$i]);		  	  
	$array_inf=array('quantity'=>$new_value); $more_options = 'stock_id = '.$id.'';
	$update=new Process($array_inf);
	$update->update($tbl,$more_options);
                                        $idx=$id;	
		  	$tbl3='barcodes';
			
			$y=0;
			for($y=0;$y<count($serial);$y++){
				  $barcodes_info=array('serial_id'=>'','stock_id'=>$idx,'serial'=>$serial[$y],'warrant'=>$warrant[$y]);
						if(isset($_POST['serial'])){
					 $addbarcodes=new Process($barcodes_info);
					                     $addbarcodes->putData($tbl3);   }
		} 
		
		$tbl_updated='last_updated';
		$new_things=array('item_id'=>$idx,'quantity_added'=>$quant[$i],'new_quantity'=>$new_value,'updated_dated'=>date('Y-m-d H:i:s'));
		$last_updated=new Process($new_things);$last_updated->putData($tbl_updated);
		///cool stuff@@@ huh!!!!	
			
	}else{
		
		 $info=array('stock_id'=>'',
		         'item_id'=>$item[$i],
		         'cat_name'=>$category[$i],
		         'unit'=>$unit[$i],
		         'barcode'=>$bar[$i],
		         'quantity'=>$quant[$i],
		         'supplier'=>$supplier[$i],
		         'unit'=>$unit1[$i],
		         'date'=>$_POST['date']
		 );
		        $process=new Process($info);
		               $process->putData($tbl);
				  //add barcodes
				         $id=$process->insert_id();
						 // $id=$update->insert_id();
						  			  $tbl3='barcodes';
				   
				  
				   $serial=$_POST['serial'];$warrant=$_POST['warrant'];
				  $y=0;
				  for($y=0;$y<count($serial);$y++){
				  $barcodes_info=array('serial_id'=>'','stock_id'=>$id,'serial'=>$serial[$y],'warrant'=>$warrant[$y]);
			
				if(isset($_POST['serial'])){
			 $addbarcodes=new Process($barcodes_info);
					                     $done=$addbarcodes->putData($tbl3);
			}
										 						 
										// if($done){
	        	//echo "<div  style='color:green;'>Item Added Successfully!</div>";}
		         }  

	}
		

}
		
	 header('Location:../stock.php');
 	  break;
	  
	  case'category':
 	   $tbl='item_cat';
		   $item=$_POST['item_cat'];
	         $i=0;for($i=0;$i<count($item);$i++){	
		        $info=array('item_id'=>'','item_name'=>$item[$i]
		 ); $process=new Process($info);
		          $process->putData($tbl);
		          }
	 header('Location:../home.php');
 	  break; 

	  
	  case'supplier':
		  $tbl='supplier';
 	      $name=$_POST['name'];
 	      $cp=$_POST['cp'];
		  $address=$_POST['address'];
		  $phone=$_POST['number'];
	                      $i=0;for($i=0;$i<count($name);$i++){	
		 $info=array('sup_id'=>'','name'=>$name[$i],'address'=>$address[$i],'contact_p'=>$cp[$i],'phone'=>$phone[$i]
		 ); 
		 $process=new Process($info);
		          $process->putData($tbl);
		          }
			     header('Location:../home.php');
 	  break;
	  
	  case'sup':
		  $tbl='supervisor';
 	      $name=$_POST['name'];
		  $phone=$_POST['number'];
	                      $i=0;for($i=0;$i<count($name);$i++){	
		 $info=array('sup_id'=>'','sup_name'=>$name[$i],'tel_number'=>$phone[$i]
		 ); 
		 $process=new Process($info);
		          $process->putData($tbl);
		          }
			     header('Location:../home.php');
 	  break;
	  //add items to post class
 	  case'items':$tbl='item_s'; 
	  $check=new Process;
	    $item=$_POST['items']; 
		     $quant=$_POST['quantity'];
	  $i=0;
	  $new_value=array();
		for($i=0;$i<count($item);$i++){
			//check if item exists
			$options = 'item LIKE "%'.$item[$i].'%"';
			   $check_item = $check->retrieve_rows($tbl,$options);
	if($check_item > 0){ $get_item = $check->getData($tbl,$options);foreach($get_item as $value){$exist=$value['item_quantity'];$id=$value['item_s_id'];} 
				  $new_value = ($exist+$quant[$i]);		  	  
	$array_inf=array('item_quantity'=>$new_value); $more_options = 'item_s_id = '.$id.'';
	$update=new Process($array_inf);
	$update->update($tbl,$more_options); } else{
		 $info=array('item_s_id'=>'',
		         'item'=>$item[$i],
		         'item_quantity'=>$quant[$i] 
		 );
		        $process=new Process($info);
		          $process->putData($tbl);
		          }
		}
		  
	 header('Location:../home.php');
 	  break;
	  
 	 case'items_add':$tbl='items';
	    $item=$_POST['items'];
	    $desc=$_POST['desc'];
	    $cat=$_POST['cat'];
	       $i=0;for($i=0;$i<count($item);$i++){	
		 $info=array('item_id'=>'','item_name'=>$item[$i],'item_desc'=>$desc[$i],'item_category'=>$cat[$i]
		 ); $process=new Process($info);
		          $process->putData($tbl);
		          }
	 header('Location:../home.php');
 	  break; 
	  
	 case 'up_c';
	 $get_them=new Process;$tbl1='stock';
	     $items=$_POST['item'];
		 $qua=$_POST['quant'];$unitx=$_POST['unit'];
		 $loc=$_POST['loc'];
		              $recieve=$_POST['reciever'];
		 $dist=$_POST['dist'];
		 $tran=$_POST['trans'];
		 $lic=$_POST['plate'];
		 $sup=$_POST['superv'];
		  $stat2=$_POST['i_status'];
		 $k=0; 
		 for($k=0;$k<count($items);$k++){$options = 'item_id LIKE "%'.$items[$k].'%"';
		   if(!empty($qua)){
		   	$qua_value=$get_them->getData($tbl1,$options);foreach($qua_value as $values){ $quant_value=$values['quantity']; $id=$values['stock_id'];}
	          $new_value = ($quant_value-$qua[$k]);$more_options='stock_id = '.$id.'';
			    $new_info = array('quantity'=>$new_value);
			      $updating = new Process($new_info);
			        $updating->update($tbl1,$more_options);
							//echo "$id";					
		   } 
		
		   $info=array('up_id'=>'',
		   'loc_name'=>$_POST['loc'],
		   'it_name'=>$items[$k], 
		   'quantity'=>$qua[$k],
		   'unit'=>$unitx[$k],
		   'district'=>$dist,
		   'trans_type'=>$tran,
		   'licence_no'=>$lic,
		   'reciever'=>$recieve,
		   'superv'=>$sup[$k],
		   'p_date'=>$_POST['date'],
		   'item_status'=>$stat2[$k]
		);   
		
		$tblx='upcountry';
		$gen=new Process($info);
		     $gen->putData($tblx);
		      	 $last_id=$gen->insert_id();
			 $tbl3='barcodes';
				  $serial=$_POST['serial'];  
				  $warrant=$_POST['warrant'];
				 
				  $y=0;
				  for($y=0;$y<count($serial);$y++){
				  $barcodes_info=array('serial_id'=>'','up_id'=>$last_id,'serial'=>$serial[$y],'warrant'=>$warrant[$y]);
						if(isset($_POST['serial'])){
					 $addbarcodes=new Process($barcodes_info);
					                     $addbarcodes->putData($tbl3);}
			   
				  }
			 header('Location:../upcountry.php');	  	 
             break;

}  
	  
}  
 }elseif(isset($_POST['updated'])){
 		
 	$locw=$_POST['locw'];
 	   $itemsw=$_POST['itemw'];
		 $quaw=$_POST['quantw'];
		 $supw=$_POST['supervw'];
		 $unitw=$_POST['unitw'];
		 $datew=$_POST['datew'];
		 $id=$_POST['updated_id']; 
	         $tbl='general_info';
		    $info=array('location_name'=>$locw,'item_name'=>$itemsw,'supervisor_name'=>$supw,
		    'quantity'=>$quaw,'unit'=>$unitw,'date'=>$datew
	);
		  $gen=new Process($info);$options= 'gen_id = '.$_POST['updated_id'].'';
		           $gen->update($tbl,$options);
			
			
		///	echo $locw;echo $itemsw;echo $quaw;echo $supw;;
			
			
			
			
			
			
			   //   header('Location:../home.php');
				   
				   
		}elseif(isset($_POST['updated1'])){
 	    $itemsu=$_POST['itemu'];
		 $quau=$_POST['quantu'];
		 $locu=$_POST['locu'];
		 $recieveu=$_POST['recieveru'];
		 $distu=$_POST['distu'];
		 $tranu=$_POST['transu'];
		 $licu=$_POST['plateu'];
		 $supu=$_POST['supervu'];
		 $unitu=$_POST['unitu'];
	          $tbl='upcountry';
			   $idu=$_POST['updated_id1']; 
		      $info=array(
		   'loc_name'=>$locu,
		   'it_name'=>$itemsu, 
		   'quantity'=>$quau,
		   'unit'=>$unitu,
		   'district'=>$distu,
		   'trans_type'=>$tranu,
		   'licence_no'=>$licu,
		   'reciever'=>$recieveu,
		   'superv'=>$supu,
		   'p_date'=>$_POST['date']
		);   
		  $gen=new Process($info);$options= 'up_id = '.$_POST['updated_id1'].'';
		               $gen->update($tbl,$options);
			
			       header('Location:../home.php');
				   
				   }elseif(isset($_POST['updated2'])){
 	     $items=$_POST['itemss']; 
			// $category=$_POST['category'];
			 $units=$_POST['units'];;
			 $quants=$_POST['quantitys'];
			 $suppliers=$_POST['suppliers'];
			 $warrants=$_POST['warrants'];
			 $categorys=$_POST['categorys'];
			 $dates=$_POST['date'];
			 $serials=$_POST['serials'];  
			 $bars=$_POST['bars'];
			  $units=$_POST['units'];
	          $tbl='stock';
			  $ids=$_POST['updated_id2']; 
		      $info=array(
		         'item_id'=>$items,
		         'cat_name'=>$categorys,
		         'unit'=>$units,
		         'barcode'=>$bars,
		         'quantity'=>$quants,
		         'supplier'=>$suppliers,
		         'unit'=>$units,
		         'date'=>$_POST['date']
		 );
		  $gen=new Process($info);$options= 'stock_id = '.$_POST['updated_id2'].'';
		               $gen->update($tbl,$options);
			
			       header('Location:../home.php');
				   
 }elseif(isset($_POST['del_idxx'])){$tbl='general_info';
 	     //$items=$_POST['item'];
		  $gen=new Process($info);$options= 'gen_id = '.$_POST['del_id'].'';
		               $gen->delete($tbl,$options);
			                          header('Location:../home.php');
									  
									  }elseif(isset($_POST['del_id1xx'])){$tbl='upcountry';
 	     //$items=$_POST['item'];
		  $gen=new Process($info);$options= 'up_id = '.$_POST['del_id1'].'';
		               $gen->delete($tbl,$options);
			                          header('Location:../home.php');
									  
									  }elseif(isset($_POST['del_id2xx'])){$tbl='stock';
 	     //$items=$_POST['item'];
		  $gen=new Process($info);$options= 'stock_id = '.$_POST['del_id2'].'';
		               $gen->delete($tbl,$options);
			                          header('Location:../home.php');
 }
elseif(isset($_POST['login'])){$tbl='user';
 	     //$items=$_POST['item'];
 	           $username=$_POST['username'];
		  $password=$_POST['password'];
		  $tbl_user='user';
		  //$name=$_POST['full_name'];
		  $gen1=new Process();
		               $gen1->login($username,$password,$tbl_user);
			                         //header('Location:../home.php');
 }

elseif(isset($_POST['register'])){$tbl='user';
 	     //$items=$_POST['item'];
 	     $fname=$_POST['fname'];
		 $username=$_POST['username'];
		 $password=md5($_POST['password']);
		 $reg_info=array(
		      'user_name'=>$username,
		        'full_name'=>$fname,
		            'passwd'=>$password);
		              
		  $tbl_user='user';
		  //$name=$_POST['full_name'];
		  $genx=new Process($reg_info);
		              $insert=$genx->register($tbl_user);
			                          //header('Location:../home.php');
 }


?>