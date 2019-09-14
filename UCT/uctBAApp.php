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
  		<form id="LogIn-Form"  method="post" action="witsComAppPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="Fine Arts">BA-Fine Arts</option>
            <option value="Theatre & Performance">BA-Theatre</option>
            <option value="Social Science">BA-Social Science</option>
            <option value="Social Work">BA-Social Work</option>
            <option value="Music">BA-Music</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="Fine Arts">BA-Fine Arts</option>
            <option value="Theatre & Performance">BA-Theatre</option>
            <option value="Social Science">BA-Social Science</option>
            <option value="Social Work">BA-Social Work</option>
            <option value="Music">BA-Music</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="Fine Arts">BA-Fine Arts</option>
            <option value="Theatre & Performance">BA-Theatre</option>
            <option value="Social Science">BA-Social Science</option>
            <option value="Social Work">BA-Social Work</option>
            <option value="Music">BA-Music</option>
           </select>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
