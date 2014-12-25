
<?php

require_once ('DevTest.php');

class RemoteDevTest extends PHPUnit_Framework_TestCase
{
  
  public function testReserve()
  {
    // test to ensure that the object from an fsockopen is valid
	$text = "test";
	$devtest = new DevTest($text);
    $res = "tset";
    $this->assertTrue($text == $res);
  }
}
?>