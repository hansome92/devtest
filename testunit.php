
<?php

require_once ('DevTest.php');

class RemoteDevTest extends PHPUnit_Framework_TestCase
{
  
  public function testReserve()
  {
    
	$input = "test";
	$devtest = new DevTest($input);
	$reverse = $devtest->reverse();
    $res = "tset";
	
    $this->assertTrue($reverse == $res);
  }
}
?>