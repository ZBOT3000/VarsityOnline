<?php
  session_start();
  echo $_SESSION['user_id'];

 ?>

<!DOCTYPE html>
<html>
<!--Navigation -->


<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Dashboard.php">Dashboard</a>
  <a href="Demographics.php">Demographics</a>
  <a href="newPassword.php">New Password</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- End of nagivation-->

<head>
	<title>ACADEMICS</title>
  <link rel="stylesheet" type="text/css" href="Academics.css">
</head>
<body>

	<h1>Academics</h1>
	<div class="LogIn-Form">
		<form id="LogIn-Form"  method="post" action="PAcademics.php">
			<h1>FILL IN YOUR ACADEMICS INFOMATION BELOW </h1><br>
			<!-- <input type="text" name="SN" class="form-control" placeholder="Enter your School Name" required><br>-->
			<div class="Drop-Down">
				<select name="SN" class="form-control">
				<option>Select a School</option>
			  	<option value="St Benedicts">Bennies</option>
				<option value="St Johns">ST Johns</option>
			</select>

			</div>

			<div class="Drop-Down">
				<select name="CG" class="form-control">
				<option>Select a Grade</option>
			  	<option value="11">11</option>
				<option value="12">12</option>
			</select>
			</div>
			<!--<input type="text" name="CG" class="form-control" placeholder="Enter your current Grade" required><br>-->

			<div class="Drop-Down">
				<select name="HL" class="form-control">
				<option>Select Home Language</option>
			  	<option value="English">English</option>
				<option value="Afrikaans">Afrikaans</option>
				<option value="Zulu">Zulu</option>
				<option value="Xhosa">Xhosa</option>
	   	  		<option value="SeSotho">SeSotho</option>
		    	<option value="SeTswana">SeTswana</option>
				<option value="Ndebele">Ndebele</option>
				<option value="SeSwati">SeSwati</option>
				<option value="Tsonga">Tsonga</option>
				<option value="Venda">Venda</option>
				<option value="SePedi">SePedi</option>
			</select>
			<input type="text" class="form-control" name="HLMark" placeholder="HLMark" >
			</div>


			<div class="Drop-Down">
			<select name="FAL" class="form-control">
			  <option>Select First Additional Language</option>
			  <option value="English">FAL English</option>
			  <option value="Afrikaans">FAL Afrikaans</option>
			  <option value="Zulu">FAL Zulu</option>
			  <option value="Xhosa">FAL Xhosa</option>
			  <option value="SeSotho">FAL SeSotho</option>
			  <option value="SeTswana">FAL SeTswana</option>
			  <option value="Ndebele">FAL Ndebele</option>
			  <option value="SeSwati">FAL SeSwati</option>
			  <option value="Tsonga">FAL Tsonga</option>
			  <option value="Venda">FAL Venda</option>
			  <option value="SePedi">FAL SePedi</option>
			</select>
			<input type="text" class="form-control" name="FALMark" placeholder="FALMark">
			</div>

			<div class="Drop-Down">
				<select name="Mathematics" class="form-control">
				  <option>Select a Mathematics Subject</option>
				  <option value="Mathematics">Mathematics</option>
				  <option value="MathLit">Mathematics Literacy</option>
			</select>
			<input type="text" class="form-control" name="MathMark" placeholder="MathMark">
			</div>
			<!--This is the drop down for First subject choice -->
			<div class="Drop-Down">
				<select name="Subject1" class="form-control">
					<option> Select A Subject</option>
					<option value="Physical Science">Physical Science</option>
					<option value="Accounting">Accounting</option>
					<option value="Agricultural Management Practices">Agricultural Management Practices</option>
					<option value="Agricultural Sciences">Agricultural Sciences</option>
					<option value="Agricultural Technology">Agricultural Technology</option>
					<option value="Business Studies">Business Studies</option>
					<option value="Civil Technology">Civil Technology</option>
					<option value="Computer Applications Technology">Computer Applications Technology</option>
					<option value="Consumer Studies">Consumer Studies</option>
					<option value="Dance Studies">Dance Studies</option>
					<option value="Design">Design</option>
					<option value="Dramatic Arts">Dramatic Arts</option>
					<option value="Economics">Economics</option>
					<option value="Electrical Technology">Electrical Technology</option>
					<option value="Engineering Graphics & Design">Engineering Graphics & Design</option>
					<option value="Geography">Geography</option>
					<option value="History">History</option>
					<option value="Hospitality">Hospitality Studies</option>
					<option value="Information Technology">Information Technology</option>
					<option value="Life Sciences">Life Sciences</option>
					<option value="Mechanical Technology">Mechanical Technology</option>
					<option value="Music">Music</option>
					<option value="Physical Science">Physical Science</option>
					<option value="Religion Studies">Religion Studies</option>
					<option value="Tourism">Tourism</option>
					<option value="Visual Arts">Visual Arts</option>
				</select>
				<input type="text" class="form-control" name="sub1Mark" placeholder="sub1Mark">
			</div>
			<!--This is the drop down for second subject choice -->
			<div class="Drop-Down" name="Subject2"	>
				<select name="Subject2" class="form-control">
					<option> Select A Subject</option>
					<option value="Physical Science">Physical Science</option>
					<option value="Accounting">Accounting</option>
					<option value="Agricultural Management Practices">Agricultural Management Practices</option>
					<option value="Agricultural Sciences">Agricultural Sciences</option>
					<option value="Agricultural Technology">Agricultural Technology</option>
					<option value="Business Studies">Business Studies</option>
					<option value="Civil Technology">Civil Technology</option>
					<option value="Computer Applications Technology">Computer Applications Technology</option>
					<option value="Consumer Studies">Consumer Studies</option>
					<option value="Dance Studies">Dance Studies</option>
					<option value="Design">Design</option>
					<option value="Dramatic Arts">Dramatic Arts</option>
					<option value="Economics">Economics</option>
					<option value="Electrical Technology">Electrical Technology</option>
					<option value="Engineering Graphics & Design">Engineering Graphics & Design</option>
					<option value="Geography">Geography</option>
					<option value="History">History</option>
					<option value="Hospitality">Hospitality Studies</option>
					<option value="Information Technology">Information Technology</option>
					<option value="Life Sciences">Life Sciences</option>
					<option value="Mechanical Technology">Mechanical Technology</option>
					<option value="Music">Music</option>
					<option value="Physical Science">Physical Science</option>
					<option value="Religion Studies">Religion Studies</option>
					<option value="Tourism">Tourism</option>
					<option value="Visual Arts">Visual Arts</option>
				</select>
				<input type="text" class="form-control" name="sub2Mark" placeholder="sub2Mark">
			</div>
			<!--This is the drop down for Third subject choice -->

			<div class="Drop-Down">
				<select name="Subject3" class="form-control">
					<option> Select A Subject</option>
					<option value="Physical Science">Physical Science</option>
					<option value="Accounting">Accounting</option>
					<option value="Agricultural Management Practices">Agricultural Management Practices</option>
					<option value="Agricultural Sciences">Agricultural Sciences</option>
					<option value="Agricultural Technology">Agricultural Technology</option>
					<option value="Business Studies">Business Studies</option>
					<option value="Civil Technology">Civil Technology</option>
					<option value="Computer Applications Technology">Computer Applications Technology</option>
					<option value="Consumer Studies">Consumer Studies</option>
					<option value="Dance Studies">Dance Studies</option>
					<option value="Design">Design</option>
					<option value="Dramatic Arts">Dramatic Arts</option>
					<option value="Economics">Economics</option>
					<option value="Electrical Technology">Electrical Technology</option>
					<option value="Engineering Graphics & Design">Engineering Graphics & Design</option>
					<option value="Geography">Geography</option>
					<option value="History">History</option>
					<option value="Hospitality">Hospitality Studies</option>
					<option value="Information Technology">Information Technology</option>
					<option value="Life Sciences">Life Sciences</option>
					<option value="Mechanical Technology">Mechanical Technology</option>
					<option value="Music">Music</option>
					<option value="Physical Science">Physical Science</option>
					<option value="Religion Studies">Religion Studies</option>
					<option value="Tourism">Tourism</option>
					<option value="Visual Arts">Visual Arts</option>
				</select>
				<input type="text" class="form-control" name="sub3Mark" placeholder="sub3Mark">
			</div>

			<div>
				<h2>Life Orientation</h2>
				<input type="text" class="form-control" name="LOMark">
			</div>

      <div>
         <input type="submit" name = "submit" class="form-control submit" value="SUBMIT">
      </div>

		</form>

	</div>


</body>
</html>
