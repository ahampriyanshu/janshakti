<?php
include("header.php");
include("essentials/database.php"); ?>
<?php
date_default_timezone_set('Asia/Kolkata');
$newuser = $_POST['username'];
$pass = $_POST['pass'];
$name  = $_POST['name'];
$city  = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = date('m/d/Y h:i:s', time());
$sql = "INSERT INTO userbase (username,password,name,city,phone,email,datetym) VALUES
('$newuser','$pass','$name','$city','$phone','$email','$date')";
$q = "select * from userbase where username = '$newuser'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
echo "<script>
alert('Username already taken');
document.location='signup.php';
</script>";
}
else {
$qy = "INSERT INTO userbase(username,password,name,city,phone,email,datetym) VALUES ('$a$newuser','$pass','$name','$city','$phone','$email','$date')";
mysqli_query($con,$qy);
require 'essentials/PHPMailerAutoload.php';
$mailer = new PHPMailer();
$mailer->IsSMTP(); // disbale this when using live server
$mailer->SMTPDebug = 0;
$mailer->Host = 'smtp.gmail.com';
$mailer->Port = 587; 
$mailer->SMTPAuth = true;
$mailer->SMTPSecure = 'tls';

$mailer->Username = 'priyanshootiwari@gmail.com';  
$mailer->Password = ''; 
$mailer->FromName = 'JanShakti';  
$mailer->From = 'priyanshootiwari@gmail.com';  
$mailer->addAddress($email);  
$mailer->addReplyTo('priyanshootiwari@gmail.com');  

$mailer->isHTML(true);
$mailer->Subject = 'Welcome';
$mailer->Body = '<h1 align=center>Hello user you have sucessfully created your account</h1>';

if(!$mailer->Send())
{
    echo "Message was not sent<br/ >";
    echo "Mailer Error: " . $mailer->ErrorInfo;
}
else
{
    echo "Message has been sent";
}
echo "<script>
alert('Login ID successfully created');
document.location='login.php';
</script>";

}
?>
