<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: main.html");
}
$res=mysql_query("SELECT * FROM student WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
mysql_connect("localhost","root","");
mysql_select_db("dbtest");
$rn=$_POST['rn'];
if($_POST)
{
$data=mysql_query("select * from addmarks where rollno='$rn' ");
if(!$data)
{
die("data not selected".mysql_error());
}
else
{
while($rowval=mysql_fetch_array($data))
{
$rn=$rowval['rollno'];
$sn=$rowval['name'];
$hindi=$rowval['hindi'];
$english=$rowval['english'];
$science=$rowval['science'];
$social=$rowval['social'];
$maths=$rowval['maths'];
$calculatetotal=$rowval['total'];
}
}
}
?>

<!doctype html>

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
#form tr td
{
padding:10px 0px 0px 30px;font-weight:bold
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
<div>
<table style="border:2px solid black;height:400px;width:500px;margin:30px 0px 0px 400px">
<tr ><td>Roll No.:<input type="text" value='<?php echo  $rn; ?>' style="margin:10px 0px 0px 60px"></td></tr>
<tr><td>Name:<input type="text" value='<?php echo  $sn; ?>' style="margin:10px 0px 0px 78px"></td></tr>
<tr><td>Hindi:<input type="text"   value='<?php echo  $hindi; ?>' style="margin:10px 0px 0px 78px"></td></tr>
<tr><td>English:<input type="text"  value='<?php echo  $english; ?>' style="margin:10px 0px 0px 68px"></td></tr>
<tr><td>Science:<input type="text" value='<?php echo  $science; ?>' style="margin:10px 0px 0px 68px"></td></tr>
<tr><td>Social Science:<input type="text"   value='<?php echo  $social; ?>' style="margin:10px 0px 0px 25px"></td></tr>
<tr><td>Maths:<input type="text"  value='<?php echo  $maths; ?>' style="margin:10px 0px 0px 78px"></td></tr>
<tr><td><input type="button" value="Total"  style="margin:10px 0px 0px 0px;font-weight:bold"><input type="text" value='<?php echo  $calculatetotal; ?>' style="margin:10px 0px 10px 78px"></td></tr>
</table>
</div>
<div style="margin:20px 0px 0px 600px;color:black;font-weight:bold"><a href="view1.html">BACK</div>
</html>
