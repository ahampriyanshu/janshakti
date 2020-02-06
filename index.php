<?php
require 'phpmailer/PHPMailerAutoload.php';
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1; 
$mailer->Host = 'smtp.gmail.com';
$mailer->Port = 587; //can be 587
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = 'tls';
// Change this to your gmail address
$mailer->Username = 'priyanshootiwari@gmail.com';  
// Change this to your gmail password
$mailer->Password = 'Lexdumbo12';  
// Change this to your gmail address
$mailer->From = 'priyanshutiwari@gmail.com';  
// This will reflect as from name in the email to be sent
$mailer->FromName = 'Priyanshu Tiwari'; 
$mailer->Body = 'If you are receving this mail then phpmailer is sucessfully working';
$mailer->Subject = 'test case of phpmailer';
// This is where you want your email to be sent
$mailer->addAddress('vaibhav2017shukla@gmail.com');  
$mailer->addReplyTo('priyanshootiwari@gmail.com');  
if(!$mailer->Send())
{
    echo "Message was not sent<br/ >";
    echo "Mailer Error: " . $mailer->ErrorInfo;
}
else
{
    echo "Message has been sent";
}
?>