<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class pop4Test extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/pop4.php');
   $test=testing(4,10);
 $this->assertEquals(14,$test, "correct!"); 
 }
 
}
?>
