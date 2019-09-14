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
            <option value="BCom-General">BCom-General</option>
            <option value="Bcom-Accounting Science">Bcom-Accounting Science</option>
            <option value="BCom-Accounting">Bcom-Accounting</option>
            <option value="BCom-Economic Science">Bcom-Economic Science</option>
            <option value="BCom-Politics,Philosophy and Economicss">Bcom-Politics,Philosophy and Economicss</option>
            <option value="BCom-Law">Bcom-Law</option>
            <option value="BCom-Information Systems">Bcom-Information Systems</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="BCom-General">BCom-General</option>
            <option value="Bcom-Accounting Science">Bcom-Accounting Science</option>
            <option value="BCom-Accounting">Bcom-Accounting</option>
            <option value="BCom-Economic Science">Bcom-Economic Science</option>
            <option value="BCom-Politics,Philosophy and Economicss">Bcom-Politics,Philosophy and Economicss</option>
            <option value="BCom-Law">Bcom-Law</option>
            <option value="BCom-Information Systems">Bcom-Information Systems</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="BCom-General">BCom-General</option>
            <option value="Bcom-Accounting Science">Bcom-Accounting Science</option>
            <option value="BCom-Accounting">Bcom-Accounting</option>
            <option value="BCom-Economic Science">Bcom-Economic Science</option>
            <option value="BCom-Politics,Philosophy and Economicss">Bcom-Politics,Philosophy and Economicss</option>
            <option value="BCom-Law">Bcom-Law</option>
            <option value="BCom-Information Systems">Bcom-Information Systems</option>
           </select>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
