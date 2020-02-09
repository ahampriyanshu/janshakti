<?php  session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php
include 'essentials/database.php';
date_default_timezone_set('Asia/Kolkata');
$content = $_POST['content'];
$title = $_POST['title'];
$officer = $_POST['officer'];
$department = $_POST['department'];
$locality = $_POST['locality'];
$username = $_SESSION["loggedin"];
$date = date('m/d/Y h:i:s', time());
if (empty($content)) {
	echo "<script>
    alert('OOPs,it seems your question is empty as your life');
    document.location='index.php';
    </script>";
}else{
$sql = "INSERT INTO questions(content,title,officer,department,locality,username,datetym) VALUES ('$content','$title','$officer','$department','$locality','$username','$date')";
if ($con->query($sql) === TRUE)
{
	$sq = "SELECT id FROM questions where content ='$content' && title = '$title'";
    $result = mysqli_query($con, $sq);

while($row = mysqli_fetch_array($result)){
	 $image_id= $row["id"];}
	 $filepath = "uploads/" .$image_id;
 
if(move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)) 
{
echo "";
} 
else 
{
echo "Error !!";
}

header('location:index.php');
}
else
{
	header('location:addque.php');
echo "<script>alert('SORRY,some error occured!Please try again');</script>";
}
}
?>