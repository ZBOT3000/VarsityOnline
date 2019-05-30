<?php
session_start();
require 'conn.php';
$a = $_SESSION['finish'];

$id = $_SESSION['user_id'];
if ($a <3)
{
  echo "PLEASE GO BACK AND COMPLETE THE APPLICATION COMPLETELY";
  echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";
} else if($a ==3)
{

$mysql_qry="insert into submittions (USER_ID, DATE, VALUE) VALUES ('$id', '2019-05-08', '$a');";
$result = mysqli_query($conn,$mysql_qry);

  if ( $result )
  {
    echo "Congrats you have finished the entire application process";

    echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";

    echo "<p><a href='LogOut.php'>CLICK HERE TO CLOSE  AND END THE APPLICATION</a></p>";
  } else
  {
    echo "Something has gone wrong please retry or email support";
    echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";
  }
}
?>
