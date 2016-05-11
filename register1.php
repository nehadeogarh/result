<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: student.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup1']))
{
 $uname = mysql_real_escape_string($_POST['uname1']);
 $email = mysql_real_escape_string($_POST['email1']);
 $upass = md5(mysql_real_escape_string($_POST['pass1']));
 
 if(mysql_query("INSERT INTO student(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post" style="border:2px solid black;width:270px">
<table align="center" style="height:200px;">
<tr><td style="background-color:#399fb5;color:white;padding-left:60px;width:250px">ADMIN REGISTRATION</td></tr>
<tr>
<td style="color:#399fb5;font-weight:bold;">Username : <input type="text" name="uname1"  required /></td>
</tr>
<tr>
<td style="color:#399fb5;font-weight:bold;">Email : <input type="text" name="email1" value=" " placeholder="Your Email" required style="margin-left:25px" /></td>
</tr>
<tr>
<td style="color:#399fb5;font-weight:bold;">Password : <input type="password" name="pass1" value="" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup1" style="margin:10px 0px 10px 80px;color:#399fb5;font-weight:bold">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="signinstudent.php" style="margin:10px 0px 10px 80px;color:#399fb5;font-weight:bold">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
