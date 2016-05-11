<?php
mysql_connect("localhost","root","");
mysql_select_db("dbtest");
if($_POST)
{
$rn = $_POST['rn'];
if($_POST['rn'] )
{
$sql=mysql("delete from addmarks where rollno='$rn'");
$message = "Successfully deleted";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

else
{

echo "wrong";
}

}
?>
