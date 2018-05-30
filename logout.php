<?php 
session_start();
include('classes/class.session.php');
  $session=new Session();
$session->log_out();
?>