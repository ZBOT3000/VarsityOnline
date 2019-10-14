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
}

th {text-align: left;}
</style>
</head>
<body>



<?php
session_start();
require 'conn.php';


$qry1 = "select * from wits where INTEREST = 'Chemistry' or INTEREST = 'Mathematics' or INTEREST = 'Technology'";
$qry1 = "select * from uj where INTEREST = 'Chemistry' or INTEREST = 'Mathematics' or INTEREST = 'Technology'";
$qry1 = "select * from up where INTEREST = 'Chemistry' or INTEREST = 'Mathematics' or INTEREST = 'Technology'";


$result1 = mysqli_query($conn,$qry1);

      echo "
      <h1>WITS UNIVERSITY COURSES BASED ON YOUR INTERESTS</h1>
      <table>
      <tr>
      <th>FUCULTY</th>
      <th>COURSE</th>
      <th>APS</th>
      </tr>";
      while($row = mysqli_fetch_array($result1)) {
          echo "<tr>";
          echo "<td>" . $row['FACULTY'] . "</td>";
          echo "<td>" . $row['COURSE'] . "</td>";
          echo "<td>" . $row['APS'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";


      mysqli_close($conn);

?>
</body>
</html>
