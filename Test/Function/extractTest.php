<?php


	$array = array("color" => "red", "size" => "large", "shape" => "sprehe");
	extract($array);

	function getArray($data){
		extract($data);
		echo $x;
		echo $m;
	}
	$red="r-e-d";
	$blue = "b-l-u-e";
	getArray(["x" => $red, "m" => $blue]);
?>