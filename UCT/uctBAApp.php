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
    <h1>HUMANITIES</h1>
    <div class="LogIn-Form">
  		<form id="LogIn-Form"  method="post" action="uctComAppPHP.php">
  			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
  			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
  			<div class="Drop-Down">
  				<select name="firstChoice" class="select-box">
    				<option>Select your first Choice</option>
            <option value="Fine Arts">BA Fine Arts</option>
            <option>Fine artists work across a variety of mediums – paper, metal, clay, photographic film, and wood. They sell their works to museums, art galleries or directly to customers.</option>
            <option value="Theatre & Performance">BA Theatre & Performance</option>
            <option>Performers entertain audiences through recorded or live shows, presentations, and exhibitions. They can be found working in diverse settings such as theaters and music video sets.</option>
            <option value="Social Science">BA Social Science</option>
            <option>Responsible for studying and researching the link between society and human behavior. Specializes in any of the natural sciences, including anthropology, archaeology, criminology, economics.</option>
            <option value="Social Work">BA Social Work</option>
            <option>Social workers help clients handle everyday life problems. They often assist clients who have issues caused by neglect, abuse, domestic violence, mental health and substance abuse.</option>
            <option value="Music">BA Music</option>
            <option>Perform music for live audiences and recordings. Audition for positions in orchestras, choruses, bands, and other types of music groups.</option>
  		     </select>

  			</div>
        <div class="Drop-Down">
          <select name="secondChoice" class="select-box">
            <option>Select your second Choice</option>
            <option value="Fine Arts">BA Fine Arts</option>
            <option value="Theatre & Performance">BA Theatre & Performance</option>
            <option value="Social Science">BA Social Science</option>
            <option value="Social Work">BA Social Work</option>
            <option value="Music">BA Music</option>
           </select>

        </div>

        <div class="Drop-Down">
          <select name="ThirdChoice" class="select-box">
            <option>Select your third Choice</option>
            <option value="Fine Arts">BA Fine Arts</option>
            <option value="Theatre & Performance">BA Theatre & Performance</option>
            <option value="Social Science">BA Social Science</option>
            <option value="Social Work">BA Social Work</option>
            <option value="Music">BA Music</option>
           </select>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
