<?php
require 'phpmailer/PHPMailerAutoload.php';
$mailer = new PHPMailer();
$mailer->IsSMTP(); // disbale this when using live server
$mailer->SMTPDebug = 1;
$mailer->Host = 'smtp.gmail.com';
$mailer->Port = 587; 
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = 'tls';

$mailer->Username = '*****@gmail.com';  
$mailer->Password = '*****'; 
$mailer->FromName = 'Exhanger';  
$mailer->From = '*****@gmail.com';  
$mailer->addAddress('****@gmail.com');  
$mailer->addReplyTo('*****@gmail.com');  

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