<?php

	require_once("connection.php");
	
	if(isset($_POST['submit'])){
	
	$salt = "jdfhsfuhsfiuh4353453543535";
	$PASSWORD = $_POST['PASSWORD'].$salt;
	$PASSWORD = shal($PASSWORD);
	if(mysqli_query($connection,"INSERT INTO 'USERS'(
		'PASSWORD',
		 ) VALUES (
		 '{$PASSWORD}');")){
//where user will go once correct info is submitted 	
			header("Location:  somthingsomething.php ");
			exit;
		}
	}
?>
	

