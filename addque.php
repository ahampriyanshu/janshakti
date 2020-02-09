<?php  session_start(); ?>
<?php
if(!isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <link href="forum.css" rel="stylesheet" type="text/css">
    <style>
    @media only screen and (max-width:480px ) {
    html, body{
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
    .question_text{
    position: relative;
    width: 100%;
    font-size: 15px;
    line-height: 1.4;
    min-height: 20px;
    margin-bottom: 8px;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
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
    font-weight: bolder;
    font-size: 15px;
    background-color:#833AB4;
    padding: 7px;
    
    }
    .title{
    font-size: 20px;
    letter-spacing: 1px;
    font-family: courier;
    color: #333;
    }
    #submit {
    background-color:#4CAF50;
    color: white;
    font-weight: bold;
    padding: 11px;
    font-size: 11px;
    border: none;
    cursor: pointer;
    font-weight: light;
    font-family:'Trebuchet MS', sans-serif;
    border-radius: 5%;
    }
    #questionbox{
    position: relative;
    padding-left: 10px;
    width: 80%;
    }
    .login_text {
    width: 90%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    margin-bottom: 8px;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    }
    #submit:hover, #submit:focus {
    background-color: #833AB4;
    }
    }
    @media only screen and (min-width:481px ) {
    html, body {
    background-color: #f3f7f7;
    overflow-x: hidden;
    padding-left: 100px;
    }
    .question_text{
    position: relative;
    width: 50%;
    font-size: 15px;
    line-height: 1.4;
    min-height: 30px;
    margin-bottom: 8px;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
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
    font-weight: bolder;
    font-size: 15px;
    background-color:#833AB4;
    padding: 7px;
    
    }
    .title{
    font-size: 40px;
    letter-spacing: 1px;
    font-family: courier;
    color: #333;
    }
    #submit {
    background-color:#4CAF50;
    color: white;
    font-weight: bold;
    padding: 11px;
    font-size: 11px;
    border: none;
    cursor: pointer;
    font-weight: light;
    font-family:'Trebuchet MS', sans-serif;
    border-radius: 5%;
    }
    #questionbox{
    position: relative;
    padding-left: 10px;
    width: 80%;
    }
    .login_text {
    width: 50%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    margin-bottom: 8px;
    border: 1px solid #e2e2e2;
    box-shadow: 0 0 5px #888;
    border-radius: 4px;
    }
    #submit:hover, #submit:focus {
    background-color: #833AB4;
    }
    }
    </style>
  </head>
  <body><br>
    <div id="questionbox" >
      <form name="addform" action="postque.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="image" ><br><br>
        <input class="login_text" type="text"  placeholder="Title" name="title"  required/><br><br>
        <input class="login_text" type="text"  placeholder="Officer Name" name="officer"  required /><br><br>
        <div class="select">
          <label>department</label>
          <select name="department" class="option">
            <option value="Adminstration">Adminstration</option>
            <option value="Railways">Railways</option>
            <option value="Police">Police</option>
            <option value="Municipality">Municipality</option>
            <option value="Education">Education</option>
            <option value="Healthcare">Healthcare</option>
          </select>
          <label>locality</label>
          <select name="locality" class="option">
            <option value="Ghaziabad">Ghaziabad</option>
            <option value="Sahibabad">Sahibabad</option>
            <option value="Noida">Noida</option>
            <option value="Greater Noida">Greater Noida</option>
            <option value="Dadri">Dadri</option>
          </select>
        </div><br>
        <textarea name="content" class="question_text" cols="80" rows="10" placeholder="Enter Question" required></textarea>
        <br><br>
        <input type="submit" id="submit" name="insert" value="File Your Complaint">
      </form></div>
      <script>
      $(document).ready(function(){
      $('#insert').click(function(){
      var image_name = $('#image').val();
      if(image_name == '')
      {
      alert("Please Select Image");
      return false;
      }
      else
      {
      var extension = $('#image').val().split('.').pop().toLowerCase();
      if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
      {
      alert('Invalid Image File');
      $('#image').val('');
      return false;
      }
      }
      });
      });
      </script>
    </body>
  </html>