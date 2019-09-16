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
            <option value="APPLIED MATHEMATICS AND COMPUTER SCIENCE">APPLIED MATHEMATICS  AND COMPUTER SCIENCEl</option>
            <option value="BIOCHEMISTRY AND BOTANY">BIOCHEMISTRY AND BOTANY</option>
            <option value="MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)">MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)</option>
            <option value="ZOOLOGY AND BIOCHEMISTRY">ZOOLOGY AND BIOCHEMISTRY</option>
            <option value="PHYSICS AND MATHEMATICS">PHYSICS AND MATHEMATICS</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="APPLIED MATHEMATICS AND COMPUTER SCIENCE">APPLIED MATHEMATICS  AND COMPUTER SCIENCEl</option>
            <option value="BIOCHEMISTRY AND BOTANY">BIOCHEMISTRY AND BOTANY</option>
            <option value="MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)">MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)</option>
            <option value="ZOOLOGY AND BIOCHEMISTRY">ZOOLOGY AND BIOCHEMISTRY</option>
            <option value="PHYSICS AND MATHEMATICS">PHYSICS AND MATHEMATICS</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="APPLIED MATHEMATICS AND COMPUTER SCIENCE">APPLIED MATHEMATICS  AND COMPUTER SCIENCEl</option>
            <option value="BIOCHEMISTRY AND BOTANY">BIOCHEMISTRY AND BOTANY</option>
            <option value="MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)">MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)</option>
            <option value="ZOOLOGY AND BIOCHEMISTRY">ZOOLOGY AND BIOCHEMISTRY</option>
            <option value="PHYSICS AND MATHEMATICS">PHYSICS AND MATHEMATICS</option>
           </select>

        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
