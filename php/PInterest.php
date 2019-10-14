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

th {text-align: left;}
</style>
</head>
<body>



<?php
session_start();
require 'conn.php';


$qry1 = "select * from wits where INTEREST = 'Chemistry' or INTEREST = 'Mathematics' or INTEREST = 'Technology'";
$qry2 = "select * from up where INTEREST = 'Chemistry' or INTEREST = 'Mathematics' or INTEREST = 'Technology'";


$result1 = mysqli_query($conn,$qry1);
$result2 = mysqli_query($conn,$qry2);
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

      echo "<button>" . "<a href='../PHP/dashboard.php'>"."Back To Dashboard "."</a>" . "</button>";


      mysqli_close($conn);

?>
</body>
</html>
