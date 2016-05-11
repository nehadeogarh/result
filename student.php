<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: main.html");
}
$res=mysql_query("SELECT * FROM student WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!doctype html>

<html lang = "en">
   <head>
    <meta charset = "utf-8">
      <title>MY BLOG</title>
      <link href = "http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css
         " rel = "stylesheet">
      <script src = "http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow12.js"></script>
<style>
#top
{
height:100px;
width:1367px;
 background: radial-gradient(gray,black);
 margin:-20px 0px 0px -8px
}
#top h1{
padding:25px 0px 0px 320px;
color:#399fb5;
font-weight:bold
}
#message
{
color:#399fb5;
font-weight:bold;
font-size:1.8em;
margin:30px 0px 0px 400px;
}
#add
{
margin:40px 0px 0px 480px;
}
#add ul li
{
padding:10px 0px 0px 0px;

}
#add ul li a
{
font-size:1.6em;
text-decoration:none;
}
#content
{
margin:20px 0px 0px 500px;
font-size:1.6em;
font-weight:bold
}
</style>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body background="paperBg.jpg">
    
<div id="top">
<h1>STUDENT RESULT MANAGEMENT SYSTEM</h1>
</div>
<div id="content">
         WELCOME &nbsp<?php echo $userRow['username']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="logout.php?logout" STYLE="font-size:0.8em;padding-left:300px">Sign Out</a>
        </div>
 
<div id="message">WELCOME TO STUDENT PANEL</div>
<div id="add">
<ul>
<li><a href="view1.html">VIEW MARKS</a></li>
</ul>
</div>
</body>
</html>