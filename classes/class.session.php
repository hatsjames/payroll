<?php

class Session{
	
	var $_SESSION;
	
	function __construct($u_id,$user){
		//session_start();
	   $this->_SESSION['user']=$user;
		$this->_SESSION['user_id']=$u_id;
			
	}

	function set_session(){
		return $this->_SESSION['user_id'];
	}
	
	function get_session(){
		if(!isset($this->_SESSION['user_id'])){
			$this->is_not_logged_in();	
		}else{return true;}
	}
	
	function is_logged_in(){
		$url="home.php";
		   $this->redirect($url);
		
	}
	function is_not_logged_in(){
		    $url="index.php";
		$this->redirect($url);

	}
	
	function log_out(){
		session_start();
		unset($this->_SESSION['user_id']);
	 session_destroy();
	 	header('location:index.php');
	}
	
	function redirect($url){
		return header('location:'.$url.'');
	}
}?>