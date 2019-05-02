<?php
session_start();
require 'conn.php';
$username = $_POST["logUsername"];
$password = $_POST["logPassword"];
$mysql_qry="select * from REGISTER where username like '$username' and password like '$password' ;";

$result = mysqli_query($conn,$mysql_qry);

if ( mysqli_num_rows( $result ) > 0 )
{
	$_SESSION['username']=$username;
	header("Location: http://vor.lbmsolutions.co.za/Demographics.html");
}
else
{

	header("Location: http://vor.lbmsolutions.co.za/login.html");
}

 ?>
