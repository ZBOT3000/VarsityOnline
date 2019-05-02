<?php
require "conn.php";
session_start();
$name = $_POST["name"];
$surname=$_POST["surname"];

$email = $_POST["email1"];

$password = $_POST["password1"];

$mysql_qry="insert into REGISTER(email,username,password,name,surname) values('$email','a','$password','$name','$surname');";
$result = mysqli_query($conn,$mysql_qry);

$qry = "select USER_ID from REGISTER where name like '$name' and surname like '$surname' and   password like '$password';";
$result2 = mysqli_query($conn,$qry);
$row = $result2->fetch_assoc();
$un = implode(" ",$row).$name;


$qr2 = "update REGISTER SET username ='$un' where name like '$name' and surname like '$surname' and   password like '$password';";
$result3 = mysqli_query($conn,$qr2);
if  ($result)
{
	$_SESSION['username']=$un;
	$str = $_SESSION['username'];
  $str = preg_replace('/\D/', '', $str);
  $_SESSION['user_id']=$str;
	header("Location: http://vor.lbmsolutions.co.za/Demographics.html");

else
{
	header("Location: http://vor.lbmsolutions.co.za/register.html");
}
 ?>
