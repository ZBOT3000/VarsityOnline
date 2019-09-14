<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UCT Application</title>
    <link rel="stylesheet" type="text/css" href="uctApplication.css">
  </head>
  <body>
    <h1>UCT APPLICATION</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="uctApplicationPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="Computer Science">BSc-Computer Science</option>
            <option value="Physics">BSc-Physics</option>
            <option value="Mathematics">BSc-Mathematics</option>
            <option value="Biochemistry">BSc-Biochemistry</option>
            <option value="Astrophysics">BSc-Astrophysics</option>
	    <option value="Business Science">Bcom-Business Science</option>
            <option value="Accounting">Bcom-Accounting</option>
            <option value="Actuarial Science">Bcom-Actuarial Science</option>
            <option value="Information Systems">Bcom-Information Systems</option>
            <option value="Economics">Bcom-Economics</option>
	    <option value="Civil Engineering">BEng-Civil Engineering</option>
            <option value="Electrical Engineering">BEng-Electrical Engineering</option>
            <option value="Chemical Engineering">BEng-Chemical Engineering</option>
            <option value="Mechatronics">BEng-Machatronics</option>
            <option value="Mechanical Engineering">BEng-Mechanical Engineering</option>
	    <option value="Fine Arts">BA-Fine Arts</option>
            <option value="Theatre & Performance">BA-Theatre</option>
            <option value="Social Science">BA-Social Science</option>
            <option value="Social Work">BA-Social Work</option>
            <option value="Music">BA-Music</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your second Choice</option>
            <option value="Computer Science">BSc-Computer Science</option>
            <option value="Physics">BSc-Physics</option>
            <option value="Mathematics">BSc-Mathematics</option>
            <option value="Biochemistry">BSc-Biochemistry</option>
            <option value="Astrophysics">BSc-Astrophysics</option>
	    <option value="Business Science">Bcom-Business Science</option>
            <option value="Accounting">Bcom-Accounting</option>
            <option value="Actuarial Science">Bcom-Actuarial Science</option>
            <option value="Information Systems">Bcom-Information Systems</option>
            <option value="Economics">Bcom-Economics</option>
	    <option value="Civil Engineering">BEng-Civil Engineering</option>
            <option value="Electrical Engineering">BEng-Electrical Engineering</option>
            <option value="Chemical Engineering">BEng-Chemical Engineering</option>
            <option value="Mechatronics">BEng-Machatronics</option>
            <option value="Mechanical Engineering">BEng-Mechanical Engineering</option>
	    <option value="Fine Arts">BA-Fine Arts</option>
            <option value="Theatre & Performance">BA-Theatre</option>
            <option value="Social Science">BA-Social Science</option>
            <option value="Social Work">BA-Social Work</option>
            <option value="Music">BA-Music</option>
		 </select>
        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your third Choice</option>
            <option value="Computer Science">BSc-Computer Science</option>
            <option value="Physics">BSc-Physics</option>
            <option value="Mathematics">BSc-Mathematics</option>
            <option value="Biochemistry">BSc-Biochemistry</option>
            <option value="Astrophysics">BSc-Astrophysics</option>
            <option value="Business Science">Bcom-Business Science</option>
            <option value="Accounting">Bcom-Accounting</option>
            <option value="Actuarial Science">Bcom-Actuarial Science</option>
            <option value="Information Systems">Bcom-Information Systems</option>
            <option value="Economics">Bcom-Economics</option>
	    <option value="Civil Engineering">BEng-Civil Engineering</option>
            <option value="Electrical Engineering">BEng-Electrical Engineering</option>
            <option value="Chemical Engineering">BEng-Chemical Engineering</option>
            <option value="Mechatronics">BEng-Machatronics</option>
            <option value="Mechanical Engineering">BEng-Mechanical Engineering</option>
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
