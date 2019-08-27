<?php
session_start();


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wits Application</title>
    <link rel="stylesheet" type="text/css" href="witsApplication.css">
  </head>
  <body>
    <h1>WITS APPLICATION</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="witsApplicationPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="General">BSc-General</option>
            <option value="Biological Science">BSc-Biological Science</option>
            <option value="Archaeology and Geography">BSc-Archaeology and Geography</option>
            <option value="Geological Sciences">BSc-Geological Sciences</option>
            <option value="Acturial Sciences">BSc-Acturial Sciences</option>
            <option value="Computer Science">BSc-Computer Science</option>
            <option value="Mathematics of Finance">BSc-Mathematics of Finance</option>
            <option value="Mathematical Science">BSc-Mathematical Science</option>
            <option value="Astronomy and Astrophysics">BSc-Astronomy and Astrophysics</option>
            <option value="Chemistry with Chemical Engineering">BSc-Chemistry with Chemical Engineering</option>
            <option value="Nuclear Science and Engineering">BSc-Nuclear Science and Engineering</option>
            <option value="Physical Science">BSc-Physical Science</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="General">BSc-General</option>
            <option value="Biological Science">BSc-Biological Science</option>
            <option value="Archaeology and Geography">BSc-Archaeology and Geography</option>
            <option value="Geological Sciences">BSc-Geological Sciences</option>
            <option value="Acturial Sciences">BSc-Acturial Sciences</option>
            <option value="Computer Science">BSc-Computer Science</option>
            <option value="Mathematics of Finance">BSc-Mathematics of Finance</option>
            <option value="Mathematical Science">BSc-Mathematical Science</option>
            <option value="Astronomy and Astrophysics">BSc-Astronomy and Astrophysics</option>
            <option value="Chemistry with Chemical Engineering">BSc-Chemistry with Chemical Engineering</option>
            <option value="Nuclear Science and Engineering">BSc-Nuclear Science and Engineering</option>
            <option value="Physical Science">BSc-Physical Science</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="General">BSc-General</option>
            <option value="Biological Science">BSc-Biological Science</option>
            <option value="Archaeology and Geography">BSc-Archaeology and Geography</option>
            <option value="Geological Sciences">BSc-Geological Sciences</option>
            <option value="Acturial Sciences">BSc-Acturial Sciences</option>
            <option value="Computer Science">BSc-Computer Science</option>
            <option value="Mathematics of Finance">BSc-Mathematics of Finance</option>
            <option value="Mathematical Science">BSc-Mathematical Science</option>
            <option value="Astronomy and Astrophysics">BSc-Astronomy and Astrophysics</option>
            <option value="Chemistry with Chemical Engineering">BSc-Chemistry with Chemical Engineering</option>
            <option value="Nuclear Science and Engineering">BSc-Nuclear Science and Engineering</option>
            <option value="Physical Science">BSc-Physical Science</option>
           </select>

        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
