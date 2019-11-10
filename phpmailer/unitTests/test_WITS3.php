<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class WITSAPS3 extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/WITSAPS3.php');
   $tests=APS_EM(45);
 $this->assertEquals(3,$tests, "correct!"); 
//  $tests2=APS_EM(61);
//  $this->assertEquals(7,$tests, "correct!"); 
 }
 
}
?>
