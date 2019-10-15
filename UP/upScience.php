<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UP Application</title>
    <link rel="stylesheet" type="text/css" href="upApplication.css">
  </head>
  <body>
    <h1>SCIENCE FUCULTY APPLICATION </h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="upApplicationPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  			<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
				    <option value="Applied Mathematics">BSc-Applied Maths</option>
				    <option value="Biological Science">BSc-Biological Science</option>
				    <option value="Computer Science">BSc-Computer Science</option>
				    <option value="Chemistry">BSc-Chemistry</option>
				    <option value="Mathematics of Finance">BSc-Mathematics of Finance</option>
  				    <option value="Physical Science">BSc-Physical Science</option>
  		        </select>

  			</div>

			<div class="Drop-Down">
			  <select name="secondChoice" class="select-box">
			    <option>Select your Second Choice</option>
			  	<option value="Applied Mathematics">BSc-Applied Maths</option>
			    	<option value="Biological Science">BSc-Biological Science</option>
			    	<option value="Computer Science">BSc-Computer Science</option>
			    	<option value="Chemistry">BSc-Chemistry</option>
			    	<option value="Mathematics of Finance">BSc-Mathematics of Finance</option>
			    	<option value="Physical Science">BSc-Physical Science</option>
			   </select>

			</div>

			<div class="Drop-Down">
			  <select name="ThirdChoice" class="select-box">
			    <option>Select your Third Choice</option>
			    <option value="Applied Mathematics">BSc-Applied Maths</option>
			    <option value="Biological Science">BSc-Biological Science</option>
			    <option value="Computer Science">BSc-Computer Science</option>
			    <option value="Chemistry">BSc-Chemistry</option>
			    <option value="Mathematics of Finance">BSc-Mathematics of Finance</option>
			    <option value="Physical Science">BSc-Physical Science</option>
			 </select>

			</div>
			<div class="">
			<h3>Applied Mathematics</h3>
          <p>
            Civil engineers create, improve and protect the environment in which we live.
            They plan, design and oversee construction and maintenance of
            building structures and infrastructure.
          </p>
        </div>
        <div class="">
          <h3>Biological Science</h3>
          <p>
           The Electrical Engineering degree curriculum at UCT has been designed to be flexible. Electrical engineers can choose to follow a high technology career in research and development.
          </p>
        </div>
        <div class="">
          <h3>Computer Science</h3>
          <p>
        Chemical engineers apply the principles of chemistry, biology, physics, and math to solve problems that involve the use of fuel, drugs, food, and many other products.
          </p>
        </div>
        <div class="">
          <h3>Chemistry</h3>
          <p>
         Design, develop, maintain and manage high technology engineering systems for the automation of industrial tasks
          </p>
        </div>
        <div class="">
          <h3>Mathematics of Finance</h3>
          <p>
Mechanical engineers design power-producing machines such as electric generators, involves understanding and harnessing forces and energy in machines for the benefit of society
          </p>
        </div>
			

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
