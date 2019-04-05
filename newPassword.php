<?php
if(isset($_POST["Submit"]))
{
  require "conn.php";
  $Password=$_POST['inputPassword1']

  $mysql_qry2="update REGISTER set password = '$Password' where user_id = 25 ;";
  $result2 = mysqli_query($conn,$mysql_qry2);
  if($result)
  {
    echo "sucessfully Changed";
  }else {
    echo "unsucessful";
  }
}
?>

 <!DOCTYPE html>
 <html>
 <!--Navigation -->


 <div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="Demographics.html">Demographics</a>
   <a href="Academics.html">Academics</a>
   <a href="newPassword.php">New Password</a>
 </div>

 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
 <script>
 function openNav() {
   document.getElementById("mySidenav").style.width = "250px";
 }

 function closeNav() {
   document.getElementById("mySidenav").style.width = "0";
 }
 </script>
 <!-- End of nagivation-->
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <!-- Nav CSS -->
     <link rel="stylesheet" type="text/css" href="newPassword.css">

     <title>New Password</title>
   </head>
   <body>


     <div class="container">
       <form class="" action="newPassword.php" method="post">
         <div class="form-group row">
           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-10">
             <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
           </div>
         </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <button type="submit" name="Submit" class="btn btn-primary mb-2">Submit</button>
          </div>

      </form>
     </div>

     <script type="text/javascript">
     var password = document.getElementById("inputpassword1")
     ,confirm_password = document.getElementById("inputPassword2");

     function validatePassword()
     {
         if(password.value != confirm_password.value)
         {
         confirm_password.setCustomValidity("Passwords Don't Match");
         } else
         {
         confirm_password.setCustomValidity('');
         }
     }

     password.onchange = validatePassword;
     confirm_password.onkeyup = validatePassword;
     </script>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
 </html>
