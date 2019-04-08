<?php
require "conn.php";

$id = $_POST["id_number"];
$cell=$_POST["cell_number"];

$gender = $_POST["gender"];
$dob = $_POST["DOB"];
$race = $_POST["race"];
$citizen = $_POST["citizen"];

if(!empty($id)||!empty($cell)||!empty($gender)||!empty($dob)||!empty($race)||!empty($citizen)){
$mysql_qry="insert into DEMOGRAPHICS(,cell,gender,dob,race,citizen) values('$id','$cell','$gender','$dob','$race','$citizen');";
$result = mysqli_query($conn,$mysql_qry);
}else{

	echo "All fields are required";
	die();

}





 ?>
