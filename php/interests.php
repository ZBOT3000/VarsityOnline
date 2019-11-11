  <?php
session_start();


 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
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
     <meta charset="utf-8">
     <title>Interets Page</title>
   </head>
   <body>
     <div class="container">
       <form class="form" action="PInterest.php" method="post">
         <h1>PLEASE SELECT THINGS YOUR INTERESTED IN</h1>

         <div class="Drop-Down">
           <select name="int1" class="select-box">
       				<option>Select your first Choice</option>
   				    <option value="Technology">Technology</option>
   				    <option value="Acting">Acting</option>
              <option value="Design">Designing</option>
   				    <option value="Problem solving">Problem solving</option>
   				    <option value="Reading">Reading</option>
     				  <option value="Politics">Politics</option>
              <option value="Medical field">Medical field</option>
              <option value="Animals">Animals</option>
              <option value="Tourism">Tourism</option>
              <option value="Mathematics">Mathematics</option>
              <option value="Accounting and Finance and Money">Accounting and Finance and Money</option>
              <option value="Music and Instruments">Music and Instruments</option>
              <option value="Public speaking">Public speaking</option>
              <option value="Mining and Minerals">Mining and Minerals</option>
              <option value="Chemistry">Chemistry</option>
              <option value="Cars and Automotives">Cars and Automotives</option>
              <option value="Space and all things small">Space and all things small</option>
              <option value="Social Work">Social Work</option>

     		   </select>
         </div>

         <div class="Drop-Down">
           <select name="int2" class="select-box">
             <option>Select your second Choice</option>
             <option value="Technology">Technology</option>
             <option value="Acting">Acting</option>
             <option value="Design">Designing</option>
             <option value="Problem solving">Problem solving</option>
             <option value="Reading">Reading</option>
             <option value="Politics">Politics</option>
             <option value="Medical field">Medical field</option>
             <option value="Animals">Animals</option>
             <option value="Tourism">Tourism</option>
             <option value="Mathematics">Mathematics</option>
             <option value="Accounting and Finance and Money">Accounting and Finance and Money</option>
             <option value="Music and Instruments">Music and Instruments</option>
             <option value="Public speaking">Public speaking</option>
             <option value="Mining and Minerals">Mining and Minerals</option>
             <option value="Chemistry">Chemistry</option>
             <option value="Cars and Automotives">Cars and Automotives</option>
             <option value="Space and all things small">Space and all things small</option>
             <option value="Social Work">Social Work</option>

     		   </select>
         </div>

         <div class="Drop-Down">
           <select name="int3" class="select-box">
             <option>Select your third Choice</option>
             <option value="Technology">Technology</option>
             <option value="Acting">Acting</option>
             <option value="Design">Designing</option>
             <option value="Problem solving">Problem solving</option>
             <option value="Reading">Reading</option>
             <option value="Politics">Politics</option>
             <option value="Medical field">Medical field</option>
             <option value="Animals">Animals</option>
             <option value="Tourism">Tourism</option>
             <option value="Mathematics">Mathematics</option>
             <option value="Accounting and Finance and Money">Accounting and Finance and Money</option>
             <option value="Music and Instruments">Music and Instruments</option>
             <option value="Public speaking">Public speaking</option>
             <option value="Mining and Minerals">Mining and Minerals</option>
             <option value="Chemistry">Chemistry</option>
             <option value="Cars and Automotives">Cars and Automotives</option>
             <option value="Space and all things small">Space and all things small</option>
             <option value="Social Work">Social Work</option>

     		   </select>
         </div>

         <div class="submit">
           <input type="submit" name="submit" placeholder="submit" >
         </div>

   			</div>
       </form>
     </div>
   </body>
 </html>
