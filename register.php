<?php
require "conn.php";

$name = $_POST["name"];
$surname=$_POST["surname"];

$email = $_POST["email"];

$password = $_POST["password1"];


$mysql_qry="insert into register(EMAIL,password,name,surname) values('$email','$password','$name','$surname')";
$result = mysqli_query($conn,$mysql_qry);

$qry = "select USER_ID from register where name like '$name' and surname like '$surname' and   password like '$password';";
$result2 = mysqli_query($conn,$qry);
$output=array();
while ($row=$result2->fetch_assoc())
{
  $output[]=$row;

}
if  ($result )
{
	echo json_encode($output);
	//header("Location: http://localhost/sd/demographics.html");
}
else
{
	echo "Login unsuccessful";
	//header("Location: http://localhost/sd/register.html");
}





 ?>
