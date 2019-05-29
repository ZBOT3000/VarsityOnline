<?php
session_start();
$a = $_SESSION['finish'];

if ($a == 1)
{
  echo "PLEASE GO BACK AND COMPLETE THE APPLICATION COMPLETELY";
  echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";
  $_SESSION['finish']=1;
} else if($a >1) {


echo "Congrats you have finished the entire application process";

echo "<p><a href='Dashboard.php'>CLICK HERE TO GO BACK</a></p>";

echo "<p><a href='LogOut.php'>CLICK HERE TO CLOSE  AND END THE APPLICATION</a></p>";

$_SESSION['finish']=10;
}
?>
