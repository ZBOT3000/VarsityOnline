<?php

require "conn.php";
$email = $_GET["email"];
if(isset($_POST["newPassword"]))
{
  $password = $_POST["password1"];
  $mysql_qry2= "update REGISTER set password = '$password' where email = '$email' ;";
  $result = mysqli_query($conn,$mysql_qry2);
  if($result)
  {
    header("Location: http://lbmsolutions.co.za/login.php");
  } else {
    echo "naaaaaaaaaaaaaah";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="newPassword">
  		<form id="newPassword"  method="post" action="newPassword.php">


  			<input type="password" id = "password1" name="password1" class="form-control" placeholder="Enter your password here" required><br>
  			<input type="password" id = "password2" name="password2" class="form-control" placeholder="re-Enter your password here" required><br>

  			<input type="submit" name = "newPassword" class="form-control submit" value="SUBMIT">
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



  	</div>

  </body>
</html>
