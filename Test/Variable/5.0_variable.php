<?php

	//Cheack if empty
	//String "" Evaluate as empty
	$var = "";
	if(empty($var)){
		echo 'is empty';
	}else{
		echo 'not empty';
	}

	$var = "e";
	echo "<BR><BR><BR>";
	if(empty($var)){
		echo 'is empty';
	}else{
		echo 'not empty';
	}
	echo "<BR><BR><BR>";
?>