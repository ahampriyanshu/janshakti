<!DOCTYPE HTML
<html>
  <head>
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
    html,body{
    padding: 0px;
    height: 85%;
    width: 100%;
    overflow: hidden;
    background-size:     cover;               
    background-repeat:   no-repeat;
    background-position: center;
    }
    .signupbox_signup {
    background: #fff;
    border-radius: 4px;
    padding-top: 2px;
    width: 380px;
    position: absolute;
    overflow-y: hidden;
    }
    </style>
    <link href="forum.css" rel="stylesheet" type="text/css">
  </head>
<body background="img/back.jpg">
<div class="signupbox_signup" style="position: absolute; top:5%;right:37%;">
      <center><br><br>
      <img class="img-circle" src="img/logo.png"  width="200px" height="150px" style="position: relative; top:0%;"/>   
      </center>
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
              <td><input class="login_text_box" name="city" type="text" id="city"
              placeholder="Enter your city" required></td>
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