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

  $HLMark  =(int) $_POST["HLMark"];
  $FALMark =(int)$_POST["FALMark"];
  $MathMark = (int)$_POST["MathMark"];
  $sub1Mark =(int)$_POST["sub1Mark"];
  $sub2Mark = (int)$_POST["sub2Mark"];
  $sub3Mark = (int)$_POST["sub3Mark"];
  $LOMark = (int)$_POST["LOMark"];
  $ID=(int)$_SESSION['user_id'];

  echo $ID;

  $mysql_qry="insert into current_academics (USER_ID, SCHOOL_NAME, CURRENT_GRADE, HOME_LAN, HOME_LAN_MARK, FA_LAN, FA_LAN_MARK, MATH_SUBJ, MATH_SUBJ_MARK, SUBJ1, SUBJ1_MARK, SUBJ2, SUBJ2_MARK, SUBJ3, SUBJ3_MARK, LO_MARK)
   values ($ID , '$schoolName', '$grade', '$HL', '$HLMark', '$FAL', '$FALMark', '$Mathematics', '$MathMark', '$Subject1',
   '$sub1Mark', '$Subject2', '$sub2Mark', '$Subject3', '$sub3Mark', '$LOMark');";

//INSERT INTO `current_academics` (`CA_ID`, `USER_ID`, `SCHOOL_NAME`, `CURRENT_GRADE`, `HOME_LAN`, `HOME_LAN_MARK`, `FA_LAN`, `FA_LAN_MARK`, `MATH_SUBJ`, `MATH_SUBJ_MARK`, `SUBJ1`, `SUBJ1_MARK`, `SUBJ2`, `SUBJ2_MARK`, `SUBJ3`, `SUBJ3_MARK`, `LO_MARK`)
   $result = mysqli_query($conn,$mysql_qry);
  if  ($result)
  {
  	 echo "YOU HAVE SUCCESSFULY CAPTURED YOUR ACADEMICS <br>";
     echo "<p><a href='http://vor.lbmsolutions.co.za/index.php'>CLICK HERE TO GO BACK</a></p>";
  }
  else
  {
    	echo "SOME OF THE INFOMATION ENTERED WAS INCORRECT PLEASE RETRY AGAIN";
      echo "<p><a href='http://vor.lbmsolutions.co.za/Academics.php'>CLICK HERE TO GO BACK</a></p>";
  }

 ?>
