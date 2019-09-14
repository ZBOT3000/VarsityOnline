<?php
session_start();
require "conn.php";
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body onload="somefunc()">
   </div>
     <div class="table-responsive table-responsive-data2">
       <table class="table table-data2">
         <thead>
             <tr>
                 <th>Choice</th>
                 <th>Course</th>
                 <th>Status</th>
             </tr>
         </thead>
         <tbody>
           <tr class="spacer"></tr>
           <tr class="tr-shadow">
               <td>1st</td>
               <td id ="1choice"><?php require 'conn.php';
               $mysql_qry = "select COURSE1 FROM wits_application WHERE USER_ID = 13; ";
               $result2 = mysqli_query($conn,$mysql_qry);
               $row = $result2->fetch_assoc();
               $un = implode(" ",$row);
               echo $un?></td>
               <td>pending</td>
           </tr>
           <tr class="tr-shadow">
               <td>2nd</td>
               <td id="2choice"></td>
               <td>Pending</td>
           </tr>
           <tr class="tr-shadow">
               <td>3rd</td>
               <td id="3choice"></td>
               <td>Pending</td>
           </tr>
         </tbody>
       </table>
     </div>
   </div>
   </body>
 </html>
