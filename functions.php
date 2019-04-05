<?php
  function generateNewString($len = 10){
    $token = "hftdctTCFYGVUH23tsdfssfgdfsg5645657TVTC";
    $token = str_shuffle($token);
    $token = substr($token,0,$len);

    return $token;
  }

  function redirectToLogin(){
    header("location: http://vor.lbmsolutions.co.za/login.html");
  }
 ?>
