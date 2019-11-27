 <?php
    if(isset($_POST["email"]))
    {
      require '../phpmailer/PHPMailerAutoload.php';
      require '../php/functions.php';
      require '../php/conn.php';

      $email = $_POST["email"];
      $mysql_qry="select * from register where email = '$email';";
      $result = mysqli_query($conn,$mysql_qry);

      if (mysqli_num_rows($result)>0)
      {
        $token = generateNewString();
        $mysql_qry2="update REGISTER set token = '$token',
                      tokenexpire= DATE_ADD( NOW() ,INTERVAL 5 MINUTE)
                      where email = '$email';";
        $result2 = mysqli_query($conn,$mysql_qry2);

        $mail = new PHPMailer();




        $mail->Body="
            hi,<br><br>

            Inorder to reset your password please click on the link below:

            <a href=
            'http://lbmsolutions.co.za/php/resetPassword.php?email=$email&token=$token'
            >http://lbmsolutions.co.za/php/resetPassword.php?email=$email&token=$token</a><br><br>

            Kind Regards<br>
            VarsityOnline
        ";

        if ($mail->send())
        {
           exit(json_encode(array("status" => 1 , msg =>"Please check your email Inbox")));
        }
        else
        {
          exit(json_encode(array("status" => 0 , msg =>"Something went Wrong Try Again")));
        }


      }else {
        exit(json_encode(array("status" => 0 , msg =>"Please check your inputs")));
      }
    }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
          <img src="../logo.jpg"><br><br>
          <input type="email" class="form-control" id="email" placeholder="Your email address"><br>
          <input type="submit" class="btn btn-primary" value="Reset Password">
          <br><br>
          <p id="response"></p>
        </div>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var email = $("#email");
      $(document).ready(function (){
        $('.btn-primary').on('click',function(){
              if (email.val()!="") {
                email.css('border','1px solid green');

                $.ajax({
                  url:'https://lbmsolutions.co.za/php/forgotPassword.php',
                  method:'POST',
                  dataType:'json',
                  data :{
                    email:email.val()
                  },success: function(response){
                    if(!response.success)
                    {
                      $("#response").html(response.msg).css('color',"red");
                    } else {
                      $("#response").html(response.msg).css('color',"green");
                    }
                  }
                });
              }else {
                email.css('border','1px solid red');
              }
        });

      });

    </script>



  </body>
</html>
