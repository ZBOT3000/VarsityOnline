<?php
session_start();
require 'functions.php';
if (isset($_SESSION['username']))
{
  $_SESSION["HOME_LAN"] = "GO TO THE PERSONAL DETAILS BAR";
  $_SESSION["FA_LAN"] = "AND COMPLETE THE Academics SECTION";
  $_SESSION["MATH_SUBJ"] = "";
  $_SESSION["SUBJ1"]= "";;
  $_SESSION["SUBJ2"] = "";
  $_SESSION["SUBJ3"]= "";

  $_SESSION["HOME_LAN_MARK"]  = "";
  $_SESSION["FA_LAN_MARK"] = "";
  $_SESSION["MATH_SUBJ_MARK"] = "";
  $_SESSION["SUBJ1_MARK"] = "";
  $_SESSION["SUBJ2_MARK"] = "";
  $_SESSION["SUBJ3_MARK"] = "";
  $_SESSION["LO_MARK"] = "";

  $_SESSION["WITS-APS"] =0;
  $_SESSION["UJ-APS"] = 0;
  $_SESSION["UP-APS"]=0;
  $_SESSION["UCT-APS"]=0;
$str = $_SESSION['username'];
$str = preg_replace('/\D/', '', $str);
$_SESSION['user_id']=$str;

require 'conn.php';
$ID=(int)$_SESSION['user_id'];
$mysql_qry="select STATUS from current_academics where USER_ID like $ID;";
$mysql_qry2="select STATUS from demographics where USER_ID like $ID;";
$mysql_qry3="select STATUS from parentaldetails where USER_ID like $ID;";
$result = mysqli_query($conn,$mysql_qry);
$result2 = mysqli_query($conn,$mysql_qry2);
$result3 = mysqli_query($conn,$mysql_qry3);


  if ( mysqli_num_rows( $result ) > 0 )
  {
    $row = $result->fetch_assoc();
    $row = implode(" ",$row)." ";
    $_SESSION['AStatus'] = $row;
  } else {
    $_SESSION['AStatus'] = "Incomplete";
  }

if ( mysqli_num_rows( $result2 ) > 0 )
{
  $row2 = $result2->fetch_assoc();
  $row2 = implode(" ",$row2)." ";
  $_SESSION['Dstatus'] = $row2;
}else {
  $_SESSION['Dstatus'] = "Incomplete";
}
if ( mysqli_num_rows( $result3 ) > 0 )
{
  $row3 = $result3->fetch_assoc();
  $row3 = implode(" ",$row3)." ";
  $_SESSION['Parentalstatus'] = $row3;
}else {
  $_SESSION['Parentalstatus'] ="Incomplete";
}

$mysql_qry4 = "select * from current_academics where user_id=$ID;";
$result4 = mysqli_query($conn,$mysql_qry4);
$output_array = array();
$rows = [];


if ( mysqli_num_rows( $result4 ) > 0 )
{

  while($row = mysqli_fetch_array($result4))
  {
      $rows[] = $row;
  }
  //echo print_r($rows,true);


  $_SESSION["HOME_LAN"] =  $rows[0]["HOME_LAN"];
  $_SESSION["FA_LAN"] = $rows[0]["FA_LAN"];
  $_SESSION["MATH_SUBJ"] = $rows[0]["MATH_SUBJ"];
  $_SESSION["SUBJ1"]= $rows[0]["SUBJ1"];
  $_SESSION["SUBJ2"] = $rows[0]["SUBJ2"];
  $_SESSION["SUBJ3"]= $rows[0]["SUBJ3"];

  $_SESSION["HOME_LAN_MARK"]  = $rows[0]["HOME_LAN_MARK"];
  $_SESSION["FA_LAN_MARK"] = $rows[0]["FA_LAN_MARK"];
  $_SESSION["MATH_SUBJ_MARK"] = $rows[0]["MATH_SUBJ_MARK"];
  $_SESSION["SUBJ1_MARK"] = $rows[0]["SUBJ1_MARK"];
  $_SESSION["SUBJ2_MARK"] = $rows[0]["SUBJ2_MARK"];
  $_SESSION["SUBJ3_MARK"] = $rows[0]["SUBJ3_MARK"];
  $_SESSION["LO_MARK"] = $rows[0]["LO_MARK"];
    //Wits APS
  $_SESSION["WITS-APS"]=APS($_SESSION["FA_LAN_MARK"])+APS($_SESSION["SUBJ2_MARK"])+APS($_SESSION["SUBJ3_MARK"])+APS($_SESSION["SUBJ1_MARK"]);
  $_SESSION["WITS-APS"] = $_SESSION["WITS-APS"]+APS_LO($_SESSION["LO_MARK"])+APS_EM($_SESSION["MATH_SUBJ_MARK"])+APS_EM($_SESSION["HOME_LAN_MARK"]);
  // UJ and UP APS
  $_SESSION["UJ-APS"]=UJAPS($_SESSION["FA_LAN_MARK"])+UJAPS($_SESSION["SUBJ2_MARK"])+UJAPS($_SESSION["SUBJ3_MARK"])+UJAPS($_SESSION["SUBJ1_MARK"]);
  $_SESSION["UJ-APS"] = $_SESSION["UJ-APS"]+UJAPS($_SESSION["MATH_SUBJ_MARK"])+UJAPS($_SESSION["HOME_LAN_MARK"]);

  $_SESSION["UP-APS"]=$_SESSION["UJ-APS"];

  //Uct APS
  $_SESSION["UCT-APS"]= $_SESSION["FA_LAN_MARK"]+$_SESSION["SUBJ2_MARK"]+$_SESSION["SUBJ3_MARK"]+$_SESSION["SUBJ1_MARK"];
  $_SESSION["UCT-APS"] = $_SESSION["UCT-APS"]+$_SESSION["MATH_SUBJ_MARK"]+$_SESSION["HOME_LAN_MARK"];
  $_SESSION["UCT-APS"] = $_SESSION["UCT-APS"] / 15;
  $_SESSION["UCT-APS"] = round($_SESSION["UCT-APS"]);
}



}else {
  header('Location: WelcomePage.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- suggestion box ahjax -->
    <script>
          function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","sBox.php?q="+str,true);
                xmlhttp.send();
            }
          }
          </script>
    <!-- suggestion box ahjax -->

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition" onload="somefunc()">


    <div class="page-wrapper">
      <!-- HEADER DESKTOP-->
            <header class="header-desktop3 d-none d-lg-block">
                <div class="section__content section__content--p35">
                    <div class="header3-wrap">
                        <div class="header__logo">
                            <a href="#">
                                <h1><a href="dashboard.php" style="color:white;" >Varsity Online</a></h1>
                            </a>

                        </div>

                        <h2>
                        <div class="header__navbar">

                          <!-- individual users -->
                            <ul class="list-unstyled">
                                <li class="has-sub">
                                    <a href="#">
                                        <i class="fas fa-copy"></i>
                                        <span class="bot-line"></span>Personal Details</a>
                                    <ul class="header3-sub-list list-unstyled">
                                        <li>
                                            <a href="demographics.php">Demographics</a>
                                        </li>
                                        <li>
                                            <a href="ParentalDetail.php">Parental Details</a>
                                        </li>
                                        <li>
                                            <a href="Academics.php">Academics</a>
                                        </li>
                                        <li>
                                          <a href="../html/uploadDoc.html">Upload Documents</a>
                                        </li>
                                    </ul>
                                </li>

                                <!--APPLICATION-->

                                <li class="has-sub">
                                  <a href="../html/uploadDoc.html">
                                    <i class="fas fa-copy"></i>
                                    <span class="header3-sub-list list-unstyled"></span>Application</a>
                                    <ul class ="header3-sub-list list-unstyled">
                                      <li>
                                          <a href="../WITS/witsAppProcess.php">Wits Application</a>
                                      </li>
                                      <li>
                                          <a href="../UP/upAppProcess.php">UP Application</a>
                                      </li>
                                      <li>
                                          <a href="../UJ/ujAppProcess.php">UJ Application</a>
                                      </li>
                                      <li>
                                          <a href="../UCT/uctAppProcess.php">UCT Application</a>
                                      </li>
                                    </ul>
                                </li>

                                <!-- Careers Sessions -->
                                <li class="has-sub">
                                  <a href="submitPage.php">
                                    <i class="fas fa-copy"></i>
                                    <span class="header3-sub-list list-unstyled"></span>Career</a>
                                    <ul class ="header3-sub-list list-unstyled">
                                      <li>
                                          <a href="../php/interests.php">Select Interests</a>
                                      </li>
                                      <li>
                                        <a href="../php/Career.html">Career Information</a>
                                      </li>
                                      <li>
                                        <a href="upEngineeringCurriculum.html">Engineering Curriculum</a>
                                      </li>
                                      <li>
                                        <a href="upScienceCurriculum.html">Science Curriculum</a>
                                      </li>
                                      <li>
                                        <a href="upHumanitiesCurriculum.html">Humanities Curriculum</a>
                                      </li>
                                      <li>
                                        <a href="upCommerceCurriculum.html">Commerce Curriculum</a>
                                      </li>
                                    </ul>
                                </li>

                                <!-- submit Sessions -->
                                <li class="has-sub">
                                  <a href="submitPage.php">
                                    <i class="fas fa-copy"></i>
                                    <span class="header3-sub-list list-unstyled"></span>Submit</a>
                                </li>

                                <li class="has-sub">
                                  <a href="LogOut.php">
                                    <i class="fas fa-copy"></i>
                                    <span class="header3-sub-list list-unstyled"></span>Log out</a>
                                </li>
                            </ul>
                        </div>
                      </h2>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

        <!-- PAGE CONTENT-->

        <div class="page-content--bgf7">
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-2">WELCOME
                            <?php
                              $str = $_SESSION['username'];
                              echo $str;
                             ?>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">SCHOOLING SECTION</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                          <!-- APS Section-->
                          <div class="top-campaign">
                              <h3 class="title-3 m-b-30">APS SCORES</h3>
                              <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        <tr>
                                          <th>
                                            <a href="#" onclick="witsLa()">WITS APS</a>
                                          </th>
                                          <th>
                                            <?php
                                              echo $_SESSION["WITS-APS"];
                                             ?>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <a href="#" onclick="ujLa()">UJ APS</a>
                                          </th>
                                          <th>
                                            <?php
                                            echo $_SESSION["UJ-APS"];
                                            ?>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <a href="#" onclick="upLa()">UP APS</a>
                                          </th>
                                          <th>
                                            <?php
                                            echo $_SESSION["UP-APS"];
                                             ?>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <a href="#" onclick="upLa()">UCT APS</a>
                                          </th>
                                          <th>
                                            <?php
                                            echo $_SESSION["UCT-APS"];
                                             ?>
                                          </th>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                          </div>
                          <!-- END APS Section-->
                      </div>
                        <!-- Academics Section-->
                        <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">High School Academics</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <tr>
                                                <td contenteditable='true'>
                                                    <?php
                                                    echo  $_SESSION["HOME_LAN"];
                                                     ?>
                                                </td>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["HOME_LAN_MARK"];
                                                   ?>
                                                  %</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  FAL -
                                                  <?php
                                                  echo  $_SESSION["FA_LAN"];
                                                   ?>
                                                </td>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["FA_LAN_MARK"];
                                                   ?>
                                                  %</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["MATH_SUBJ"];
                                                   ?>
                                                </td>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["MATH_SUBJ_MARK"];
                                                   ?>
                                                  %</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["SUBJ1"];
                                                   ?>
                                                </td>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["SUBJ1_MARK"];
                                                   ?>
                                                  %</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["SUBJ2"];
                                                   ?>
                                                </td>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["SUBJ2_MARK"];
                                                   ?>
                                                  %</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["SUBJ3"];
                                                   ?>
                                                </td>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["SUBJ3_MARK"];
                                                   ?>
                                                  %</td>
                                            </tr>
                                            <tr>
                                                <td>Life Orientation
                                                </td>
                                                <td>
                                                  <?php
                                                  echo  $_SESSION["LO_MARK"];
                                                   ?>
                                                  %</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="chart-percent-2">
                              <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                            <!-- END CHART PERCENT-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- SUGGESTION CHART-->
            <section>
                <form>
                <select name="users" onchange="showUser(this.value)">
                <option value="">Select Varsity To see Suggestions:</option>
                <option value="1">University of the Witwatersrand</option>
                <option value="2">University of Pretoria</option>
                <option value="3">University of Johanessburg</option>
                <!--<option value="4 ">University of Cape Town</option>-->

                </select>
                </form>
                <br>
              <div ><b>Suggested Courses</b></div>
              <div id="txtHint"><b>***********************************</b></div>
            </section>
            <!-- END SUGGESTION CHART-->
            <!-- Information TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Information Status Report</h3>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Section</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- Personal Detail -->
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Parental Details</td>
                                            <td>
                                                <span class="status--process">
                                                  <?php

                                                  if (isset($_SESSION['Parentalstatus']))
                                                    {
                                                      echo $_SESSION['Parentalstatus'];
                                                    }
                                                    else {
                                                      echo "Incomplete";
                                                    }
                                                  ?>
                                                </span>
                                            </td>
                                        </tr>

                                        <!-- Demographics Section -->
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Demographics</td>
                                            <td>
                                                <span class="status--process">
                                                  <?php

                                                  if (isset($_SESSION['Dstatus']))
                                                    {
                                                      echo $_SESSION['Dstatus'];
                                                    }
                                                    else {
                                                      echo "Incomplete";
                                                    }
                                                  ?>
                                                </span>
                                            </td>
                                        </tr>

                                        <!-- Academics table section -->
                                        <tr class="spacer"></tr>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>Academics</td>
                                            <td>
                                                <span class="status--process">
                                                  <?php

                                                  if (isset($_SESSION['AStatus']))
                                                    {
                                                      echo $_SESSION['AStatus'];
                                                    }
                                                    else {
                                                      echo "Incomplete";
                                                    }
                                                  ?>
                                                  </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Information TABLE-->


            <!-- UNIVERSITY APPLICATION STATUS-->
            <section>
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                      <h3 class="title-5 m-b-35">UNIVERSITY APPLICATION Report</h3>
                      <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                                  <thead>
                                      <tr>
                                          <th></th>
                                          <th>First Choice</th>
                                          <th>Second Choice</th>
                                          <th>Third Choice</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td >WITS</td>
                                        <td id ="W1choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $mysql_qry="select course1 from wits_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W2choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $mysql_qry="select course2 from wits_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W3choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $mysql_qry="select course3 from wits_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                    </tr>

                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td>UJ</td>
                                        <td id ="W1choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];

                                          $mysql_qry="select course1 from uj_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W2choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course2 from uj_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W3choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course3 from uj_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                    </tr>

                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td>UCT</td>
                                        <td id ="W1choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course1 from uct_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W2choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course2 from uct_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W3choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course3 from uct_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                    </tr>

                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">
                                        <td>UP</td>
                                        <td id ="W1choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course1 from up_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W2choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course2 from up_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }
                                           ?>
                                        </td>
                                        <td id ="W3choice">
                                          <?php
                                          $ID=(int)$_SESSION['user_id'];
                                          $un = "";
                                          $mysql_qry="select course3 from up_application where USER_ID like $ID;";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();

                                          if(is_null($row))
                                          {
                                            echo "";
                                          } else{
                                            $un = implode(" ",$row);
                                            echo $un ;
                                          }



                                           ?>
                                        </td>
                                    </tr>
                                  </tbody>
                                </table>
                      </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- END UNIVERSITY APPLICATION STATUS -->


            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 LBMSolutions. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

    <!-- pie chart -->
    <script src="../pie.min.js"></script>

 				<script>
				  function somefunc() {
				    var formData = new FormData();
				    var httpReq = new XMLHttpRequest();
				    httpReq.open("POST", "status.php", false);
				    httpReq.onload = function() {
					//alert(this.responseText);
					response = JSON.parse(this.responseText);

					  var a = document.getElementById("00");
            var b = document.getElementById("01");
					  a.innerHTML = response[0].courses ;
            b.innerHTML = response[0].status;

            var c = document.getElementById("10");
            var d = document.getElementById("11");
					  c.innerHTML = response[1].courses ;
            d.innerHTML = response[1].status;

            var e = document.getElementById("20");
            var f = document.getElementById("21");
					  e.innerHTML = response[2].courses ;
            f.innerHTML = response[2].status;
            if (a.val()=='accepted')
            {
              document.write(a.fontcolor( "green"));
            }


				    };
				    httpReq.send(formData);

				  }</script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <!-- Pie Chart js -->
    <script>

