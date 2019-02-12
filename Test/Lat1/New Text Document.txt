<?php

class Test
{
	private $testint;
	private $teststr;

	public function __construct()
	{
		$this->teststr = "Test";
		$this->testint = 10;
	}

	public function getTestint(){
		return $this->testint;		
	}
	public function getTeststr(){
		return $this->teststr;		
	}
	public function setTestint($x){
		$this->testint = $x;
	}
	public function setTeststr($y){
		$this->teststr = $y;
	}

}

	$test = new Test();

	echo $test->getTestint() ."</br>";
	echo $test->getTeststr();


	$test->setTestint(4);
	$test->setTeststr("y");
	echo "</br>";
	echo $test->getTestint() ."</br>";
	echo $test->getTeststr();
?>