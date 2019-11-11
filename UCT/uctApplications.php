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
     <h1>SCIENCE</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="uctApplicationsPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="Computer Science">BSc Computer Science</option>
            <option value="Physics">BSc Physics</option>
            <option value="Mathematics">BSc Mathematics</option>
            <option value="Biochemistry">BSc Biochemistry</option>
            <option value="Astrophysics">BSc Astrophysics</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your second Choice</option>
            <option value="Computer Science">BSc Computer Science</option>
            <option value="Physics">BSc Physics</option>
            <option value="Mathematics">BSc Mathematics</option>
            <option value="Biochemistry">BSc Biochemistry</option>
            <option value="Astrophysics">BSc Astrophysics</option>
		 </select>
        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your third Choice</option>
            <option value="Computer Science">BSc Computer Science</option>
            <option value="Physics">BSc Physics</option>
            <option value="Mathematics">BSc Mathematics</option>
            <option value="Biochemistry">BSc Biochemistry</option>
            <option value="Astrophysics">BSc Astrophysics</option>
           </select>

        </div>

        
        <div class="">
          <h3>Computer Science</h3>
          <p>
A computer science graduate is trained in the principles underlying computing, the development and use of programming languages and the application of computers as tools in problem solving
          </p>
        </div>
        <div class="">
          <h3>Physics</h3>
          <p>
Physics is about understanding the nature of matter and radiation in the language of mathematics, and as such is a central fundamental discipline in science.
          </p>
        </div>
        <div class="">
          <h3>Mathematics</h3>
          <p>
  Mathematics is the science of structure, quantity, change and space and the interactions between them.
          </p>
        </div>
        <div class="">
          <h3>Biochemistry</h3>
          <p>
Biochemistry is the study of the molecules and chemical processes which occur in all living organisms. Biochemistry is fundamental to understanding mechanisms in molecular and cell biology.
          </p>
        </div>
        <div class="">
          <h3>Astrophysics</h3>
          <p>
The Astrophysics major requires a strong mathematics and physics foundation
          </p>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