init();

var num = 1;
var Witsaps = <?php echo $_SESSION["WITS-APS"];?>;
var UJaps = <?php echo $_SESSION["UJ-APS"];?>;
var UPaps = <?php echo $_SESSION["UP-APS"];?>;

function init() {
var data = [
          {label:  "COMPUTER SCIENCE ", y: 40, exploded: true,},
          {label: "Biological Sciences", y: 40,exploded: true,},
          {label: "Mathematics of Finance", y : 42,exploded: true,},
          {label:  "Astronomy", y :43,exploded: true,},
          {label:  "Nuclear Sciences", y: 43,exploded: true,},
          {label:  "Chemistry", y: 43,exploded: true,},
          {label:  "Chemical Engineering", y: 42,exploded: true,},
          {label:  "Civil Engineering", y: 36,exploded: true,},
          {label:  "Electrical Engineering", y: 36,exploded: true,},
          {label:  "Mechanical Engineering", y: 40,exploded: true,},
          {label:  "Mining Engineering", y: 40,exploded: true},
          {label:  "Aeronautical Engineering", y: 40,exploded: true,}
        ]



  var ac = num;
  if(ac==1){
    var Aps = Witsaps;
  }else if(ac==2){
    var Aps = UJaps;
	data = [
          {label:  "APPLIED MATHEMATICS AND COMPUTER SCIENCE ", y: 31, exploded: true,},
          {label: "BIOCHEMISTRY AND BOTANY", y: 30,exploded: true,},
          {label: "MATHEMATICS AND MATHEMATICAL STATISTICS", y : 33,exploded: true,},
          {label:  "ZOOLOGY AND BIOCHEMISTRY", y :30,exploded: true,},
          {label:  "PHYSICS AND MATHEMATICS", y: 31,exploded: true,},
          {label:  "CHEMICAL ENGINEERING", y: 30,exploded: true,},
          {label:  "MINING ENGINEERING", y: 23,exploded: true,},
          {label:  "CIVIL ENGINEERING", y: 32,exploded: true,},
          {label:  "ELECTRICAL ENGINEERING", y: 32,exploded: true,},
          {label:  "ACCOUNTING (CA)", y: 33,exploded: true,},
          {label:  "FINANCE", y: 28,exploded: true},
          {label:  "INFORMATION SYSTEMS", y: 26,exploded: true,},
	  {label: "ACCOUNTING", y : 28,exploded: true,},
          {label:  "ECONOMICS AND ECONOMETRICS", y :28,exploded: true,},
          {label:  "SOCIAL SCIENCES", y: 27,exploded: true,},
          {label:  "POLITICS AND INTERNATIONAL RELATIONS", y: 27,exploded: true,},
          {label:  "LANGUAGE PRACTICE", y: 27,exploded: true,},
          {label:  "POLITICS, PHILOSOPHY AND ECONOMICS", y: 27,exploded: true,},
          {label:  "FILM AND TELEVISION STUDIES", y: 27,exploded: true,}
	]

  } else if(ac==3){
    var Aps = UPaps;
	data = [
          {label:  "COMPUTER SCIENCE ", y: 30, exploded: true,},
          {label: "Biological Sciences", y: 32,exploded: true,},
          {label: "Mathematics of Finance", y : 30,exploded: true,},
          {label:  "APPLIED MATHEMATICS", y :34,exploded: true,},
          {label:  "PHYSICAL SCIENCE", y: 34,exploded: true,},
          {label:  "Chemistry", y: 34,exploded: true,},
          {label:  "POLITICAL SCIENCE", y: 30,exploded: true,},
          {label:  "FINE ARTS", y: 30,exploded: true,},
          {label:  "LANGUAGES", y: 30,exploded: true,},
          {label:  "LAW", y: 30,exploded: true,},
          {label:  "PHILOSOPHY", y: 32,exploded: true},
          {label:  "POLITICS", y: 32,exploded: true,},
	  {label:  "SOCIAL WORK", y: 32,exploded: true,},
          {label:  "MUSIC AND DRAMA", y: 32,exploded: true},
        ]
  }





for(var i=0;i<data.length;i++){
  if (Aps<data[i].y){
      data[i].color = "red";
    }
    else{
      data[i].color = "green"
    }
}


var chart = new CanvasJS.Chart("chartContainer", {
  theme: "light1",
  exportEnabled: true,
  animationEnabled: true,
  title: {
    text: "Quick Summary"
  },
  data: [{
    type: "pie",
    startAngle:90,
    toolTipContent: "<b>{label}</b>: {y}",
    dataPoints: data
  }]
});

chart.render();
}

function witsLa(){
  num=1;
  init();
}

function ujLa(){
  num=2;
  init();
}

function upLa(){
  num=3;
  init();
}

</script>


</body>

</html>
<!-- end document-->
