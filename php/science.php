<?php
session_start();
$ID = (int)$_SESSION['user_id'];
//echo $_SESSION['user_id'];


  require 'conn.php';

  if(isset($_POST['opt1'])){
  //  echo "Through";
    $opt1 = $_POST['opt1'];

  $mysql_qry ="update schoolDetails SET OPT1 = '$opt1' WHERE user_id = $ID;";
  $result = mysqli_query($conn,$mysql_qry);

  $mysql_qrya ="insert into COURSES (user_id,courses)VALUES ($ID, '$opt1');";
  $resulta = mysqli_query($conn,$mysql_qrya);
  if ($result)
  {
    header('Location: Dashboard.php');
    echo "<p>SUCCESSFULY LOADED</p>";


  }else {
    echo "  <h1 style='color:red'>Unseccessful </h1> ";
    echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Science.html> CLICK HERE TO GO BACK </a>'</p>";
  }
}

   if($_POST['opt2'])
    {
      $opt2 = $_POST['opt2'];
    $mysql_qry3 ="update schoolDetails SET OPT2 = '$opt2' WHERE user_id = $ID;";
      $result3 = mysqli_query($conn,$mysql_qry3);
      $mysql_qryb ="insert into COURSES (user_id,courses)VALUES ($ID, '$opt2');";
      $resultb = mysqli_query($conn,$mysql_qryb);
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
     $mysql_qry4 ="update schoolDetails SET OPT3 = '$opt3' WHERE user_id = $ID;";
       $result4 = mysqli_query($conn,$mysql_qry4);

       $mysql_qryc ="insert into COURSES (user_id,courses)VALUES ($ID, '$opt1');";
       $resultc = mysqli_query($conn,$mysql_qryc);
       if ($result4)
       {
         echo "<p>SUCCESSFULY LOADED</p>";
         echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Dashboard.html> CLICK HERE TO GO BACK </a></p>";
         //  header('Location: Engineering.html');
       }else {
         echo "  <h1 style='color:red'>Unseccessful </h1> ";
         echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/Science.html> CLICK HERE TO GO BACK </a>'</p>";
       }

     }



?>
