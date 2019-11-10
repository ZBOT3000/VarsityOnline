<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class markTest extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/UJAPS.php');
   $test=mark(71);
 $this->assertEquals(6,$test, "correct!"); 
 }
 
}
?>
