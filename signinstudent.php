<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: student.php");
}
if(isset($_POST['btn-login1']))
{
 $email = mysql_real_escape_string($_POST['email1']);
 $upass = mysql_real_escape_string($_POST['pass1']);
 $res=mysql_query("SELECT * FROM student WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: student.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post"  style="border:2px solid black;width:270px">
<table align="center"  style="height:200px;">
<tr><td style="background-color:#399fb5;color:white;padding-left:60px;width:250px">STUDENT LOGIN</td></tr>
<tr>
<td style="color:#399fb5;font-weight:bold;">Email : <input type="text" name="email1" value=" " placeholder="Your Email" required style="margin-left:25px" /></td>
</tr>
<tr>
<td style="color:#399fb5;font-weight:bold;">Password : <input type="password" name="pass1" value="" required /></td>
</tr>
<tr>
<td style="color:#399fb5;font-weight:bold;"><button type="submit" name="btn-login1" style="margin:10px 0px 10px 80px;color:#399fb5;font-weight:bold">Sign In</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>