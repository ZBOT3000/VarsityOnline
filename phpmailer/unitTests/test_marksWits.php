<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class markWitsTest extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/WITSAPS.php');
   $tests=APS(45);
 $this->assertEquals(3,$tests, "correct!"); 
   $tests2=APS_LO(45);
 $this->assertEquals(3,$tests2, "correct!");
   $tests3=APS_EM(45);
 $this->assertEquals(3,$tests3, "correct!");
 }
 
}
?>
