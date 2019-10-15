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
            <option value="BA (DIGITAL  MEDIA DESIGN)">BA (DIGITAL  MEDIA DESIGN)</option>
            <option value="BA (INTERIOR DESIGN)">BA (INTERIOR DESIGN)</option>
            <option value="BA (FASHION DESIGN)">BA (FASHION DESIGN)</option>
            <option value="BA VISUAL ARTS">BA VISUAL ARTS</option>
            <option value="BA DESIGN (COMMUNICATION DESIGN)">BA DESIGN (COMMUNICATION DESIGN)</option>
            <option value="B ARCHITECTURE">B ARCHITECTURE</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="BA (DIGITAL  MEDIA DESIGN)">BA (DIGITAL  MEDIA DESIGN)</option>
            <option value="BA (INTERIOR DESIGN)">BA (INTERIOR DESIGN)</option>
            <option value="BA (FASHION DESIGN)">BA (FASHION DESIGN)</option>
            <option value="BA VISUAL ARTS">BA VISUAL ARTS</option>
            <option value="BA DESIGN (COMMUNICATION DESIGN)">BA DESIGN (COMMUNICATION DESIGN)</option>
            <option value="B ARCHITECTURE">B ARCHITECTURE</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="BA (DIGITAL  MEDIA DESIGN)">BA (DIGITAL  MEDIA DESIGN)</option>
            <option value="BA (INTERIOR DESIGN)">BA (INTERIOR DESIGN)</option>
            <option value="BA (FASHION DESIGN)">BA (FASHION DESIGN)</option>
            <option value="BA VISUAL ARTS">BA VISUAL ARTS</option>
            <option value="BA DESIGN (COMMUNICATION DESIGN)">BA DESIGN (COMMUNICATION DESIGN)</option>
            <option value="B ARCHITECTURE">B ARCHITECTURE</option>
           </select>

        </div>
             <div class="">
          <h3>BA (DIGITAL  MEDIA DESIGN)</h3>
          <p>
Business skills are in high demand worldwide. They develop leaders with knowledge and expertise across a broad range of disciplines that have immediate value in the workplace
          </p>
        </div>
        <div class="">
          <h3>BA (INTERIOR DESIGN)</h3>
          <p>
  Graduates become general managers, tax advisors, internal auditors or business advisors. The CA option is designed for students who intend to qualify as Chartered Accountants.
          </p>
        </div>
        <div class="">
          <h3>BA (FASHION DESIGN)</h3>
          <p>
  This is intended for students with a strong numerate ability who wish to enter the actuarial or allied professions.
          </p>
        </div>
        <div class="">
          <h3>BA VISUAL ARTS</h3>
          <p>
The curriculum deals not only with the information technologies but also imparts students with the skills to analyse user requirements and develop information systems.
          </p>
        </div>
        <div class="">
          <h3>BA DESIGN (COMMUNICATION DESIGN)</h3>
          <p>
 This focuses on financial issues and provides students with the skills needed to operate in the world of finance.
          </p>
        </div>
        <div class="">
          <h3>BA ARCHITECTURE</h3>
          <p>
 This focuses on financial issues and provides students with the skills needed to operate in the world of finance.
          </p>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
