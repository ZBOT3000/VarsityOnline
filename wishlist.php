<?php
session_start();
require "conn.php";
$Course = $_POST["Course"];
$id = (int)$_SESSION['user_id'];
$mysql_ins="insert into wishlist values('$id','$Course');";
$input=mysqli_query($conn,$mysql_ins);
header("Location:Dashboard.php")


#echo "something in php";
 ?>
