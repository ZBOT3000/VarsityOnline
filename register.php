<?php
session_start();
 ?>
<!DOCTYPE html>
<html>

<!--Navigation -->

<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="WelcomePage.html" >Home</a>
  <a href="login.php">Login</a>
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


<div class="Form-Control">
<head>
	<link rel="shortcut icon" href="icon1.jpg">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">

</head>


<body>

	<div class="LogIn-Form">
		<form id="LogIn-Form"  method="post" action="Pregister.php">
			<h1>FILL IN THE DETAILS BELOW TO REGISTER</h1>
			<input type="text" name="name" class="form-control" placeholder="Enter your name here" required><br>
			<input type="text" name="surname" class="form-control" placeholder="Enter your surname here" required><br>

			<input type="email" id="email1"  name="email1" class="form-control" placeholder="Enter your email here" required><br>
			<input type="email" id="email2"  name="confirmemail" class="form-control" placeholder="re-Enter your email here" required><br>

			<input type="password" id = "password1"name="password1" class="form-control" placeholder="Enter your password here" required><br>
			<input type="password" id = "password2" name="password2" class="form-control" placeholder="re-Enter your password here" required><br>

			<input type="submit" class="form-control submit" value="SUBMIT">
		</form>

    <script type="text/javascript">
    var password = document.getElementById("password1")
    ,confirm_password = document.getElementById("password2");

    function validatePassword()
    {
        if(password.value != confirm_password.value)
        {
        confirm_password.setCustomValidity("Passwords Don't Match");
        } else
        {
        confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>

    <script type="text/javascript">
    var email1 = document.getElementById("email1"),
    email2 = document.getElementById("email2");
    function validateEmail ()
    {
        if (email1.value!=email2.value) {
          email2.setCustomValidity("Emails Do Not Match");

        }else {
          email2.setCustomValidity('');
        }
    }

    email1.onchange = validateEmail;
    email2.onkeyup = validateEmail;

    </script>

	</div>

</body>
</div>
</html>
