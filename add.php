<?php
mysql_connect("localhost","root","");
mysql_select_db("dbtest");
if($_POST)
{
$rn = $_POST['rn'];
$sn = $_POST['sn'];
$hindi = $_POST['hindi'];
$english = $_POST['english'];
$science = $_POST['science'];
$social = $_POST['social'];
$maths = $_POST['maths'];
$total = $_POST['calculatetotal'];
if($_POST['rn'] && $_POST['sn'] && $_POST['hindi'] && $_POST['english'] && $_POST['science'] && $_POST['social'] && $_POST['maths'] )
{
$sql=mysql_query("insert into addmarks values('$rn','$sn','$hindi','$english','$science','$social','$maths','$total')");
$message = "Successfully Added";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

else
{

echo "wrong";
}

}
?>
