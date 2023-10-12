<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
    $name=$_POST["name"];
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $phone=$_POST['phone'];
  
	
$mail = new PHPMailer(true);

try {
// 	$mail->SMTPDebug = 2;									
	$mail->isSMTP();											
	$mail->Host	 = 'mail.chauhancreation.com';					
	$mail->SMTPAuth = true;	
	$mail->Username = 'mailer@chauhancreation.com';  // SMTP username
    $mail->Password = 'chauhancreation@!963';    // SMTP password
							
	$mail->SMTPSecure = 'ssl';							
	$mail->Port	 =465;

	$mail->setFrom('mailer@chauhancreation.com', 'Chauhan Creation');		
	$mail->addAddress('chauhancreation9@gmail.com');
		$mail->addAddress('rohitawasthi2027@gmail.com');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Chauhan Creation |Thank You For Contacting Us ';
	//$mail->MsgHTML($body);
	$mail->Body = $body;
	
	if($mail->send()){
	    echo '<script>alert("Your query send successfully");window.location.href=document.referrer;</script>';
	}
	
} catch (Exception $e) {
	//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	echo '<script>alert("'.$mail->ErrorInfo.'");window.location.href=document.referrer;</script>';
}

