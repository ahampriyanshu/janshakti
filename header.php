<style type="text/css">
@media only screen and (max-width:480px ) {
  .sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 3;
  top: 0;
  left: 0;
  background-color: #4CAF50;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  left: 1%;
  font-size: 36px;
}
.logocircle{
border-radius: 50%;
border: 0;
}
.openbtn {
  font-size: 15px;
  cursor: pointer;
  background-color: #4CAF50;
  color: white;
  padding: 7px 12px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  z-index: 3;
  transition: margin-left .5s;
  padding: 16px;
}

  .top_bar_header_web{
position: fixed;
top: 0;
left: 0;
right: 0;
width: 100%;
z-index: 2;
box-shadow: 0 0 5px #888;
background-color: #fafafb;
height:50px;
box-sizing: border-box;
font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
border-bottom: 1px solid lightgrey;
}
.dropbutton_header {
background-color: #4CAF50;
color: white;
padding: 11px;
font-size: 12px;
font-weight: bolder;
border: none;
cursor: pointer;
font-family:'Trebuchet MS', sans-serif;
border-radius: 5%;
}
.addq{
background-color: #4CAF50;
color: white;
padding: 11px;
font-size: 11px;
border: none;
cursor: pointer;
position: absolute; 
top:15%;
right:2%;
font-family:'Trebuchet MS', sans-serif;
border-radius: 5%;
}
.addq:hover{
background-color: #833AB4;
}
.dropdown_header {
display: none;
}
.dropdown_content_header {
display: none;
}
.dropdown_content_header a {
display: none;
}

}
 @media only screen and (min-width:481px) 
 {
  .sidebar {
    font-family: courier new;
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 3;
  top: 0;
  left: 0;
  background-color: #4CAF50;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color:white;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0.8%;
  left: 1%;
  font-size: 36px;
}

.sidebar .closebtn:hover {
  color: #333;
}
.openbtn {
  font-size: 30px;
  color: #4CAF50;
  cursor: pointer;
  background-color:transparent;
  font-weight: bolder;
  border: none;
}

.openbtn:hover {
  font-size: 32px;
}

#main {
  z-index: 3;
  transition: margin-left .5s;
  padding: 16px;
}

.top_bar_header_web{
position: fixed;
top: 0;
left: 0;
width: 100%;
z-index: 1;
box-shadow: 0 0 5px #888;
background-color: #fafafb;
height: 65px;
box-sizing: border-box;
font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
border-bottom: 1px solid lightgrey;
}
.top_bar_header_mob{
position: fixed;
top: 0;
left: 0;
width: 100%;
z-index: 1;
box-shadow: 0 0 5px #888;
background-color: #fafafb;
height: 53px;
box-sizing: border-box;
font-family: Arial,"Helvetica Neue",Helvetica,sans-serif;
border-bottom: 1px solid lightgrey;
}
.dropbutton_header {
background-color: #4CAF50;
color: white;
padding: 11px;
font-size: 12px;
font-weight: bolder;
border: none;
cursor: pointer;
font-family:'Trebuchet MS', sans-serif;
border-radius: 5%;
}
.addq{
background-color: #4CAF50;
color: white;
padding: 11px;
font-size: 11px;
border: none;
cursor: pointer;
position: absolute; 
top:17%;
right:10%;
font-family:'Trebuchet MS', sans-serif;
border-radius: 5%;
}
.addq:hover{
background-color: #833AB4;
}
.logocircle{
border-radius:50%;
border: 0;
}
.dropdown_header {
position: relative;
display: inline-block;
}
.dropdown_content_header {
display: none;
position: absolute;
background-color: #f1f1f1;
max-width: 100px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown_content_header a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}
.dropdown_content_header a:hover {background-color: #ddd;}
.dropdown_header:hover .dropdown_content_header {display: block;}
.dropdown_header:hover .dropbutton_header {background-color: #833AB4;}
.show {display: block;}
}
</style>
<script type="text/javascript">
function redirect() {
window.location.href = 'login.php';
};
</script>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
  <br>
  <br>
  <br>
  <a href=about.php>About</a><br>
  <a href="viewque.php">My Complaints</a><br>
  <a href="contact.php">Contact</a><br>
</div>

<script>
function openNav() {
  document.getElementById("openbtn").style.display = "none";
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
   document.getElementById("openbtn").style.display = "block";
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<div class="top_bar_header_web">
  <div id="main">
  <button class="openbtn" id="openbtn" onclick="openNav()">☰</button>  
</div>
  <a href="index.php"><img style="position: absolute;top:2%;left:12%;" src="img/slogo.png" class="logocircle" title=" logo" width="65px" height="58px" /></a>
  <?php
  if(!isset($_SESSION['loggedin'])){
  echo "<div style=\"position: absolute; top:17%;right:2%;\" class=\"dropdown_header\">
    <button class=\"dropbutton_header\">&emsp;&nbsp;Login&nbsp;&emsp;</button>
    <div class=\"dropdown_content_header\">
      <a href=\"login.php\">Login</a>
      <a href=\"signup.php\">SignUp</a>
      <a href=\"admin.php\">Admin</a>
    </div>
  </div>";}
  else{
  echo "<div style=\"position: absolute; top:17%;right:2%;\" class=\"dropdown_header\">
    <button class=\"dropbutton_header\">My Account</button>
    <div class=\"dropdown_content_header\">
      <a href=\"dashboard.php\">Dashboard</a>
      <a href=\"signout.php\">LogOut</a>
      
    </div>
  </div>";}
  
  ?>
<?php
  if(isset($_SESSION['loggedin'])){
  echo "<button onclick=\"window.location.href = 'addque.php';\" class=\"addq\"><b>File Complaint</b></button>";}
  ?>
</div>