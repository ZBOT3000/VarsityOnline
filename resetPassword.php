<?php
if(isset($_GET["email"]) && isset($_GET["token"]))
{
    require 'conn.php';

    $email = $_GET["email"];
    $token = $_GET["token"];
    
    $mysql_qry="select * from REGISTER where email = '$email' and token = '$token';";
    $result = mysqli_query($conn,$mysql_qry);


    if (mysqli_num_rows($result)>0)
    {
        $str  = "de5r6tv7yb8nuy7t67r576vt87by95ex7cr6vt8yrtcfygvut7de5s4wex5cr6vt7b";
        $str = str_shuffle($str);
        $str = substr($str,0,15);
        $password = $str;
      
        $mysql_qry2="update REGISTER set password = '$password',token = null where email = '$email' ;";
        $result2 = mysqli_query($conn,$mysql_qry2);
        



      echo "this is your new passowrd  is :$password";
    }else {

      header("Location: http://lbmsolutions.co.za/ForgetPass.php");
      
    }
}else
{

  echo "na nigga you fake";
}
 ?>
