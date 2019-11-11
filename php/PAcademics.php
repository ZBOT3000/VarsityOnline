<?php
  require 'conn.php';
  session_start();
  $schoolName = $_POST["SN"];
  $grade= $_POST["CG"];
  $HL =  $_POST["HL"];
  $FAL= $_POST["FAL"];
  $Mathematics = $_POST["Mathematics"];
  $Subject1=$_POST["Subject1"];
  $Subject2 = $_POST["Subject2"];
  $Subject3=$_POST["Subject3"];

  $HLMark  = $_POST["HLMark"];
  $FALMark =$_POST["FALMark"];
  $MathMark = $_POST["MathMark"];
  $sub1Mark =$_POST["sub1Mark"];
  $sub2Mark = $_POST["sub2Mark"];
  $sub3Mark =$_POST["sub3Mark"];
  $LOMark = $_POST["LOMark"];
  $ID=(int)$_SESSION['user_id'];

  $mysql_qry2="select * from current_academics where USER_ID like $ID";
  $result2 = mysqli_query($conn,$mysql_qry2);

  if ( mysqli_num_rows( $result2 ) > 0 )
  {
    $mysql = "update current_academics set SCHOOL_NAME='$schoolName',CURRENT_GRADE='$grade',HOME_LAN='$HL',HOME_LAN_MARK=$HLMark,FA_LAN='$FAL',
    FA_LAN_MARK=$FALMark,MATH_SUBJ='$Mathematics',MATH_SUBJ_MARK=$MathMark,SUBJ1='$Subject1',
    SUBJ1_MARK=$sub1Mark,SUBJ2='$Subject2',SUBJ2_MARK=$sub2Mark,
    SUBJ3='$Subject3',SUBJ3_MARK=$sub3Mark,LO_MARK=$LOMark WHERE USER_ID = $ID;";


    $result = mysqli_query($conn,$mysql);

    if  ($result)
    {
      if($HL == $FAL)
      {
        echo "YOUR HOME AND FIRST ADDITIONAL LANGUAGE IS THE SAME PLEASE RE-ENTER YOUR DETAILS.";
        echo "<p><a href='Academics.php'>CLICK HERE TO GO BACK</a></p>";
      }else if ($Subject1==$Subject2 || $Subject1==$Subject3 || $Subject2==$Subject3 )
      {
        echo "YOUR SUBJECT CHOICES MATCH PLEASE RE-ENTER YOUR DETAILS";
        echo "<p><a href='Academics.php'>CLICK HERE TO GO BACK</a></p>";
      }
      else
      {
        echo "YOU HAVE SUCCESSFULY CAPTURED YOUR ACADEMICS <br>";
        echo "<p><a href='dashboard.php'>CLICK HERE TO GO BACK</a></p>";
      }

    }
    else
    {
        echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
        echo "<p><a href='Academics.php'>CLICK HERE TO GO BACK</a></p>";
    }

  }
  else {
    $mysql_qry="insert into current_academics (USER_ID, SCHOOL_NAME, CURRENT_GRADE, HOME_LAN, HOME_LAN_MARK, FA_LAN, FA_LAN_MARK, MATH_SUBJ, MATH_SUBJ_MARK, SUBJ1, SUBJ1_MARK, SUBJ2, SUBJ2_MARK, SUBJ3, SUBJ3_MARK, LO_MARK)
     values ($ID , '$schoolName', '$grade', '$HL', $HLMark, '$FAL', $FALMark, '$Mathematics', $MathMark, '$Subject1',
     $sub1Mark, '$Subject2', $sub2Mark, '$Subject3', $sub3Mark, $LOMark);";

  //INSERT INTO `current_academics` (USER_ID`, `SCHOOL_NAME`, `CURRENT_GRADE`, `HOME_LAN`, `HOME_LAN_MARK`, `FA_LAN`, `FA_LAN_MARK`, `MATH_SUBJ`, `MATH_SUBJ_MARK`, `SUBJ1`, `SUBJ1_MARK`, `SUBJ2`, `SUBJ2_MARK`, `SUBJ3`, `SUBJ3_MARK`, `LO_MARK`)
     $result = mysqli_query($conn,$mysql_qry);
    if  ($result)
    {
      if($HL == $FAL)
      {
        echo "YOUR HOME AND FIRST ADDITIONAL LANGUAGE IS THE SAME PLEASE RE-ENTER YOUR DETAILS.";
        echo "<p><a href='Academics.php'>CLICK HERE TO GO BACK</a></p>";
      }else if ($Subject1==$Subject2 || $Subject1==$Subject3 || $Subject2==$Subject3 )
      {
        echo "YOUR SUBJECT CHOICES MATCH PLEASE RE-ENTER YOUR DETAILS";
        echo "<p><a href='Academics.php'>CLICK HERE TO GO BACK</a></p>";
      }
      else
      {
        echo "YOU HAVE SUCCESSFULY CAPTURED YOUR ACADEMICS <br>";
        echo "<p><a href='dashboard.php'>CLICK HERE TO GO BACK</a></p>";
      }
    }
    else
    {
        echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
        echo "<p><a href='Academics.php'>CLICK HERE TO GO BACK</a></p>";
    }
  }




 ?>
