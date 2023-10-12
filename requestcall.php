<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/vendor/autoload.php';
    $name=$_POST["name"];
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $phone=$_POST['phone'];
    $message = "
<html>
<head>
<title>Query form</title>
</head>
<body>
<p style='font-size:18px;text-decoration:underline;font-weight:20px '>Request Call</p>


Email   : $email<br>
Phone   : $phone<br>



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
	$mail->addAddress('mailer@chauhancreation.com');
	$mail->addAddress('chauhancreation9@gmail.com');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Chauhan Creation | Request Call  ';
	$mail->Body =$message;
	if($mail->send()){
	    echo '<script>alert("Your Appointment Booked");window.location.href=document.referrer;</script>';
	}
	
} catch (Exception $e) {
	//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	echo '<script>alert("'.$mail->ErrorInfo.'");window.location.href=document.referrer;</script>';
}