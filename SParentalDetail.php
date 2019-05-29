<?php
require "conn.php";
session_start();

$guard = $_POST["Guardian"];
$surname  = $_POST["surname"];
$name = $_POST["name"];
$Address  = $_POST["address"];
$address2 = $_POST["address2"];
$inputCity  = $_POST["inputCity"];
$inputState  = $_POST["inputState"];
$inputZip = (int)$_POST["inputZip"];
$ID=(int)$_SESSION['user_id'];

$mysql_qry="insert into parentaldetails (Guardian, Gname, Gsurname, Address, Address2, City, State, Zip, User_ID) values ('$guard', '$name', '$surname', '$Address', '$address2', '$inputCity', '$inputState', '$inputZip', '$ID');";

$result = mysqli_query($conn,$mysql_qry);

if  ($result)
{
   echo "YOU HAVE SUCCESSFULY CAPTURED YOUR PARENTAL DETAILS <br>";
   echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";
}else
{
    echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
    echo "<p><a href='ParentalDetail.php'>CLICK HERE TO GO BACK</a></p>";
}
 ?>
