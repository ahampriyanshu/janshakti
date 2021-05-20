<?php  session_start(); ?>
<?php include("header.php");
      include("essentials/database.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Question</title>
<link href="forum.css" rel="stylesheet" type="text/css">
<style>
.abt_index {
    background: #fff;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    padding-top: 25px;
    width: 850px;
    height: 500px;
    position: absolute;
    overflow: hidden;
    top: 9%;
    background-repeat: no-repeat;
    background-size: contain;
    }

    .tech_used:hover{
    transform: scale(1.2);
    }
    #bulb_index:hover{
    transform: scale(1.01);
    }

</style>
</head>
<body background="img/back.jpg">
  <div class="abt_index" id ="abt_visibility" style="position: absolute; top:15%;left:18%; ">
  <center><img src="img/logo.png" alt="logo" width="400px" height="400px;" /></center>
      <img class=' tech_used ' src='img/php.png' style="position:absolute; left:13%; bottom:3%; title="php" width="75px" height="60px" border="" />
      <img class=" tech_used" src="img/css.png"  style="position:absolute; left:32% ; bottom:3%; " title="CSS3" width="50px" height="60px" border="" />
      <img class=" tech_used" src="img/mysql.png"  style="position:absolute; left:47% ; bottom:3%; " title="mysql" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/html.png"  style="position:absolute; left:62% ; bottom:3%; " title="HTML5" width="60px" height="60px" border="" />
      <img class=" tech_used" src="img/js.png"  style="position:absolute; left:77% ; bottom:3%; " title="JS" width="60px" height="60px" border="" />
    </div>
</body>
</html>