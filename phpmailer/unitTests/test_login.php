<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
#require_once('locallib.php');

class loginTest extends TestCase{
  protected $result;
  
  public function setUp(){//this part of the code initiates the hello variable
    $this->result = require_once('/home/travis/build/noreplysims/VarsityOnline/Plogin.php');
    $link = mysqli_connect('localhost', 's1434995' , 's1434995' , 'd1434995');
    mysqli_query($link,"CREATE TABLE users (user_id int NOT NULL,user_name varchar(255),password varchar(255))");
    mysqli_query($link,"INSERT INTO users (user_id,user_name,password) values('1','user','name')");
  }
  /**
   * @covers ::login
   */
  public function testinit(){//this part of the code checks if the value returned by the world() method is equal to word
    $password = "name";
    $this->assertTrue( json_decode( $this->result->login("user"),true )[0]['password'] == $password );
    $this->assertTrue( count( json_decode( $this->result->login("") ) ) == 0 );
  }
}
?>
