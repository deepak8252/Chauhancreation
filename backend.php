<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';
     $name=$_POST["name"];
    $email=$_POST['email'];
    $appointment=$_POST['appointmentdate'];
    $phone=$_POST['phone'];
    $service=$_POST['service'];
    $message = "
<html>
<head>
<title>Query form</title>
</head>
<body>
<p style='font-size:18px;text-decoration:underline;font-weight:20px '>Appointment Details </p>

Name    : $name<br>
Email   : $email<br>
Phone   : $phone<br>
Date of : $appointment<br>
Appointment <br>
Service : $service


</body>
</html>
";
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
		
	
	
	$mail->isHTML(true);								
	$mail->Subject = 'Chauhan Creation |Appointment ';
	$mail->Body =$message;
	if($mail->send()){
	    echo '<script>alert("Your Appointment Booked");window.location.href=document.referrer;</script>';
	}
	
} catch (Exception $e) {
	//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	echo '<script>alert("'.$mail->ErrorInfo.'");window.location.href=document.referrer;</script>';
}


