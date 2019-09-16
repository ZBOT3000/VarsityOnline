<?php
session_start();
require 'functions.php';
if (isset($_SESSION['username']))
{
  $_SESSION["HOME_LAN"] = "GO TO THE HIGHSCHOOL INFO BAR";
  $_SESSION["FA_LAN"] = "- AND COMPLETE THE Academics SECTION";
  $_SESSION["MATH_SUBJ"] = "";
  $_SESSION["SUBJ1"]= "";
  $_SESSION["SUBJ2"] = "";
  $_SESSION["SUBJ3"]= "";

  $_SESSION["HOME_LAN_MARK"]  = "";
  $_SESSION["FA_LAN_MARK"] = "";
  $_SESSION["MATH_SUBJ_MARK"] = "";
  $_SESSION["SUBJ1_MARK"] = "";
  $_SESSION["SUBJ2_MARK"] = "";
  $_SESSION["SUBJ3_MARK"] = "";
  $_SESSION["LO_MARK"] = "";
  $_SESSION['WITS-APS'] =0;
  $_SESSION["UJ-APS"]=0;
  $_SESSION["UP-APS"]=0;
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


  if ( mysqli_num_rows( $result ) > 0 ){
    $row = $result->fetch_assoc();
    $row = implode(" ",$row)." ";
    $_SESSION['AStatus'] = $row;
  } else {
    $_SESSION['AStatus'] = "Incompleted";
  }

if ( mysqli_num_rows( $result2 ) > 0 )
{
  $row2 = $result2->fetch_assoc();
  $row2 = implode(" ",$row2)." ";
  $_SESSION['Dstatus'] = $row2;
}else {
  $_SESSION['Dstatus'] = "Incompleted";
}
if ( mysqli_num_rows( $result3 ) > 0 )
{
  $row3 = $result3->fetch_assoc();
  $row3 = implode(" ",$row3)." ";
  $_SESSION['Parentalstatus'] = $row3;
}else {
  $_SESSION['Parentalstatus'] ="Incompleted";
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
  $_SESSION["WITS-APS"]=APS($_SESSION["FA_LAN_MARK"])+APS($_SESSION["SUBJ2_MARK"])+APS($_SESSION["SUBJ3_MARK"])+APS($_SESSION["SUBJ1_MARK"]);
  $_SESSION["WITS-APS"] = $_SESSION["WITS-APS"]+APS_LO($_SESSION["LO_MARK"])+APS_EM($_SESSION["MATH_SUBJ_MARK"])+APS_EM($_SESSION["HOME_LAN_MARK"]);
  //UJ APS
  $_SESSION["UJ-APS"] = +UJAPS($_SESSION["HOME_LAN_MARK"])+UJAPS($_SESSION["FA_LAN_MARK"])+UJAPS($_SESSION["MATH_SUBJ_MARK"])+UJAPS($_SESSION["SUBJ2_MARK"])+UJAPS($_SESSION["SUBJ3_MARK"])+UJAPS($_SESSION["SUBJ1_MARK"]);
  //UP APS which is same as UJ
  $_SESSION["UP-APS"] = $_SESSION["UJ-APS"];
}

$WitsAps = $_SESSION["WITS-APS"];
$UJAps = $_SESSION["UJ-APS"];
$UPAps = $_SESSION["UP-APS"];
$_SESSION["appStatus"] = "wits_application";

}else {
  header('Location: WelcomePage.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
                                      <a href="Demographics.php">Demographics</a>
                                  </li>
                                  <li>
                                      <a href="ParentalDetail.php">Parental Details</a>
                                  </li>
                                  <li>
                                      <a href="Academics.php">Academics</a>
                                  </li>
                                  <li>
                                      <a href="school.html">Faculty</a>
                                  </li>
                                  <li>
                                    <a href="test.php">test</a>
                                  </li>
                              </ul>
                          </li>


                          <!--APPLICATION-->

                          <li class="has-sub">
                            <a href="uploadDoc.html">
                              <i class="fas fa-copy"></i>
                              <span class="header3-sub-list list-unstyled"></span>Application</a>
                              <ul class ="header3-sub-list list-unstyled">
                                <li>
                                    <a href="wishlist.html">Add To WishList</a>
                                </li>
                                <li>
                                    <a href="wishliststatus.html">Show WishList</a>
                                </li>
                                <li>
                                    <a href="witsApplication.php">Wits Application</a>
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
                                            <a href="#" id="witsa">WITS APS</a>
                                              <script>
                                                var elm=document.querySelector("#witsa");
                                                elm.addEventListener("click", function (){
                                                var num=1;
                                              });
                                              </script>
                                          </th>
                                          <th>
                                            <?php
                                              echo $_SESSION["WITS-APS"];
                                             ?>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th s>
                                            <a href="#" id="uja" (click)="ujLoad()">UJ APS</a>
                                            <script>
                                              var elm=document.querySelector("#uja");
                                              elm.addEventListener("click", function (){
                                              var num=2;
                                            });
                                            </script>
                                          </th>
                                          <th>
                                            <?php
                                            echo $_SESSION["UJ-APS"];
                                            ?>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <a href="#" id="upa">UP APS</a>

                                          </th>
                                          <th>
                                            <?php
                                            echo $_SESSION["UP-APS"];
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
                                                <td>
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

            <!-- THIS IS THE SUGGESTION SECTION-->
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
                                          <th>First Choice Suggestion
                                          </th>
                                          <th>
                                            FC1
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                          </th>
                                          <th>
                                            <?php
                                            echo $_SESSION["UJ-APS"];
                                            ?>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <a href="#" id="upa">UP APS</a>

                                          </th>
                                          <th>
                                            <?php
                                            echo $_SESSION["UP-APS"];
                                             ?>
                                          </th>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                          </div>
                          <!-- END WITS Section-->
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
                                                <td>
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



            <!-- DATA TABLE-->
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
                                                      echo "Incompleted";
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
                                                      echo "Incompleted";
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
                                                      echo "Incompleted";
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
            <!-- END DATA TABLE-->
            <p></p>

            <!-- UNIVERSITY APPLICATION STATUS-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35"> UNIVERSITY APPLICATION REPORT </h3>
                            <div class="table-data__tool">
                                  <div class="table-data__tool-left">
                                      <div class="rs-select2--light rs-select2--md">
                                          <select class="js-select2" name="ApplicationStatus">
                                              <option selected="selected">Select University</option>
                                              <option value="wits_application">Wits</option>
                                              <option value="UJ_Application">UJ</option>
                                              <option value="up">UP</option>
                                              <option value="uct">UCT</option>
                                          </select>
                                          <div class="dropDownSelect2"></div>
                                      </div>
                                      <button onclick="appStatusProcess()" class="btn au-btn--green ">Change</button>
                                  </div>
                              </div>
                                <div class="table-responsive table-responsive-data2">
                                  <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Choice</th>
                                            <th>Course</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr class="spacer"></tr>
                                      <tr class="tr-shadow">
                                          <td>1st</td>
                                          <td id ="1choice">
                                          <?php require 'conn.php';
                                          $c1 = $_SESSION["appStatus"];
                                          $mysql_qry = "select COURSE1 FROM $c1 WHERE USER_ID = '$ID'; ";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          $un = implode(" ",$row);
                                          echo $un?></td>
                                          <td>pending</td>
                                      </tr>
                                      <tr class="tr-shadow">
                                          <td>2nd</td>
                                          <td id ="1choice"><?php require 'conn.php';
                                          $mysql_qry = "select COURSE2 FROM $c1 WHERE USER_ID = '$ID'; ";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          $un = implode(" ",$row);
                                          echo $un?></td>
                                          <td>Pending</td>
                                      </tr>
                                      <tr class="tr-shadow">
                                          <td>3rd</td>
                                          <td id ="1choice"><?php require 'conn.php';
                                          $mysql_qry = "select COURSE3 FROM $c1 WHERE USER_ID = '$ID'; ";
                                          $result2 = mysqli_query($conn,$mysql_qry);
                                          $row = $result2->fetch_assoc();
                                          $un = implode(" ",$row);
                                          echo $un?></td>
                                          <td>Pending</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </section>
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 VarsityOnline. All rights reserved.</p>
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
    <script type="text/javascript" src="Pie.js"></script>

    <script src="pie.min.js"></script>
 				<script>
        var witsAps = <?php echo $WitsAps ?>;
        var ujAps = <?php echo $UJAps ?>;
        var upAps = <?php echo $UPAps ?>;
        var num=1;

        function ujLoad(){
          num=2;
          document.canvas.window.reload();
        }

        function witsLoad(){
          num=1;
        }

        function upLoad(){
          num=3;

        }

        var elm=document.querySelector("#upa");
          elm.addEventListener("click", function (){
          var APS = upAps;
        });


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

    <script>
    document.getElementById("ApplicationStatus").addEventListener("click", appStatusProcess);

    function appStatusProcess()
    {

      if (document.getElementById("appStatusProcess").value == "wits_application")
      {
        <?php
        $_SESSION["appStatus"] = "wits_application";
         ?>
      } else if (document.getElementById("appStatusProcess").value == "UJ_Application")
      {
        <?php
        $_SESSION["appStatus"] = "uj_application";
         ?>

      }else{
        document.getElementById("1choice").style.color = "red";
      }
    }
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>


</body>

</html>
<!-- end document-->
