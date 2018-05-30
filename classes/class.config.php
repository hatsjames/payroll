<?php

Class Database{
	private $conn;
	private static $instance;
	private $host='localhost';
	private $pwd='x_payroll';
	private $user='cls';
	private $db='p_qlltest';
	
	/*gettin instance of db
	@return instance;
	
	 * 
	 */
	 
	public static function getInstance(){
			
		if(!self::$instance){
			self::$instance=new self();
		}
		return self::$instance;
	}
	private function __construct(){
		$this->conn=new mysqli($this->host,$this->user,$this->pwd,$this->db);
		if(mysqli_connect_error()){
			trigger_error("failed to connect:".mysqli_connect_error());
		}
	}
	//prevent duplication of connections..thats why its kept emoty
	private function __clone(){}
	//connection method
	public function db_conn(){
		$this->conn;
		return $this->conn;
	}
	
	
}


/*
$config=array('host'=>'localhost',
'user'=>'root',
'password'=>'people',
'database'=>'stock',
);
             global $db_conn;
$db_conn=new mysqli($config['host'],$config['user'],$config['password'],$config['database']);
if(mysqli_connect_errno()){
               die("couldn't connect!");
}*/

 ?>
