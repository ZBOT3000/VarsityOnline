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
            <option value="BEng-Chemical Engineering">BEng-Chemical Engineering</option>
            <option value="BEng-Metallurgy and Material Engineering">BEng-Metallurgy and Material Engineering</option>
            <option value="BEng-Civil Engineering">BEng-Civil Engineering</option>
            <option value="BEng-Electrical Engineering">BEng-Electrical Engineering</option>
            <option value="BEng-Information Engineering">BEng-Information Engineering</option>
            <option value="BEng-Biomedical Engineering">BEng-Biomedical Engineering</option>
            <option value="BEng-Digital Arts">BEng-Digital Arts</option>
            <option value="BEng-Mechanical Engineering">BEng-Mechanical Engineering</option>
            <option value="BEng-Industrial Engineering">BEng-Industrial Engineering</option>
            <option value="BEng-Aeronautical Engineering">BEng-Aeronautical Engineering</option>
            <option value="BEng-Mining Engineering">BEng-Mining Engineering</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="BEng-Chemical Engineering">BEng-Chemical Engineering</option>
            <option value="BEng-Metallurgy and Material Engineering">BEng-Metallurgy and Material Engineering</option>
            <option value="BEng-Civil Engineering">BEng-Civil Engineering</option>
            <option value="BEng-Electrical Engineering">BEng-Electrical Engineering</option>
            <option value="BEng-Information Engineering">BEng-Information Engineering</option>
            <option value="BEng-Biomedical Engineering">BEng-Biomedical Engineering</option>
            <option value="BEng-Digital Arts">BEng-Digital Arts</option>
            <option value="BEng-Mechanical Engineering">BEng-Mechanical Engineering</option>
            <option value="BEng-Industrial Engineering">BEng-Industrial Engineering</option>
            <option value="BEng-Aeronautical Engineering">BEng-Aeronautical Engineering</option>
            <option value="BEng-Mining Engineering">BEng-Mining Engineering</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your first Choice</option>
            <option value="BEng-Chemical Engineering">BEng-Chemical Engineering</option>
            <option value="BEng-Metallurgy and Material Engineering">BEng-Metallurgy and Material Engineering</option>
            <option value="BEng-Civil Engineering">BEng-Civil Engineering</option>
            <option value="BEng-Electrical Engineering">BEng-Electrical Engineering</option>
            <option value="BEng-Information Engineering">BEng-Information Engineering</option>
            <option value="BEng-Biomedical Engineering">BEng-Biomedical Engineering</option>
            <option value="BEng-Digital Arts">BEng-Digital Arts</option>
            <option value="BEng-Mechanical Engineering">BEng-Mechanical Engineering</option>
            <option value="BEng-Industrial Engineering">BEng-Industrial Engineering</option>
            <option value="BEng-Aeronautical Engineering">BEng-Aeronautical Engineering</option>
            <option value="BEng-Mining Engineering">BEng-Mining Engineering</option>
           </select>
        </div>
      <div class="">
          <h3>Civil Engineering</h3>
          <p>
            Civil engineers create, improve and protect the environment in which we live.
            They plan, design and oversee construction and maintenance of
            building structures and infrastructure.
          </p>
        </div>
        <div class="">
          <h3>Electrical Engineering</h3>
          <p>
           The Electrical Engineering degree curriculum at UCT has been designed to be flexible. Electrical engineers can choose to follow a high technology career in research and development.
          </p>
        </div>
        <div class="">
          <h3>Chemical Engineering</h3>
          <p>
        Chemical engineers apply the principles of chemistry, biology, physics, and math to solve problems that involve the use of fuel, drugs, food, and many other products.
          </p>
        </div>
        <div class="">
          <h3>Industrial Engineering</h3>
          <p>
         Design, develop, maintain and manage high technology engineering systems for the automation of industrial tasks
          </p>
        </div>
        <div class="">
          <h3>Mechanical Engineering</h3>
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
