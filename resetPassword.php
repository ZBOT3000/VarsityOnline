<?php

if(isset($_GET['email']) && isset($_GET['token']))
{
  require "functions.php";
  require 'conn.php';
  $email = $_GET["email"];
  $token = $_GET['token'];

  $mysql_qry="select * from REGISTER where
  email = '$email' and token='$token' and token<>'' and tokenexpire > NOW();";
  $result = mysqli_query($conn,$mysql_qry);

  if (mysqli_num_rows($result)>0)
  {
      $newPass = generateNewString();
      $mysql_qry2="update REGISTER set password = '$newPass',token = '',
                    tokenexpire= DATE_ADD( NOW() ,INTERVAL 5 MINUTE)
                    where email = '$email';";
      $result2 = mysqli_query($conn,$mysql_qry2);

      echo " <p> YOUR NEW PASSWORD IS: $newPass<br><a href='http://vor.lbmsolutions.co.za/login.html'>Click here to LogIn</a> </p>";


  }else{
    redirectToLogin();
  }

}else {
  redirectToLogin();
}


 ?>
