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

$q = intval($_GET['q']);


require 'conn.php';
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db($conn,"d1434995");

if($q == "1"){

  $sql="SELECT * FROM wits WHERE APS <= '".$_SESSION["WITS-APS"]."'";

}

if($q == "2"){

  $sql="SELECT * FROM UP WHERE APS <= '".$_SESSION["UP-APS"]."'";

}

if($q == "3"){

  $sql="SELECT * FROM UJ WHERE APS <= '".$_SESSION["UJ-APS"]."'";

}

$result = mysqli_query($conn,$sql);



      echo "<table>
      <tr>
      <th>FUCULTY</th>
      <th>COURSE</th>
      <th>APS</th>
      </tr>";
      while($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['FACULTY'] . "</td>";
          echo "<td>" . $row['COURSE'] . "</td>";
          echo "<td>" . $row['APS'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";
      mysqli_close($conn);















/*$con=mysqli_connect("localhost","root","password","dtest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM varsity";

if ($result=mysqli_query($con,$sql))
{
// Get field information for all fields
while ($fieldinfo=mysqli_fetch_field($result))
  {
  printf("Name: %s\n",$fieldinfo->name);
  printf("Table: %s\n",$fieldinfo->table);
  printf("max. Len: %d\n",$fieldinfo->max_length);
  }
// Free result set
mysqli_free_result($result);
}

mysqli_close($con);







*/
?>
</body>
</html>
