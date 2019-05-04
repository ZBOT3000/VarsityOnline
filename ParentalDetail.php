<?php
  session_start();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Parental Details</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>



    <form class="" action="SParentalDetail.php" method="post">
      <h1  >Guardian Details</h1>
      <div class="form-group">
        <div class="form-group col-md-5">
          <label>Guardian</label>
          <select name="Guardian" class="form-control" onchange="yesnoCheck(this);">
            <option selected>Select You Guardian</option>
            <option value="Mother">Mother</option>
            <option value="Father">Father</option>
            <option value="GrandMother">GrandMother</option>
            <option value="GrandFather">GrandFather</option>
            <option value="Step Mother">Step Mother</option>
            <option value="Step Father">Step Father</option>
            <option value="Guardian">Guardian</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter name here">
        </div>
        <div class="form-group col-md-6">
          <label for="inputName">Surname</label>
          <input type="text" class="form-control" id="inputSurname"name="surname" placeholder="Enter Surname here">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="address"  placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" name="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" name="inputState"class="form-control">
            <option selected>Choose...</option>
            <option value="Gauteng">Gauteng</option>
            <option value="Limpopo">Limpopo</option>
            <option value="Mpumalanga">Mpumalanga</option>
            <option value="KZN">Kwa-ZuluNatal</option>
            <option value="Northen Cape">Northern Cape</option>
            <option value="Eastern Cape">Eastern Cape</option>
            <option value="North West">North West</option>
            <option Value="Western Cape">Western Cape</option>
            <option value="Free State">Free State</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip" name="inputZip">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
