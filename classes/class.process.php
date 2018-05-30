<?php 

/*
 * class for processing sql statements.........
 * links to mysql class......
 * 
 */
require'class.mysql.php';
class Process{
	var $data;
	var $table;
	var $errors=array();
	
	        function __construct($params=array()){
		$this->data=$params;
	}  
	              function putData($tbl){
			
		$get=new Db();
		$info=$this->data;
		       $keys=array_keys($info);
		 $sql=
		 "INSERT INTO ".$tbl."(".implode(",",array_keys($info)).") VALUES('".implode("','",$info)."')";
		       $insert=$get->db_insert($sql);  
			                 
						    if($insert){
			   	$message['m']="Inserted!!";
			   } else{
			   	$errors['error'] = "not inserted";	
			   }                    //  $errors['error'] = "not inserted";							  
		return true;
		
	}
			
			  function input($tbl){
			
		$get=new Db();
		$info=$this->data;
		       $keys=array_keys($info);
		 $sql=
		 "INSERT INTO ".$tbl."(".implode(",",array_keys($info)).") VALUES('".implode("','",$info)."')";
		       $insert=$get->db_insert($sql);  
			               
						   
						    if($insert){
			   	$message['m']="Inserted!!";
			   } else{
			   	$errors['error'] = "not inserted";	
			   }                    //  $errors['error'] = "not inserted";							  
		return true;
		
	}
			
	            function getAllData($tbl='', $options=''){
		$get=new Db();
		$sql=
		"SELECT * FROM ".$tbl." ".$options."";
		return $get->db_get($sql);
		
	}
             function getData($tbl,$options){
      	        $get=new Db();
	          $sql=
	          "SELECT*FROM ".$tbl." WHERE ".$options."";
	return $get->db_get($sql); 
  }
  
             function update($tbl,$options){
  	               $info=$this->data;
  	            $sql=
  	            'UPDATE '.$tbl.' SET';
			$seps='';
				foreach($info as $k=>$v){
				$set.=$sep.$k.'="'.$v.'"';
					
					$sep = ',';
				}
				$where='WHERE '." ".$options.'';
			           $update_now="$sql"." "."$set"." "."$where";	
		//update function main//
		          $get=new Db();
	return $get->db_insert($update_now);
	
  }		 function updateb($optionb){
  	               //$info=$this->data;
  	       
  	             $get=new Db();
	return $get->db_insert($optionb);
	
  }
			    function getExtras($options=''){
		  $get=new Db();
		$sql=
		"SELECT * FROM ".$options."";
		return $get->db_get($sql);
		
	} 
			function dump($sql){
				 $get=new Db();
		       $insert=$get->db_insert($sql);  
			  
			                 if($insert){
			   	$message['m']="Inserted!!";
			   } else{
			   	$errors['error'] = "not inserted";	
			   }                    //  $errors['error'] = "not inserted";							  
		return true;
		
	}
	          function delete($tbl,$options){
		   $sql="DELETE FROM ".$tbl." WHERE ".$options."";
		$get=new Db(); return $get->db_insert($sql);
		
	}
			  
	              function retrieve_rows($tbl,$options=''){
		   $get=new Db();
		$sql=
		"SELECT * FROM ".$tbl." WHERE ".$options."";
		//echo $get->getRows($sql);
		 return  $get->getRows($sql);
	}
				 
	              function insert_id(){
		$get=new Db();
		return $get->getInsertId();
	}
	
	              function login($user,$pass,$tbl){
			$get=new Db();
		$sql="SELECT*FROM ".$tbl." WHERE username='$user' AND password='$pass'";
		$rows=$get->getRows($sql);	
		if($rows > 0){
			 $data=$get->db_get($sql);
			foreach($data as $values){
			 	
				 $user_name=$values['username'];
				 $id=$values['user_id'];
			//echo $id;
			}
			session_start();
			$_SESSION['user_id']=$id;
			   $_SESSION['user']=$user_name;
			header('location:../home.php');
		}
		else{
		 $errors=array();
			           $errors['login_errors']="Sign up please!!";
					   $url1='../index.php';$this->redirect($url1);

		}
   }
            function register($tbl){
	           $get=new Db();
		               $info=$this->data;
		       $keys=array_keys($info);
		 $sql=
		 "INSERT INTO ".$tbl."(".implode(",",array_keys($info)).") VALUES('".implode("','",$info)."')";
		       $insert=$get->db_insert($sql);  
			   if($insert){
			   	$errors['m']="registered successfully!!"; $url="../home.php";
			   	$this->redirect($url);
				        echo"hehehe";
			   } else{
			   	$errors['error']="not inserted";	
				        echo"huhu";
				$url="../home.php";
				
			   	$this->redirect($url);
			   }                    //  $errors['error'] = "not inserted";							  
		return true;
		
	
	
}
function redirect($url){
		return header('location:'.$url.'');
	}
}



?>