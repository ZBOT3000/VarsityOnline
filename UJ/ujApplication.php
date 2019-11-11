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
    <h1>UJ APPLICATION</h1>
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
      <div class="">
          <h3>APPLIED MATHEMATICS AND COMPUTER SCIENCE</h3>
          <p>
 A computer science graduate is trained in the principles underlying computing, the development and use of programming languages and the application of computers as tools in problem solving
          </p>
        </div>
        <div class="">
          <h3>BIOCHEMISTRY AND BOTANY</h3>
          <p>
Biochemistry is the study of the molecules and chemical processes which occur in all living organisms. Biochemistry is fundamental to understanding mechanisms in molecular and cell biology.
          </p>
        </div>
        <div class="">
          <h3>MATHEMATICS AND MATHEMATICAL STATISTICS (WITH FINANCIAL ORIENTATION)</h3>
          <p>
 Mathematics is the science of structure, quantity, change and space and the interactions between them.
          </p>
        </div>
        <div class="">
          <h3>ZOOLOGY AND BIOCHEMISTRY</h3>
          <p>
         Zoologists are biological scientists who specialize in the study of animals and their ecosystems.
          </p>
        </div>
        <div class="">
          <h3>PHYSICS AND MATHEMATICS</h3>
          <p>
 Physicists are highly trained scientists who study matter and the universe. They measure and study phenomena from the subatomic to the cosmic level
          </p>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
