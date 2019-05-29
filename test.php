<?php
session_start();
$b = $_SESSION['user_id'];
require 'functions.php';
$bool = 1;
$num = 3 + 4;
$str = "A string here";
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>
    <p id="1"></p>
    <p id="2"></p>
    <p id="3"></p>
    <script type="text/javascript">
// boolean outputs "" if false, "1" if true
var bool = "<?php echo $b ?>";

// numeric value, both with and without quotes
var num = <?php echo $num ?>; // 7
var str_num = "<?php echo $num ?>"; // "7" (a string)

var str = "<?php echo $str ?>"; // "A string here"

var a = document.getElementById("1");
var b = document.getElementById("2");
var c = document.getElementById("3");

a.innerHTML = bool;
b.innerHTML = num;
c.innerHTML = str;
</script>
  </body>
</html>
