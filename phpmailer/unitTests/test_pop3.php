<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class pop3Test extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/unitTests/pop3.php');
   $test=testing(10,4);
 $this->assertEquals(14,$test, "correct!"); 
 }
 
}
