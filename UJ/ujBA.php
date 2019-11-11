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
            <option value="BA (DIGITAL  MEDIA DESIGN)">BA (DIGITAL  MEDIA DESIGN)</option>
            <option value="BA (INTERIOR DESIGN)">BA (INTERIOR DESIGN)</option>
            <option value="BA (FASHION DESIGN)">BA (FASHION DESIGN)</option>
            <option value="BA VISUAL ARTS">BA VISUAL ARTS</option>
            <option value="BA DESIGN (COMMUNICATION DESIGN)">BA DESIGN (COMMUNICATION DESIGN)</option>
            <option value="B ARCHITECTURE">BA ARCHITECTURE</option>
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
            <option value="B ARCHITECTURE">BA ARCHITECTURE</option>
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
            <option value="B ARCHITECTURE">BA ARCHITECTURE</option>
           </select>

        </div>
             <div class="">
          <h3>BA (DIGITAL  MEDIA DESIGN)</h3>
          <p>
Digital media designers use integrated media to communicate messages, information, and entertainment through video games, movies, special effects, or 3-D animation.
          </p>
        </div>
        <div class="">
          <h3>BA (INTERIOR DESIGN)</h3>
          <p>
Interior designers make interior spaces functional, safe, and beautiful by determining space requirements and selecting decorative items, such as colors, lighting, and materials.
          </p>
        </div>
        <div class="">
          <h3>BA (FASHION DESIGN)</h3>
          <p>
  This course introduces students to basic design principles, including proportion and color. Garment and clothing details and terminology are also discussed.
          </p>
        </div>
        <div class="">
          <h3>BA VISUAL ARTS</h3>
          <p>
The purpose of this course is to introduce students to the languages, concepts, and practices of art through visual and art historical perspectives. 
          </p>
        </div>
        <div class="">
          <h3>BA DESIGN (COMMUNICATION DESIGN)</h3>
          <p>
Communication Design is a professional program for students who want to explore the new skills of communication and the creative potential of the interchange between words and images in traditional and innovative media.
          </p>
        </div>
        <div class="">
          <h3>BA ARCHITECTURE</h3>
          <p>
 Architects work in the construction industry designing new buildings, restoring and conserving old buildings and developing new ways of using existing buildings. 
          </p>
        </div>

        <div>
           <input type="submit" name = "submit" class="sumbit" value="SUBMIT">
        </div>

  		</form>

  	</div>

  </body>
</html>
