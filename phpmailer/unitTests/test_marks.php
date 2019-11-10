<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');
class markTest extends TestCase{
  
 public function test_testing(){
   require_once('/home/travis/build/noreplysims/VarsityOnline/phpmailer/UJAPS.php');
   $tests=mark(71);
 $this->assertEquals(6,$tests, "correct!"); 
 }
 
}
?>
