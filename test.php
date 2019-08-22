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

 <h2>
 <div class="header__navbar">

   <!-- individual users -->
     <ul class="list-unstyled">
         <li class="has-sub">
             <a href="#">
                 <i class="fas fa-copy"></i>
                 <span class="bot-line"></span>Personal Details</a>
             <ul class="header3-sub-list list-unstyled">
                 <li>
                     <a href="Demographics.php">Demographics</a>
                 </li>
                 <li>
                     <a href="ParentalDetail.php">Parental Details</a>
                 </li>
             </ul>
         </li>

         <!-- Academics Section -->
         <li class="has-sub">
           <a href="#">
             <i class="fas fa-copy"></i>
             <span class="header3-sub-list list-unstyled"></span>High School Info</a>
             <ul class ="header3-sub-list list-unstyled">
               <li>
                   <a href="Academics.php">Academics</a>
               </li>
               <li>
                   <a href="school.html">Faculty</a>
               </li>
               <li>
                 <a href="test.php">test</a>
               </li>
             </ul>
         </li>
         <!-- WISH LIST-->
         <li class="has-sub">
           <a href="#">
             <i class="fas fa-copy"></i>
             <span class="header3-sub-list list-unstyled"></span>WishList</a>
             <ul class ="header3-sub-list list-unstyled">
               <li>
                   <a href="wishlist.html">Add To WishList</a>
               </li>
               <li>
                   <a href="wishliststatus.html">Show WishList</a>
               </li>

             </ul>
         </li>

         <!--Upload Documents -->

         <li class="has-sub">
           <a href="uploadDoc.html">
             <i class="fas fa-copy"></i>
             <span class="header3-sub-list list-unstyled"></span>Upload Documents</a>
         </li>

         <!-- submit Sessions -->
         <li class="has-sub">
           <a href="submitPage.php">
             <i class="fas fa-copy"></i>
             <span class="header3-sub-list list-unstyled"></span>Submit</a>
         </li>

         <li class="has-sub">
           <a href="LogOut.php">
             <i class="fas fa-copy"></i>
             <span class="header3-sub-list list-unstyled"></span>Log out</a>
         </li>
     </ul>
 </div>
</h2>
