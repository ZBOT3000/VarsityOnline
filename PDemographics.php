<?php
require "conn.php";
session_start();
$id_number = $_POST["id_number"];
$cell=$_POST["cell_number"];

$gender = $_POST["gender"];
$dob = $_POST["DOB"];
$race = $_POST["race"];
$citizen = $_POST["citizen"];
$ID = (int)$_SESSION['user_id'];


  $mysql_qry="insert into demographics (USER_ID, ID_NUMBER, CELLPHONE, GENDER, DOB, RACE ,CITIZEN)
  VALUES ($ID,'$id_number', '$cell', '$gender', '$dob', '$race', '$citizen');";
  $result = mysqli_query($conn,$mysql_qry);

  if  ($result)
  {
    echo "YOU HAVE SUCCESSFULY CAPTURED YOUR Personal Details <br>";
    echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";
    //echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Dashboard.php'>CLICK HERE TO GO BACK</a></p>";
  }
  else
  {
     echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
     echo "<p><a href='Demographics.php'>CLICK HERE TO GO BACK</a></p>";
     //echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Demographics.php'>CLICK HERE TO GO BACK</a></p>";
  }




 ?>
