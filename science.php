<?php
session_start();
$ID = $_SESSION['user_id'];



  require 'conn.php';

  if(isset($_POST['opt1'])){
  //  echo "Through";
    $opt1 = $_POST['opt1'];

  $mysql_qry ="insert into schoolDetails (OPT1) VALUES ($opt1) WHERE USER_ID = '$ID';  ";
  $result = mysqli_query($conn,$mysql_qry);
  if ($result)
  {
    //header('Location: Science.html');
    echo "<p>SUCCESSFULY LOADED</p>";
  }else {
    echo "  <h1 style='color:red'>Unseccessful </h1> ";
    echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Science.html> CLICK HERE TO GO BACK </a>'</p>";
  }
}

   if($_POST['opt2'])
    {
      $opt2 = $_POST['opt2'];
    $mysql_qry3 ="insert into schoolDetails (OPT2) VALUES ($opt2) WHERE USER_ID = '$ID';  ";
      $result3 = mysqli_query($conn,$mysql_qry3);
      if ($result3)
      {
        echo "<p>SUCCESSFULY LOADED</p>";
        //  header('Location: Engineering.html');
      }else {
        echo "  <h1 style='color:red'>Unseccessful </h1> ";
        echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Science.html> CLICK HERE TO GO BACK </a>'</p>";
      }

    }

    if($_POST['opt3'])
     {
       $opt3 = $_POST['opt3'];
     $mysql_qry4 ="insert into schoolDetails (OPT3) VALUES ($opt3) WHERE USER_ID = '$ID';  ";
       $result4 = mysqli_query($conn,$mysql_qry4);
       if ($result4)
       {
         echo "<p>SUCCESSFULY LOADED</p>";
         //  header('Location: Engineering.html');
       }else {
         echo "  <h1 style='color:red'>Unseccessful </h1> ";
         echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Science.html> CLICK HERE TO GO BACK </a>'</p>";
       }

     }



?>
