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

$mysql_qry2="select * from demographics where USER_ID like $ID";
$result2 = mysqli_query($conn,$mysql_qry2);

if ( mysqli_num_rows( $result2 ) > 0 )
{
  $mysql_qry="update parentaldetails set Guardian='$guard',Gname='$name',Gsurname='$surname',Address='$Address',Address2='$address2',
  City='$inputCity',State='$inputState',Zip='$inputZip' WHERE User_ID =$ID";

  $result = mysqli_query($conn,$mysql_qry);

  if  ($result)
  {
     echo "YOU HAVE SUCCESSFULY UPDATED YOUR PARENTAL DETAILS <br>";
     echo "<p><a href='dashboard.php'>CLICK HERE TO GO BACK</a></p>";
     $_SESSION['finish']=$_SESSION['finish']+1;
  }else
  {
      echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
      echo "<p><a href='ParentalDetail.php'>CLICK HERE TO GO BACK</a></p>";
  }
}
else {
  $mysql_qry="insert into parentaldetails (Guardian, Gname, Gsurname, Address, Address2, City, State, Zip, User_ID)
  values ('$guard', '$name', '$surname', '$Address', '$address2', '$inputCity', '$inputState', '$inputZip', '$ID');";

  $result = mysqli_query($conn,$mysql_qry);

  if  ($result)
  {
     echo "YOU HAVE SUCCESSFULY CAPTURED YOUR PARENTAL DETAILS <br>";
     echo "<p><a href='dashboard.php'>CLICK HERE TO GO BACK</a></p>";
     $_SESSION['finish']=$_SESSION['finish']+1;
  }else
  {
      echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
      echo "<p><a href='ParentalDetail.php'>CLICK HERE TO GO BACK</a></p>";
  }
}


 ?>
