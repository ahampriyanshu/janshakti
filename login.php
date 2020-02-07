<?php   session_start(); ?>
<?php
if(isset($_SESSION['loggedin'])){
header('location:index.php');}
?>
<?php include("essentials/database.php"); 
include("header.php");?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="GNDEC GATE FORUM">
    <meta name="keywords" content="gate,gateforum,gne,gndec,">
    <meta name="author" content="PriyanshuMay,priyanshumay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
  @media only screen and (max-width:480px ) {
    html,body{
    overflow: hidden;
    }
    #signinbox_index {
    background: #fff;
    border-radius: 4px;
    padding-top: 2px;
    padding-right: 5px;
    width: 100%;
    height: 100%;
    position: absolute;
    }
    .submit_index{
background-color:#4CAF50;
color: white;
padding: 11px;
font-size:15px;
border: none;
width: 150px;
cursor: pointer;
font-weight: normal;
font-family:courier new;
border-radius: 5%;
}
.submit_index:hover, .submit_index:focus {
background-color: #833AB4;
}
    .inva{
    font-family: courier new;
    font-weight: bold;
    color:#333;
    }
    .login_text_index {
    width: 100%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    margin-bottom: 8px;
    border:0.1px solid #e2e2e2;
    box-shadow: 0 0 5px;
    border-radius: 4px;
    }
    .login_text_index {
    width: 100%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    border-radius: 4px;
    }
   .logocircle{
    width:100px;
    height:100px;
    }
    .link_index{}
    a{font-family:courier new;
      color: #833AB4;   }
    a:hover {
    color: hotpink;   }
    a:active {
    color: #333;  }
  }
  @media only screen and (min-width:481px) {
    html,body{
    padding: 0px;
    height: 100%;
    width: 100%;
    overflow: hidden;
    background-size:     cover;
    background-repeat:   no-repeat;
    background-position: center;
    }
    #signinbox_index {
    background: #fff;
    border-radius: 4px;
    padding-top: 2px;
    padding-right: 5px;
    width: 380px;
    position: absolute;
    top:5%;right:36%;
    }
    .submit_index{
background-color:#4CAF50;
color: white;
padding: 11px;
font-size:15px;
border: none;
width: 150px;
cursor: pointer;
font-weight: normal;
font-family:courier new;
border-radius: 5%;
}
.submit_index:hover, .submit_index:focus {
background-color: #833AB4;
}
    .inva{
    font-family: courier new;
    font-weight: bold;
    color:#333;
    }
    .login_text_index {
    width: 100%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    margin-bottom: 8px;
    border:0.1px solid #e2e2e2;
    box-shadow: 0 0 5px;
    border-radius: 4px;
    }
    .logocircle{
     width:200px;
    height:200px;
    }
    .login_text_index {
    width: 100%;
    font-size: 15px;
    line-height: 1.4;
    padding-left: 8px;
    padding-right: 8px;
    min-height: 32px;
    border-radius: 4px;
    }
    .link_index{}
    a{font-family:courier new;
      color: #833AB4;   }
    a:hover {
    color: hotpink;   }
    a:active {
    color: #333;  }
  }
    </style>
    <title>Login</title>
    <link href="forum.css" rel="stylesheet" type="text/css">
  </head>
  <body background="img/bacqqqqqqqk.jpg">
    <?php
    extract($_POST);
    if(isset($submit))
    {
    $rs=mysqli_query($con,"select * from userbase where username='$username' and password='$password'");
    if(mysqli_num_rows($rs)<1)
    {
    $found="N";
    }
    else
    {
    $_SESSION["loggedin"] = $username ;
    header('location:index.php');
    }
    }
    echo '';
    ?>
<div id="signinbox_index" style="">
      <br>
      <center><img class="logocircle" src=""  title="logo" /></center>
      <centre><table align="center" = WIDTH="70%" height="400px">
        <form method="post" name="login_form" action="" >
          <tr>
            <td><input class="login_text_index" type="text" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="20" size="25"   name="username" required />
          </td>
        </tr>
        <tr>
          <td><input class="login_text_index" type="password"  placeholder="ENTER PASSWORD" name="password"  required />
        </td>
      </tr>
      <?php
      if(isset($found))
      {
      echo '<span class="inva" style=""><center>Invalid Username or password</center></span>';
      }
      ?>
      <tr>
        <td>
    &emsp;&emsp;&emsp;&nbsp;<input class="submit_index" type="submit" name="submit" Value="Login"/></form>
        </td>
      </tr>
      <tr>
    <td><a class="link_index" onclick="window.location.href = 'forgot.php';" >Forgot Password</a>&emsp;&emsp;&nbsp;
      <a  class="link_index" onclick="window.location.href = 'signup.php';">Sign Up</a>
    </td>
  </tr>
</table></centre>
</div >
</body>
</html>