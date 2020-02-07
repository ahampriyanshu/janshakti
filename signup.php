<? include("header.php");?>
<!DOCTYPE HTML
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="GNDEC GATE FORUM">
    <meta name="keywords" content="gate,gne,gndec,">
    <meta name="author"   content="PriyanshuMay,priyanshumay">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Register</title>
    <script language="javascript">
      function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("msg").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("msg").innerHTML = strength;
                document.getElementById("msg").style.color = color;
            }
    function check()
    {
    if(document.signupform.pass.value!=document.signupform.cpass.value)
    {
    alert("Confirm Password does not matched");
      document.signupform.cpass.focus();
      return false;
    }
    e=document.signupform.email.value;
        f1=e.indexOf('@');
        f2=e.indexOf('@',f1+1);
        e1=e.indexOf('.');
        e2=e.indexOf('.',e1+1);
        n=e.length;
        if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
        {
          alert("Please Enter valid Email");
          document.signupform.email.focus();
          return false;
        }
    return true;
    }
    
    </script>
    <style>
   @media only screen and (max-width:480px ) {
    html,body{
    overflow: hidden;
    }
    #signupbox_signup {
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
    #signupbox_signup {
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
    <link href="forum.css" rel="stylesheet" type="text/css">
  </head>
<body background="img/back.png">
<div class="signupbox_signup">
      <center><table width="70%" border="0" style="padding: 20px;">
        <tr><td>
          <form name="signupform" method="post" action="signupuser.php" onSubmit="return check();">
            <tr>
              <td><input class="login_text_box" type="text" placeholder="Create Username" name="username"  required>
              </td>
            </tr>
            <tr>
              <td><input class="login_text_box" type="password" placeholder="Create Password"  id="pwd"  onkeyup="validatePassword(this.value);" name="pass" required><br><span id="msg"></span></td>
            </tr>
            <tr>
              <td><input class="login_text_box" name="cpass" placeholder="Confirm Password" type="password" id="cpass" required></td>
            </tr>
            <tr>
              <td><input class="login_text_box" type="text" name="name" placeholder="Full name" id="name" required></td>
            </tr>
            <tr>
              <td><input class="login_text_box" name="security" type="text" id="city"
              placeholder="City" required></td>
            </tr>
            <tr>
              <td><input class="login_text_box" name="phone" placeholder="+91" type="text" id="phone" required></td>
            </tr>
            <tr>
              <td><input class="login_text_box" name="email" type="text" placeholder="Enter valid e-mail" id="email" required></td>
            </tr><br>
            <td><br>&emsp;<input class="submit" type="submit" name="Submit" value="Signup">&emsp;</form>
          <button class="submit2" onclick="window.location.href = 'login.php';" >Already a Member</button></td>
        </tr>
      </table>
      </center>
      &emsp;&emsp;
    </div>
  </body>
</html>