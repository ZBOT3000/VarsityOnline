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
	    <option> Graduates become general managers, tax advisors, internal auditors or business advisors. The CA option is designed for students who intend to qualify as Chartered Accountants.</option>
            <option value="Actuarial Science">Bcom Actuarial Science</option>
	    <option> This is intended for students with a strong numerate ability who wish to enter the actuarial or allied professions. </option>
            <option value="Information Systems">Bcom Information Systems</option>
            <option> The curriculum deals not only with the information technologies but also imparts students with the skills to analyse user requirements and develop information systems.</option>
            <option value="Economics">Bcom Economics</option>
            <option> This focuses on financial issues and provides students with the skills needed to operate in the world of finance.</option>
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
