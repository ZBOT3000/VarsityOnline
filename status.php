<?php
session_start();
#require 'conn.php';
#$userid = $_GET["user_id"];
#$courses = $_GET["courses"];
#$staus = $_GET["status"];
$conn = mysqli_connect('localhost', 's1434995' , 's1434995' , 'd1434995');
$mysql_qry = "select * from COURSES where user_id like '12345' ;";
$result = mysqli_query($conn,$mysql_qry);
$output_array = array();
if ( mysqli_num_rows( $result ) > 0 )
{
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($output_array, $row);
  }
  echo json_encode($output_array);
}
else
{
	echo json_encode("0 results");
}
#echo "something in php";
 ?>
