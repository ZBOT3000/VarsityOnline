<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UP Application</title>
    <link rel="stylesheet" type="text/css" href="upApplication.css">
  </head>
  <body>
    <h1>University of Pretoria APPLICATION</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="upApplicationPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  			<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
				    <option value="Polotical Science">BA-Political Science</option>
				    <option value="Biological Science">BA-Fine Arts</option>
				    <option value="Computer Science">BA-Philosophy</option>
				    <option value="Chemistry">BA-Politics</option>
				    <option value="Mathematics of Finance">BA-Laguages</option>
  				    <option value="Physical Science">BA-Social Work</option>
              <option value="Physical Science">BA-LAW</option>
              <option value="Physical Science">BA-Music & Drama</option>
  		        </select>

  			</div>

			<div class="Drop-Down">
			  <select name="secondChoice" class="select-box">
			    <option>Select your Second Choice</option>
           <option value="Polotical Science">BA-Political Science</option>
           <option value="Biological Science">BA-Fine Arts</option>
           <option value="Computer Science">BA-Philosophy</option>
           <option value="Chemistry">BA-Politics</option>
           <option value="Mathematics of Finance">BA-Laguages</option>
             <option value="Physical Science">BA-Social Work</option>
             <option value="Physical Science">BA-LAW</option>
             <option value="Physical Science">BA-Music & Drama</option>
             </select>

			</div>

			<div class="Drop-Down">
			  <select name="ThirdChoice" class="select-box">
			    <option>Select your Third Choice</option>
          <option value="Polotical Science">BA-Political Science</option>
          <option value="Biological Science">BA-Fine Arts</option>
          <option value="Computer Science">BA-Philosophy</option>
          <option value="Chemistry">BA-Politics</option>
          <option value="Mathematics of Finance">BA-Laguages</option>
            <option value="Physical Science">BA-Social Work</option>
            <option value="Physical Science">BA-LAW</option>
            <option value="Physical Science">BA-Music & Drama</option>
			 </select>

			</div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
