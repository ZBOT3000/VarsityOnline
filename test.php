<?php
session_start();
require 'conn.php';
$ID=(int)$_SESSION['user_id'];
$mysql_qry="select status from current_academics where USER_ID like $ID;";

$result = mysqli_query($conn,$mysql_qry);

if ( mysqli_num_rows( $result ) > 0 )
{
  $row = $result->fetch_assoc();
  $row = implode(" ",$row)." ";
  echo $row;
  $_SESSION['status'] = $row;
}
else
{
  echo "error";
}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>

    <h1 id="">
      <?php

      if (isset($_SESSION['status']))
        {
          echo $_SESSION['status'];
        }
      ?>
    </h1>

  </body>
</html>
