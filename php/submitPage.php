<?php
session_start();
$ID = (int)$_SESSION['user_id'];
require "conn.php";
$mysql_qry = "select * from demographics where user_id like '$ID' ;";
$result = mysqli_query($conn,$mysql_qry);
//-----Personal Details
$id_number = "";
$Cell = "";
$gender = "";
$dob = "";
$citizen = "";
//------ Parental details
$guardian="";
$Gname =  "";
$Gsurname =  "";
$Address =  "";
$Address2 =  "";
$race ="";
$state = "";
$City = "";
$Zip  = "";

if ( mysqli_num_rows( $result ) > 0 )
{
  while($row = mysqli_fetch_array($result))
  {
      $rows[] = $row;
  }
  $id_number = $rows[0]["ID_NUMBER"];
  $Cell = $rows[0]["CELLPHONE"];
  $gender = $rows[0]["GENDER"];
  $dob = $rows[0]["DOB"];
  $race =$rows[0]["RACE"];
  $citizen = $rows[0]["CITIZEN"];
  if($citizen =="Yes")
  {
    $citizen = "South African Citizen";
  }else{
    $citizen = "International Citizen";
  }
}

$mysql_qry2 = "select * from parentaldetails where user_id like '$ID' ;";
$result2 = mysqli_query($conn,$mysql_qry2);
if ( mysqli_num_rows( $result2 ) > 0 )
{
  while($row2 = mysqli_fetch_array($result2))
  {
      $rows2[] = $row2;
  }

  //------ Parental details
  $guardian = $row2[0]["Guardian"];
  $Gname = $rows2[0]["Gname"];
  $Gsurname = $rows2[0]["Gsurname"];
  $Address = $rows2[0]["Address"];
  $Address2 = $rows2[0]["Address2"];
  $state = $rows2[0]["State"];
  $City = $rows2[0]["City"];
  $Zip  = $rows2[0]["Zip"];


}

$mysql_qry3 = "select * from register where user_id like '$ID' ;";
$result3 = mysqli_query($conn,$mysql_qry3);
if ( mysqli_num_rows( $result3 ) > 0 )
{
  while($row3 = mysqli_fetch_array($result3))
  {
      $rows3[] = $row3;
  }

  $name  = $rows3[0]["name"];
  $surname = $rows3[0]["surname"];


}

echo $guardian;


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Main CSS-->
    <link href="css/submitPage.css" rel="stylesheet" media="all">
  </head>
  <body>
    <h1>Review Page</h1>

    <div>
      <!-- Personal Details -->
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
              <h2>Personal Details Summary</h2>
              <table data-vertable="ver1">
                <thead>
                  <tr class="row100 head">
                    <th class="column100 column1" data-column="column1">Titles</th>
                    <th class="column100 column2" data-column="column2">Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Name</td>
                    <td class="column100 column2" data-column="column2"><?php echo $name ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Surname</td>
                    <td class="column100 column2" data-column="column2"><?php echo $surname ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">ID Number</td>
                    <td class="column100 column2" id="00" data-column="column2" ><?php echo $id_number ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Gender</td>
                    <td class="column100 column2" data-column="column2"><?php echo $gender ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Date of Birth</td>
                    <td class="column100 column2" data-column="column2"><?php echo $dob ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Race</td>
                    <td class="column100 column2" data-column="column2"><?php echo $race ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Citizenship</td>
                    <td class="column100 column2" data-column="column2"><?php echo $citizen ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Parental Details-->

      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
              <h2>Parental Details Summary</h2>
              <table data-vertable="ver1">
                <thead>
                  <tr class="row100 head">
                    <th class="column100 column1" data-column="column1">Titles</th>
                    <th class="column100 column2" data-column="column2">Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Guardian Status</td>
                    <td class="column100 column2" data-column="column2"><?php echo $guardian; ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Name</td>
                    <td class="column100 column2" data-column="column2"><?php echo $Gname; ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Surname</td>
                    <td class="column100 column2" data-column="column2"><?php echo $Gsurname; ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Address</td>
                    <td class="column100 column2" data-column="column2"><?php echo $Address ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">City</td>
                    <td class="column100 column2" data-column="column2"><?php echo $City ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Province</td>
                    <td class="column100 column2" data-column="column2"><?php echo $state ?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Zip Code</td>
                    <td class="column100 column2" data-column="column2"><?php echo $Zip ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Academics Details -->

      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver1 m-b-110">
              <h2>Academics Details Summary</h2>
              <table data-vertable="ver1">
                <thead>
                  <tr class="row100 head">
                    <th class="column100 column1" data-column="column1">Subject</th>
                    <th class="column100 column2" data-column="column2">Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="row100">
                    <td class="column100 column1" data-column="column1"><?php echo  $_SESSION["HOME_LAN"];?></td>
                    <td class="column100 column2" data-column="column2"><?php echo  $_SESSION["HOME_LAN_MARK"];?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1"><?php echo  $_SESSION["FA_LAN"];?></td>
                    <td class="column100 column2" data-column="column2"><?php echo  $_SESSION["FA_LAN_MARK"];?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1"><?php echo  $_SESSION["MATH_SUBJ"];?></td>
                    <td class="column100 column2" data-column="column2"><?php echo  $_SESSION["MATH_SUBJ_MARK"];?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1"><?php echo  $_SESSION["SUBJ1"];?></td>
                    <td class="column100 column2" data-column="column2"><?php echo  $_SESSION["SUBJ1_MARK"];?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1"><?php echo  $_SESSION["SUBJ2"];?></td>
                    <td class="column100 column2" data-column="column2"><?php echo  $_SESSION["SUBJ2_MARK"];?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1"><?php echo  $_SESSION["SUBJ3"];?></td>
                    <td class="column100 column2" data-column="column2"><?php echo  $_SESSION["SUBJ3_MARK"];?></td>
                  </tr>

                  <tr class="row100">
                    <td class="column100 column1" data-column="column1">Life Orientation</td>
                    <td class="column100 column2" data-column="column2"><?php echo  $_SESSION["LO_MARK"];?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <form class="" action="finish.php" method="post">
        <div>
           <input type="submit" name = "submit" class="form-control submit" value="SUBMIT">
      </div>
      </form>


    </div>




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
        a.innerHTML = response[0].ID_NUMBER;
        b.innerHTML = response[0];

        };
        httpReq.send(formData);

      }</script>
  </body>
</html>
