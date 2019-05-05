<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT COURSE1, APS1, FROM TABLE";
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