<?php
require "conn.php";
session_start();
$id = $_POST["id_number"];
$cell=$_POST["cell_number"];

$gender = $_POST["gender"];
$dob = $_POST["DOB"];
$race = $_POST["race"];
$citizen = $_POST["citizen"];
$ID=(int)$_SESSION['user_id'];

if(!empty($id)||!empty($cell)||!empty($gender)||!empty($dob)||!empty($race)||!empty($citizen)){


$mysql_qry="insert into demographics (USER_ID, ID_NUMBER, CELLPHONE, GENDER, DOB, CITIZEN)
VALUES ('$ID', '29', '$cell', '$gender', '$dob', '$citizen');";
$result = mysqli_query($conn,$mysql_qry);
echo "yaaaaaaaaas";
}else{

	echo "All fields are required";
	die();

}





 ?>
