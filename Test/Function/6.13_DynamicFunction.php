<?php
	//create and define a function as
	//http://php.net/manual/en/functions.variable-functions.php
	//http://php.net/manual/en/functions.anonymous.php
	//http://php.net/manual/en/function.call-user-func-array.php
	//http://php.net/manual/en/class.closure.php

	$increment = 7;
	$add = function($i,$j) use ($increment) {return $i + $j + $increment; };
	$sum = $add(1,2);
	echo $sum;
	$sum2 = $add(2,4);
	echo $sum2;
	$boola = true;
	$add1 = function($i,$j) use ($boola) {
		$x = !$boola ? $i: $j;
		return $x;
	};

	print "\n".$add1(6,4);

	$array = array('one','two','three');
	$find = 'three';
	$closure = function($find) use($array){
		$x = false;
		foreach ($array as  $key=> $value) {
			if($value == $find){
				$x = true;
				return $key;
				break;
			}
		}
	};
	$result = $closure($find);
	print "\n closure ".$result;
	//var_dump($result);
	

		
	
	$closure2 = function($a,$b){
		return $a+$b;
	};
	$argresult = call_user_func_array($closure2, array(1,2));
	echo "\n callable1 :".$argresult;
	
	
	$closure3 = function($a){
		return $a+4;
	};
	$argresult2 = call_user_func_array($closure3, array(1));
	echo "\n callable2: ".$argresult2;
	

	$double = function($arg){
		return $arg*2;
	};

	$range = range(1, 5);

	$resultDouble = array_map($double, $range);
	echo "\n range callable3 :".implode(' ',$resultDouble);
?>