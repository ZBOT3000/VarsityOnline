<?php
session_start();

 ?>
<!DOCTYPE html>
<html>
<!--Navigation -->


<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="WelcomePage.html" >Home</a>
  <a href="login.html">Login</a>
  <a href="register.html" >Register</a>
  <a href="" >About</a>
  <a href="" >Contact</a>
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
	<title>LOG IN </title>
	<link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>


	<div class="LogIn-Form">
    <form class="login" action="Plogin.php" method="post">
    <h1 class="login-title">Login</h1>
      <input type="text" name="logUsername" class="login-input" placeholder="Username" autofocus required><br>
      <input type="password" name="logPassword" class="login-input" placeholder="Password" required><br>
      <input type="submit" value="Sign In"- class="login-button"><br>
      <p class="login-lost"> <a href="forgotPassword.php">Forgot Password?</a></p>
      <p class="login-lost"> <a href="register.html">Sign-Up</a></p>
    </form>

	</div>


</body>
</html>
