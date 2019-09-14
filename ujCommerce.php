<?php
session_start();


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UJ Application</title>
    <link rel="stylesheet" type="text/css" href="ujApplications.css">
  </head>
  <body>
    <h1>WITS APPLICATION</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="ujApplicationPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="ACCOUNTING">ACCOUNTING</option>
            <option value="HOSPITALITY MANAGEMENT">HOSPITALITY MANAGEMENT</option>
            <option value="HUMAN RESOURCE MANAGMENT">HUMAN RESOURCE MANAGMENT</option>
            <option value="TOURISM DEVELOPMENT AND MANAGEMENT">TOURISM DEVELOPMENT AND MANAGEMENT</option>
            <option value="PUBLIC MANAGEMENT AND GOVERNANCE">PUBLIC MANAGEMENT AND GOVERNANCE</option>
            <option value="BUSINESS MANAGEMENT">BUSINESS MANAGEMENT</option>
            <option value="ECONOMICS AND ECONOMETRICS">ECONOMICS AND ECONOMETRICS</option>
            <option value="ENTREPRENEURIAL MANAGEMENT">ENTREPRENEURIAL MANAGEMENT</option>
            <option value="FINANCE">FINANCE</option>
            <option value="INDUSTRIAL PSYCHOLOGY">INDUSTRIAL PSYCHOLOGY</option>
            <option value="INFORMATIONS SYSTEMS">INFORMATIONS SYSTEMS</option>
            <option value="INFORMATION MANAGEMENT">INFORMATION MANAGEMENT</option>
            <option value="LOGISTICS">LOGISTICS</option>
            <option value="MARKETING MANAGEMENT">MARKETING MANAGEMENT</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your second Choice</option>
            <option value="ACCOUNTING">ACCOUNTING</option>
            <option value="HOSPITALITY MANAGEMENT">HOSPITALITY MANAGEMENT</option>
            <option value="HUMAN RESOURCE MANAGMENT">HUMAN RESOURCE MANAGMENT</option>
            <option value="TOURISM DEVELOPMENT AND MANAGEMENT">TOURISM DEVELOPMENT AND MANAGEMENT</option>
            <option value="PUBLIC MANAGEMENT AND GOVERNANCE">PUBLIC MANAGEMENT AND GOVERNANCE</option>
            <option value="BUSINESS MANAGEMENT">BUSINESS MANAGEMENT</option>
            <option value="ECONOMICS AND ECONOMETRICS">ECONOMICS AND ECONOMETRICS</option>
            <option value="ENTREPRENEURIAL MANAGEMENT">ENTREPRENEURIAL MANAGEMENT</option>
            <option value="FINANCE">FINANCE</option>
            <option value="INDUSTRIAL PSYCHOLOGY">INDUSTRIAL PSYCHOLOGY</option>
            <option value="INFORMATIONS SYSTEMS">INFORMATIONS SYSTEMS</option>
            <option value="INFORMATION MANAGEMENT">INFORMATION MANAGEMENT</option>
            <option value="LOGISTICS">LOGISTICS</option>
            <option value="MARKETING MANAGEMENT">MARKETING MANAGEMENT</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your second Choice</option>
            <option value="ACCOUNTING">ACCOUNTING</option>
            <option value="HOSPITALITY MANAGEMENT">HOSPITALITY MANAGEMENT</option>
            <option value="HUMAN RESOURCE MANAGMENT">HUMAN RESOURCE MANAGMENT</option>
            <option value="TOURISM DEVELOPMENT AND MANAGEMENT">TOURISM DEVELOPMENT AND MANAGEMENT</option>
            <option value="PUBLIC MANAGEMENT AND GOVERNANCE">PUBLIC MANAGEMENT AND GOVERNANCE</option>
            <option value="BUSINESS MANAGEMENT">BUSINESS MANAGEMENT</option>
            <option value="ECONOMICS AND ECONOMETRICS">ECONOMICS AND ECONOMETRICS</option>
            <option value="ENTREPRENEURIAL MANAGEMENT">ENTREPRENEURIAL MANAGEMENT</option>
            <option value="FINANCE">FINANCE</option>
            <option value="INDUSTRIAL PSYCHOLOGY">INDUSTRIAL PSYCHOLOGY</option>
            <option value="INFORMATIONS SYSTEMS">INFORMATIONS SYSTEMS</option>
            <option value="INFORMATION MANAGEMENT">INFORMATION MANAGEMENT</option>
            <option value="LOGISTICS">LOGISTICS</option>
            <option value="MARKETING MANAGEMENT">MARKETING MANAGEMENT</option>
           </select>

        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
