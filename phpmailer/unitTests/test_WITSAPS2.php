<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class WITSAPS2Test extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/WITSAPS2.php');
   $tests=APS_LO(63);
 $this->assertEquals(1,$tests, "correct!"); 
 }
 
}
?>
