<?php session_start(); ?>
<?php
//include("essentials/script.php");
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
        <title>Home</title>
        <link href="forum.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            @media only screen and (max-width:480px ) {
        body{
        margin:0;
        height: 100%;
        
        padding-right: 10%;
        padding-left: 10%;
        overflow-y: scroll;
        background-color:#f3f7f7 ;
        }
        body::-webkit-scrollbar {
        display: none;
        }
        #top_button_index {
        font-family:bold;
        display: none;
        align-content: center;
        box-shadow: 0 0 5px gray;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color:  #4CAF50;
        color: white;
        cursor: pointer;
        padding: 15px;
        font-family:courier new;
        border-radius: 50%;
        }
        #top_button_index:hover {
        background-color:  #833AB4;}
                
            }
    @media only screen and (min-width:481px) {
                
            
        body{
        overflow-y: scroll;
        background-color:#f3f7f7 ;
        padding-left: 80px;
        padding-right: 80px;
        }
        body::-webkit-scrollbar {
        display: none;
        }
        .collapsible {
        background-color: white;
        cursor: pointer;
        width: 100%;
        padding: 50px;
        border: none;
        border-radius: 4px;
        text-align: left;
        font-size: 15px;
        }
        .active, .collapsible:hover {
        background-color: #e6ffff;
        font-size: 110%;
        color: red;
        }
        .content {
        padding: 0 18px;
        display: none;
        overflow: auto;
        background-color:;
        }
        
        #line{
        border: 1px solid red;
        border-radius: 2px;
        }
        #answer_button {
        position:relative;
        left: 40%;
        background-color:#833AB4;
        color: white;
        padding-bottom: 3px;
        padding: 11px;
        font-size: 11px;
        border: none;
        font-weight: bold;
        cursor: pointer;
        font-weight: light;
        font-family:'Trebuchet MS', sans-serif;
        border-radius: 5%;
        }
        #answer_button:hover, #answer_button:focus {
        background-color: #DB4437;
        }
        #title{
        line-height: 1.5;
        color: #333;
        tab-size: 4;
        word-break: break-word;
        text-align: left;
        direction: ltr;
        user-select: text;
        font-size: 25px;
        font-family: Courier new ;
        }
        #anstitle{
        line-height: 1.5;
        color: black;
        tab-size: 4;
        word-break: break-word;
        text-align: left;
        direction: ltr;
        user-select: text;
        font-size: 15px;
        font-family: Courier new ;
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
        #answer_box{
        padding:10px;
        padding-bottom: 20px;
        background-color: white;
        width: 97%;
        height: auto;
        }
        #answer_box:hover {
        background-color: white;
        }
        #top_button_index {
        font-family:bold;
        display: none;
        align-content: center;
        box-shadow: 0 0 5px gray;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color:  #4CAF50;
        color: white;
        cursor: pointer;
        padding: 15px;
        font-family:courier new;
        border-radius: 50%;
        }
        #top_button_index:hover {
        background-color:  #833AB4;}
}
        </style>
    </head>
    <body >
        <?php
        $sql = "SELECT id,content,level,tym,branch,username,datetym FROM questions ORDER BY datetym DESC";
        $result = $con->query($sql);
        if ($result->num_rows > 0)
        while($row = $result->fetch_assoc()) :?>
        <form method="post" action="addans.php">
        <button type="submit" class="collapsible">
        <span id="title"><?php echo $row["content"]; ?></span>
 <span id="specs">Asked by </span><span id="details"><?php echo $row["username"]; ?></span> 
        <span id="specs">time alloted is</span> <span id="details"><?php echo $row["tym"]; ?></span> 
        <span id="specs">difficulty level estimated is</span><span id="details"><?php echo $row["level"]; ?></span> 
        <span id="specs">question comes under</span> <span id="details"><?php echo $row["branch"]; ?></span><span id="specs"> branch</span>
        <span id="specs">posted on</span> <span id="details"><?php echo $row["datetym"]; ?></span>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
        </form><br>
        </button><br>
        <br>
        <?php endwhile; ?>
        <br>
            <button onclick="topFunction()" id="top_button_index" title="Go to top">UP</button>
            <script>
            var mybutton = document.getElementById("top_button_index");
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
            } else {
            mybutton.style.display = "none";
            }
            }
            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }

            </script>
            <br><br>
        </body>
    </html>
   