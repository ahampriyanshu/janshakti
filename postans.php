<?php  session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php
include 'essentials/database.php';
date_default_timezone_set('Asia/Kolkata');
$qid = $_POST['qid'];
$content = $_POST['reply'];
$username = $_SESSION["loggedin"];
$date = date('m/d/Y h:i:s', time());
if (empty($content)) {
	echo "<script>
    alert('OOPs,it seems your answer is empty as your life');
    document.location='index.php';
    </script>";
}else{
$sql = "INSERT INTO answers (id,content,username,datetym) VALUES ('$qid','$content','$username','$date')";
if ( $con -> query ($sql) === TRUE)
{
header('location:index.php');
}
else
{
header('location:index.php');
echo "<script>alert('SORRY,some error occured!Please try again');</script>";
	}
}
?>