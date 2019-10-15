<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
    color: darkblue;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
}
body {
	margin: 20;
	padding :0;
	background-image:
  radial-gradient(white,silver);
}

th {text-align: left;}
</style>
</head>
<body>



<?php
session_start();
require 'conn.php';

$int1 = $_POST["int1"];
$int2 = $_POST["int2"];
$int3 = $_POST["int3"];

$qry1 = "select * from wits where INTEREST = '$int1' or INTEREST = '$int2' or INTEREST = '$int3'";
$qry2 = "select * from up where INTEREST = '$int1' or INTEREST = '$int2' or INTEREST = '$int3'";
$qry3 = "select * from uj where INTEREST = '$int1' or INTEREST = '$int2' or INTEREST = '$int3'";
$qry4 = "select * from uct where INTEREST = '$int1' or INTEREST = '$int2' or INTEREST = '$int3'";


$result1 = mysqli_query($conn,$qry1);
$result2 = mysqli_query($conn,$qry2);
$result3 = mysqli_query($conn,$qry3);
$result4 = mysqli_query($conn,$qry4);

      // Wits Section
      echo "
      <h1>WITS UNIVERSITY COURSES BASED ON YOUR INTERESTS</h1>
      <table>
      <tr>
      <th>FUCULTY</th>
      <th>COURSE</th>
      <th>APS</th>
      </tr>";

      if (!$result1) {

      }
      else if ( mysqli_num_rows( $result1 ) > 0 )
      {
        while($row1 = mysqli_fetch_array($result1))
        {
            echo "<tr>";
            echo "<td>" . $row1['FACULTY'] . "</td>";
            echo "<td>" . $row1['COURSE'] . "</td>";
            echo "<td>" . $row1['APS'] . "</td>";
            echo "</tr>";
        }
      }
      echo "</table>";
      // UP Section
      echo "
      <h1>UNIVERSITY OF PRETORIA COURSES BASED ON YOUR INTERESTS</h1>
      <table>
      <tr>
      <th>FUCULTY</th>
      <th>COURSE</th>
      <th>APS</th>
      </tr>";
      if (!$result2) {

      }
      else if ( mysqli_num_rows( $result2 ) > 0 )
      {
        while($row1 = mysqli_fetch_array($result2))
        {
            echo "<tr>";
            echo "<td>" . $row1['FACULTY'] . "</td>";
            echo "<td>" . $row1['COURSE'] . "</td>";
            echo "<td>" . $row1['APS'] . "</td>";
            echo "</tr>";
        }
      }

      echo "</table>";
      echo "";


      //Uj Section
      echo "
      <h1>UNIVERSITY OF JOHANESSBURG COURSES BASED ON YOUR INTERESTS</h1>
      <table>
      <tr>
      <th>FUCULTY</th>
      <th>COURSE</th>
      <th>APS</th>
      </tr>";
      // uj section
      if (!$result3) {

      }
      else if ( mysqli_num_rows( $result3 ) > 0 )
      {
        while($row1 = mysqli_fetch_array($result3))
        {
            echo "<tr>";
            echo "<td>" . $row1['FACULTY'] . "</td>";
            echo "<td>" . $row1['COURSE'] . "</td>";
            echo "<td>" . $row1['APS'] . "</td>";
            echo "</tr>";
        }
      }
      echo "</table>";


      //Uct Section
      echo "
      <h1>UNIVERSITY OF CAPE TOWN COURSES BASED ON YOUR INTERESTS</h1>
      <table>
      <tr>
      <th>FUCULTY</th>
      <th>COURSE</th>
      <th>APS</th>
      </tr>";
      if (!$result4) {

      }
      else if ( mysqli_num_rows( $result4 ) > 0 )
      {
        while($row1 = mysqli_fetch_array($result4))
        {
            echo "<tr>";
            echo "<td>" . $row1['FACULTY'] . "</td>";
            echo "<td>" . $row1['COURSE'] . "</td>";
            echo "<td>" . $row1['APS'] . "</td>";
            echo "</tr>";
        }
      }
      echo "</table>";


      echo "<button>" . "<a href='../PHP/dashboard.php'>"."Back To Dashboard "."</a>" . "</button>";
      mysqli_close($conn);

?>
</body>
</html>
