<?php
	
	//ISSET IF VARIABLE ALREADY DECLARE THEN IS OVERRIDEN

	$x = 4;
	if(isset($x)){
		echo "already have a value";
	}else{
		echo "not have";
	}
	//output already have a value

	$y = '';
	if(isset($y)){
		echo "already have a value";
	}else{
		echo "not have";
	}
	//output already have a value
	$z;
	if(isset($z)){
		echo "already have a value";
	}else{
		echo "not have";
	}
	//not have

?>