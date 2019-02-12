<?php
	//extract part of a String
	

	$str = "test extract String in php";
	$start = 6;
	$length = 4; 
	$result = substr($str,$start,$length);
	
	echo $result;
	echo "</BR>";

	$str = "test extract String in php";
	$start = 10;
	$length = 10;
	$result = substr($str,$start,$length);
	echo $result;
	echo "</BR>";

	//no var
	$str = "test extract String in php";
	$start = 10;
	$result = substr($str,$start);
	echo $result;
	echo "</BR>";

	$str = "test extract String in php";
	echo $str[10];


?>