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
        bottom: 10px;
        right: 10px;
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
// define how many results you want per page
$results_per_page = 5;

// find out the number of results stored in database
$sql='SELECT * FROM questions';
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM questions LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)) :?>
        <form method="post" action="addans.php">
        <button type="submit" class="collapsible"> <span id="title"><?php echo $row["content"]; ?></span>
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

<?php for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
}

?>
       
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
   