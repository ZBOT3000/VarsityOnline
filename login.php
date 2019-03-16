<?php
require 'conn.php';

$username = $_POST["logEmail"];
$password = $_POST["logPassword"];
$mysql_qry="select * from student_data where username like '$user_name' and password like '$user_password' ;";

$result = mysqli_query($conn,$mysql_qry);

if ( mysqli_num_rows( $result ) > 0 )
{
	echo "Login Successful !!! WELCOME USER";
}
else
{
	echo "Login unsuccessful";
}

 ?>
