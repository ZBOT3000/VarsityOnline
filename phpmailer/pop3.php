<?php

session_start();
require 'conn.php';
$username = $_POST["logUsername"];
$password = $_POST["logPassword"];
$mysql_qry="select * from register where username like '$username' and password like '$password' ;";
$result = mysqli_query($conn,$mysql_qry);
if ( mysqli_num_rows( $result ) > 0 )
{
	$_SESSION['username']=$username;
	$str = $_SESSION['username'];
	$str = preg_replace('/\D/', '', $str);
	$_SESSION['user_id']=$str;
	header("Location: Dashboard.php");
}
else
{
	header("Location: login.php");
}

 ?>
