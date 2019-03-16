<?php
require "conn.php"

$name = $_POST["name"];
$surname=$Post["surname"];

$email = $_POST["email"];

$password = $_POST["password1"];


$mysql_qry="insert into register(name,surname,email,password) values('$name','$surname','$email','$password')";



 ?>
