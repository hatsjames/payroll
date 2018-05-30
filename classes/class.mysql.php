<?php
require'dbconn.php';

class Db{
	
	function db_insert($sql){
		global $db;
		  //$cleansql=$this->clean($sql);
        $res = $db->db_conn()->query($sql);
     	return $res;
	}

	function clean($sql){
		$cln=real_escape_string($sql);
		return $cln;
	}

	function getRows($sql){
		global $db;
		$res=$db->db_conn()->query($sql);
		$rows_c=$res->num_rows;
		return $rows_c;
	}
	
	function db_get($sql){
		global $db;
	   $res=$db->db_conn()->query($sql);
	$data=array();
	while($rows=$res->fetch_assoc()){
		$data[]=$rows;	}
	return $data;
	}
	
	function getAffectedRows(){
		global $db;
		$rows=$db->db_conn()->affected_rows;
		return $rows;
		
	}
	
	function getInsertId(){
		global $db;
		$res=$db->db_conn()->insert_id;
		return $res;
	}
	
	
	
}
 ?>