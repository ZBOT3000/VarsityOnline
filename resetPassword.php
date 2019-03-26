<?php
if(isset($_GET["email"]) && isset($_GET["token"]))
{
    $connection = mysqli_connect("localhost","root","","test");

    $email = $connection->real_escape_string($_GET["email"]);
    $token = $connection->real_escape_string($_GET["token"]);

    $data = $connection->query("select id from user where email = '$email' and token = '$token';");

    if ($data->num_rows>0)
    {
      $str  = "de5r6tv7yb8nuy7t67r576vt87by95ex7cr6vt8yrtcfygvut7de5s4wex5cr6vt7b";
      $str = str_shuffle($str);
      $str = substr($str,0,15);
      $password = $str;

      $connection->query("update user set password = '$password' , token = '' where email = '$email' ;");



      echo "this is your new passowrd  is :$password";
    }else {

      echo "Please check your link";
    }
}else
{

  echo "na nigga you fake";
}
 ?>
