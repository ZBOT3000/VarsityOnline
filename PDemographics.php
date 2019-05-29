<?php
require "conn.php";
session_start();
$id_number = $_POST["id_number"];
$cell=$_POST["cell_number"];

$gender = $_POST["gender"];
$dob = $_POST["DOB"];
$race = $_POST["race"];
$citizen = $_POST["citizen"];
$ID=(int)$_SESSION['user_id'];

if(!empty($id)||!empty($cell)||!empty($gender)||!empty($dob)||!empty($race)||!empty($citizen))
{


$mysql_qry="insert into demographics (USER_ID, ID_NUMBER, CELLPHONE, GENDER, DOB, CITIZEN, RACE, STATUS)
VALUES ('$ID','$id_number', '$cell', '$gender', '$dob', '$race', '$citizen');";
$result = mysqli_query($conn,$mysql_qry);
header("Location: Dashboard.php");
}
else
{

header("Location: Demographics.php");
}





 ?>
