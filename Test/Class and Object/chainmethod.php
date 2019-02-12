<?php

	class Chain{

		public  $partOne;
		public  $partB;
		public $x;
		public function addString($x)
		{
			$this->x = $x;
		}

		public function addA()
		{
			$this->x .= " hai";
			return $this;
		}

		public function addB()
		{
			$this->x .= " hello";
			return $this;
		}
		public function show()
		{
			return $this->x;
		}
		public function test()
		{
			$this->partOne = new partOne();
		}

	}

	$test = new Chain();
	$test->addString('tech');
	$test->addA()->addB();

	echo $test->show();
?>