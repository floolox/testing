<?php
	/*
	*static cuma 
	*
	*
	*
	*	
	*/

	
	class testStat{
		public $num =4;
		public static $num2 = 5;
		
		public static function Say(){
			$x= "Hello World";
			return $x;
		}
		
		public static function Hai(){
			$x = self::$num2+1;
			return $x;
		}
		
	}
	
	//error not Static
	//$x = testStat::$num;
	$y = testStat::$num2;
	$z =  testStat::Say();
	$a = testStat::Hai();
	print "</br>". $y;
	echo "</br>". $z ;
	echo "</br>". $a ;	
	echo "</br> test {$a} spacing";
	
	
?>