<?php
session_start();
$ID = $_SESSION['user_id'];



  require 'conn.php';

  if(isset($_POST['chkSCI'])){
  //  echo "Through";
    $sci = $_POST['chkSCI'];

  $mysql_qry ="INSERT INTO schoolDetails (FACULTY,USER_ID) VALUES ('$sci','$ID'); ";
  $result = mysqli_query($conn,$mysql_qry);
  if ($result)
  {
    header('Location: Science.html');
  }else {
    echo "  <h1 style='color:red'>Unseccessful </h1> ";
    echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/School.html> CLICK HERE TO GO BACK </a>'</p>";
  }
}

   if($_POST['chkENG'])
    {
      $eng = $_POST['chkENG'];
      $mysql_qry3 ="INSERT INTO schoolDetails (FACULTY,USER_ID) VALUES ('$eng','$ID'); ";
      $result3 = mysqli_query($conn,$mysql_qry3);
      if ($result3)
      {
          header('Location: Engineering.html');
      }else {
        echo "  <h1 style='color:red'>Unseccessful </h1> ";
        echo "<p><a href='http://lamp.ms.wits.ac.za/~s1434995/VarsityOnline/School.html> CLICK HERE TO GO BACK </a>'</p>";
      }

    }



?>
