<?php
require "conn.php";
$email = $_GET["email"];
$password = $_POST["password1"];
$mysql_qry2="update REGISTER set password = '$password'where email = '$email' ;";
$result2 = mysqli_query($conn,$mysql_qry2);

 ?>
