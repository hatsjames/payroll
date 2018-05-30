<?php 
  
$mail = new PHPMailer;
		
date_default_timezone_set('Etc/UTC');

$mail->isSMTP(); 
//$mail->SMTPDebug = 1;                                     // Set mailer to use SMTP
$mail->Host = gethostbyname('smtp.gmail.com');  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'myexpenditure25@gmail.com';                 // SMTP username
$mail->Password = 'spenders';                           // SMTP password
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

$mail->SMTPOptions = array('ssl' => array('verify_peer_name' => false));


$mail->setFrom('myexpenditure25@gmail.com', 'Mailer');
$mail->addAddress(''.$_POST['email'].'', 'james');     // Add a recipient           // Name is optional
$mail->addReplyTo('myexpenditure25@gmail.com', 'Information');
 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Attendance';
$mail->Body    = 'Welcome '.$_POST['name'].' for attending!';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
    header('location:../home.php');
}
	}





?>