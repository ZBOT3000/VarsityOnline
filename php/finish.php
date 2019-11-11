<?php
session_start();
require 'conn.php';

$id = $_SESSION['user_id'];

$mysql_qry1 = "select STATUS from demographics where user_id like '$id' ;";
$result1 = mysqli_query($conn,$mysql_qry1);

$mysql_qry2 = "select STATUS from parentaldetails where user_id like '$id' ;";
$result2 = mysqli_query($conn,$mysql_qry2);

$mysql_qry3 = "select STATUS from current_academics where user_id like '$id' ;";
$result3 = mysqli_query($conn,$mysql_qry3);

$mysql_qry4 = "select * from uct_application where user_id like '$id' ;";
$result4 = mysqli_query($conn,$mysql_qry4);

$mysql_qry5 = "select * from uj_application where user_id like '$id' ;";
$result5 = mysqli_query($conn,$mysql_qry5);

$mysql_qry6 = "select * from wits_application where user_id like '$id' ;";
$result6 = mysqli_query($conn,$mysql_qry6);

$mysql_qry7 = "select * from up_application where user_id like '$id' ;";
$result7 = mysqli_query($conn,$mysql_qry7);

$application = 0;

if ( mysqli_num_rows( $result7 ) > 0 || mysqli_num_rows( $result6 ) > 0 || mysqli_num_rows( $result5 ) > 0 || mysqli_num_rows( $result4 ) > 0 )
{
$application = 1;
}


$name="";

$row = $result1->fetch_assoc();
$demo = implode(" ",$row).$name;

$row = $result2->fetch_assoc();
$pardet = implode(" ",$row).$name;

$row = $result3->fetch_assoc();
$ca = implode(" ",$row).$name;



 if($demo == 'Completed' && $pardet == 'Completed' && $ca == 'Completed' && $application == 1)
{

$mysql_qry="insert into submittions (USER_ID, DATE, VALUE) VALUES ('$id', '2019-05-08', 3);";
$result = mysqli_query($conn,$mysql_qry);

  if ( $result )
  {
    echo "Congrats you have finished the entire application process";

    echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";

    echo "<p><a href='LogOut.php'>CLICK HERE TO CLOSE  AND END THE APPLICATION</a></p>";
  } else
  {
    echo "Something has gone wrong please retry or email support";
    echo "<p><a href='dashboard.php'>CLICK HERE TO GO BACK</a></p>";
  }
}
else {
  echo "Something has gone wrong please retry , ALL Sections must be completed and atleast one university application completed";
  echo "<p><a href='dashboard.php'>CLICK HERE TO GO BACK</a></p>";
}
?>
