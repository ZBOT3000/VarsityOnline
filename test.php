<?php
session_start();
$ID = 13;//(int)$_SESSION['user_id'];
require "conn.php";
$mysql_qry = "select * FROM courses WHERE user_id LIKE $ID ";
$result = mysqli_query($conn,$mysql_qry);
$output_array = array();
if ($result)
{
  while($row = mysqli_fetch_array($result))
  {
    //$rows[] = $row;
    array_push($output_array, $row);
  }

  echo json_encode($output_array);
  echo $output_array[0][2];

}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body onload="somefunc()">

     <p id ="0"></p>
     <p id="1"></p>
     <script>
           function somefunc() {
             var formData = new FormData();
             var httpReq = new XMLHttpRequest();
             httpReq.open("POST", "test.php", false);
             httpReq.onload = function() {
           //alert(this.responseText);
           response = JSON.parse(this.responseText);

             var a = document.getElementById("0");
             var b = document.getElementById("1");
             a.innerHTML = response["CID"] ;
             b.innerHTML = response[0][3];


             };
             // httpReq.send(formData);

           }</script>
   </body>
 </html>
