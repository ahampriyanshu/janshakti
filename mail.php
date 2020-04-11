<?php
require 'phpmailer/PHPMailerAutoload.php';
$mailer = new PHPMailer();
$mailer->IsSMTP(); // disbale this when using live server
$mailer->SMTPDebug = 1;
$mailer->Host = 'smtp.gmail.com';
$mailer->Port = 587; 
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = 'tls';

$mailer->Username = 'priyanshootiwari@gmail.com';  
$mailer->Password = 'Lexdumbo12'; 
$mailer->FromName = 'Exhanger';  
$mailer->From = 'priyanshootiwari@gmail.com';  
$mailer->addAddress('vaibhav2017shukla@gmail.com');  
$mailer->addReplyTo('priyanshootiwari@gmail.com');  

$mailer->isHTML(true);
$mailer->Subject = 'test case of phpmailer';
$mailer->Body = '<h1 align=center>If you are receving this mail then phpmailer is sucessfully working</h1>';

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