<?php
require 'conn.php';
$username = $_POST["logUsername"];
$password = $_POST["logPassword"];
$mysql_qry="select * from REGISTER where username like '$username' and password like '$password' ;";

$result = mysqli_query($conn,$mysql_qry);

if ( mysqli_num_rows( $result ) > 0 )
{
	echo "Login Successful !!! WELCOME USER";
	header("Location: http://localhost/sd/demographics.html");
}
else
{
	echo "Login unsuccessful";
	header("Location: http://localhost/sd/login.html");
}

 ?>
