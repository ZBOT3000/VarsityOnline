<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UCT Application</title>
    <link rel="stylesheet" type="text/css" href="uctBAApp.css">
  </head>
  <body>
    <h1>UCT APPLICATION</h1>
    <h1>COMMERCE</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="uctComAppPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="Business Science">Bcom Business Science</option>
	    <option> Business skills are in high demand worldwide. They develop leaders with knowledge and expertise across a broad range of disciplines that have immediate value in the workplace</option>
            <option value="Accounting">Bcom Accounting</option>
	    <option> Provides financial information to management by researching and analyzing accounting data; preparing reports. Prepares asset, liability, and capital account entries by compiling and analyzing.</option>
            <option value="Actuarial Science">Bcom Actuarial Science</option>
	    <option> Actuaries analyze the financial costs of risk and uncertainty. They use mathematics, statistics, and financial theory to assess the risk that an event will occur.</option>
            <option value="Information Systems">Bcom Information Systems</option>
            <option> Information systems managers, or IT managers, are responsible for the secure and effective operation of all computer systems, related applications, hardware and software.</option>
            <option value="Economics">Bcom Economics</option>
            <option> Economists often study historical trends and use them to make forecasts. Specifically, economists may analyze issues such as consumer demand and sales to help a company maximize its profits.</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
  				<select name="secondChoice" class="select-box">
    				<option>Select your second Choice</option>
            <option value="Business Science">Bcom Business Science</option>
            <option value="Accounting">Bcom Accounting</option>
            <option value="Actuarial Science">Bcom Actuarial Science</option>
            <option value="Information Systems">Bcom Information Systems</option>
            <option value="Economics">Bcom Economics</option>
  		     </select>

        </div>

        <div class="Drop-Down">
  				<select name="ThirdChoice" class="select-box">
    				<option>Select your third Choice</option>
            <option value="Business Science">Bcom Business Science</option>
            <option value="Accounting">Bcom Accounting</option>
            <option value="Actuarial Science">Bcom Actuarial Science</option>
            <option value="Information Systems">Bcom Information Systems</option>
            <option value="Economics">Bcom Economics</option>
  		     </select>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
