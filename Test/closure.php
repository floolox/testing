<?php

	$array = ['one','two','three','four'];
	$find = 'three';
	$x = function ($find) use($array)
	{

		foreach ($array as $key => $value) {
			$x = false;
			if($value == $find){
				$x = true;
				$match= $key;
				break;
			}

		}
		return $key;
	};
	$result = $x($find);
	var_dump($result) ;

?>