<?php
session_start();

require 'conn.php';
$aps = $_SESSION["APS"];
$sql = "SELECT COURSE, APS FROM WITS";
$result = $conn->query($sql);

$APSArray = []; 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = array($result->fetch_assoc()) {
        array_push($APSArray ,$row["COURSE1"],$row["APS1"]);  
    }
} else {
    echo "0 results";
}

$conn->close();
?>