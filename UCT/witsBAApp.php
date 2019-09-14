<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UCT Application</title>
    <link rel="stylesheet" type="text/css" href="witsApplication.css">
  </head>
  <body>
    <h1>UCT APPLICATION</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="witsComAppPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="Business Science">Bcom-Business Science</option>
            <option value="Accounting">Bcom-Accounting</option>
            <option value="Actuarial Science">Bcom-Actuarial Science</option>
            <option value="Information Systems">Bcom-Information Systems</option>
            <option value="Economics">Bcom-Economics</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option value="Business Science">Bcom-Business Science</option>
            <option value="Accounting">Bcom-Accounting</option>
            <option value="Actuarial Science">Bcom-Actuarial Science</option>
            <option value="Information Systems">Bcom-Information Systems</option>
            <option value="Economics">Bcom-Economics</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option value="Business Science">Bcom-Business Science</option>
            <option value="Accounting">Bcom-Accounting</option>
            <option value="Actuarial Science">Bcom-Actuarial Science</option>
            <option value="Information Systems">Bcom-Information Systems</option>
            <option value="Economics">Bcom-Economics</option>
           </select>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
