<?php session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:login.php');}
?>
<?php
include("header.php");
include("essentials/database.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="description" content="GNDEC GATE FORUM">
  <meta name="keywords" content="gate,priyanshumay,gne,gndec,">
  <meta name="author" content="PriyanshuMay,priyanshumay">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaint</title>
    <link href="forum.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        @media only screen and (max-width:480px ) {
    html,  body{
        margin:0;
        height: 100%;
        padding-right: 2%;
        padding-left: 2%;
        overflow-x: hidden;
        background-color:#f3f7f7 ;
        }
        body::-webkit-scrollbar {
        display: none;
    }
    .question_display {
    position: relative;
    border: none;
    width: 90%;
    }
    #answerbox{
    position: relative;;
    width: 90%;
    }
    .reply{
width: 90%;
font-size: 15px;
line-height: 1.4;
min-height: 20px;
border: 1px solid #e2e2e2;
box-shadow: 0 0 5px #888;
border-radius: 4px;
    }
    #submitans {
    background-color:#833AB4;
    color: white;
    padding: 11px;
    font-size: 11px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    font-family: courier;
    border-radius: 5%;
    }
    #submitans:hover, #submitans:focus {
    background-color: #DB4437;
    }
    #title{
    line-height: 1.5;
    letter-spacing: -1px;
    color: #333;
    tab-size: 4;
    word-break: break-word;
    text-align: left;
    direction: ltr;
    user-select: text;
    font-size: 25px;
    font-family: Courier new ;
    }
    .select {
    position: relative;
    letter-spacing: 0px;
    font-family: courier;
    color: red;
    }
    .select option{
    font-family: courier;
    color: white;
    font-weight: bold;
    }
    .option{
    font-family: courier;
    color: white;
    font-weight: bold;
    background-color:#833AB4;
    padding: 5px;
    
    }
    #specs{
    font-size:12px;
    font-family: courier new ;
    font-weight: bold;
    color: #833AB4;
    }
    #details{
    font-weight: bold;
    color: red;
    font-size:12px;
    }
    #line{
    border: 2px solid red;
    border-radius: 5px;
    }
}
    @media only screen and (min-width:481px ) {

html, body {
  background-color: #f3f7f7;
  overflow-x: hidden;
  padding-left: 100px;
}
    .question_display {
    position: relative;
    border: none;
    width: 90%;
    padding: 20px;
    }
    #answerbox{
    position: relative;
    padding-left: 130px;
    width: 80%;
    }
    #submitans {
    background-color:#833AB4;
    color: white;
    padding: 11px;
    font-size: 11px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    font-family: courier;
    border-radius: 5%;
    }
    #submitans:hover, #submitans:focus {
    background-color: #DB4437;
    }
    #title{
    line-height: 1.5;
    letter-spacing: -1px;
    color: #333;
    tab-size: 4;
    word-break: break-word;
    text-align: left;
    direction: ltr;
    user-select: text;
    font-size: 25px;
    font-family: Courier new ;
    }
    .select {
    position: relative;
    letter-spacing: 0px;
    font-family: courier;
    color: red;
    }
    .select option{
    font-family: courier;
    color: white;
    font-weight: bold;
    }
    .option{
    font-family: courier;
    color: white;
    font-weight: bold;
    background-color:#833AB4;
    padding: 5px;
    
    }
    #specs{
    font-size:12px;
    font-family: courier new ;
    font-weight: bold;
    color: #833AB4;
    }
    #details{
    font-weight: bold;
    color: red;
    font-size:12px;
    }
    #line{
    border: 2px solid red;
    border-radius: 5px;
    }
}
    </style>
  </head>
  <body>
    <?php
    $ID = $_POST['id'];
    $sql = "SELECT id,content,level,tym,branch,username,datetym FROM questions WHERE id = '$ID'";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()) :?>
    <div class="question_display" style="left: 30px;">
      <span id="title"><?php echo $row["content"]; ?></span><br><hr id="line"><br>
      <span id="specs">Asked by </span>&nbsp;<span id="details"><?php echo $row["username"]; ?></span> &emsp;
      <span id="specs">time alloted is</span> &nbsp;<span id="details"><?php echo $row["tym"]; ?></span> &emsp;
      <span id="specs">difficulty level estimated is</span>&nbsp;&nbsp;<span id="details"><?php echo $row["level"]; ?></span> &emsp;
      <span id="specs">question comes under</span> &nbsp;<span id="details"><?php echo $row["branch"]; ?></span><span id="specs"> branch</span>&emsp;
      <span id="specs">posted on</span> &nbsp;<span id="details"><?php echo $row["datetym"]; ?></span><br>
    </div><br><br>
    <button onclick="myFunction()">Show</button>
     <?php
        echo '<div class="content" id="content">';
            $queid = $row["id"];
            $ql = "SELECT * FROM answers WHERE id = '$queid' ORDER BY datetym DESC ";
            $resul = $con->query($ql);
            if ($resul->num_rows > 0) {
            while($ro = $resul->fetch_assoc()) {
            echo "<br><div id='answer_box'>
                <span id='anstitle'><br> ". $ro["content"] . "</span><br><span id='specs'> <br>&emsp;&emsp;&emsp;Time required is </span>&nbsp;<span id='details'> " . $ro ["tym"] . "&emsp;&emsp;<span id='specs'> Difficulty Level according to user is </span>&nbsp; ". $ro["level"] ."&emsp;&emsp;<span id='specs'> Answered by </span>&nbsp; " . $ro["username"] . "&emsp;&emsp;<span id='specs'> answered on </span>&nbsp; " . $ro["datetym"] ."</span></div>";
                }
                } else {
                echo "<br><div id='answer_box'><span id='anstitle'>Be the first to dicuss</span></div>";
                }
            echo '<br><br></div>';
            endwhile; ?>
    <div id="answerbox" >
    <form name="addform" action="postans.php" method="POST">
        <input type="hidden" name="qid" value="<?php echo $ID;?>">
        <textarea name="content" class="reply" name="reply" placeholder="Do you realte to the problem ?" cols="100" rows="10" required></textarea>
        <div class="select">
          <br>
          <button type="submit" name="submit" class="submit" id="submitans" >Post Reply</button>
        </div>
 
 <script>
function myFunction() {
  var x = document.getElementById("content");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
      </form>
    </div>
  </div>
</div>
</body>