<?php

if(isset($_POST["ForgotPass"]))
    {
    require 'conn.php';
    $email = $_POST["email"];
    $mysql_qry="SELECT * from REGISTER where email like '$email';";
    $result = mysqli_query($conn,$mysql_qry);
    
    

    if ( mysqli_num_rows($result ))
    {
      $str = "76t3gyu567dsgsd765sfgfsgs324fbsgbisyg8w6w34gyvfbisfgb";
      $str = str_shuffle($str);
      $str = substr($str,0,10);
      $url = "resetPassword.php?email=$email&token=$str";
      
      $mysql_qry2="update REGISTER set token = '$str' where email = '$email';";
      $result2 = mysqli_query($conn,$mysql_qry2);

      header("Location: $url");

    } else
    {
      echo "please check your email!";
    }
}

 ?>
 
<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
     <title>Forgot Password</title>
   </head>
   <body>

     <form  action="ForgetPass.php" method="post">
       <input type="text" name="email" placeholder="email"><br>
       <input type="submit" name="ForgotPass" value="Request Password">

     </form>

   </body>
</html>
