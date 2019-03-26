<?php
require 'conn.php';
if(isset($_POST["ForgotPass"]))
{
    $connection = mysqli_connect("localhost","root","","test");
    $email = $connection->real_escape_string($_POST["email"]);
    $data = $connection->query("SELECT id from user where email = '$email'");

    if ($data->num_rows > 0)
    {
      $str = "76t3gyu567dsgsd765sfgfsgs324fbsgbisyg8w6w34gyvfbisfgb";
      $str = str_shuffle($str);
      $str = substr($str,0,10);
      $url = "localhost/sd/resetPassword.php?token=$str&email=$email";
      //mail($email,"Reset Password","To reset your password please visit your link: $url" , "From: bafanamngo@gmail.com\r\n");

      $connection->query("update user set token = '$str' where email = '$email'");

      echo "Please check your email";
    } else
    {
      echo "please check your email!";
    }
}


 ?>
 <html lang="en" dir="ltr">
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
