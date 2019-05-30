<?php
session_start();
require 'conn.php';
$username = $_POST["logUsername"];
$password = $_POST["logPassword"];
$_SESSION['finish'] = 0;
$mysql_qry="select * from register where username like '$username' and password like '$password' ;";

$result = mysqli_query($conn,$mysql_qry);

if ( mysqli_num_rows( $result ) > 0 )
{
	$_SESSION['username']=$username;
	$str = $_SESSION['username'];
	$str = preg_replace('/\D/', '', $str);
	$_SESSION['user_id']=$str;

	$mysql_qry2="select VALUE from submittions";
	$result2 = mysqli_query($conn,$mysql_qry2);
	if ( mysqli_num_rows( $result2 ) > 0 )
	{
		
	}

	header("Location: Dashboard.php");
}
else
{

	header("Location: login.php");
}

 ?>
