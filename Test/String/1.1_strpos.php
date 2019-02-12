<?php
	//Accessing SubStrings
	// a string contains a particular substring


	$a = "test@test.com";
	$b = "testTest.com";
	$m='@';
	$k="com";

	$result = checkContain($a,$m);
	echo "Test@test.com : ".$result;
	echo "<BR>";

	$result = checkContain($b,$m);
	echo "Testtest.com : ".$result;
	echo "<BR>";

	$result = checkContain($b,$k);
	echo "contain com : ".$result;
	echo "<BR>";

	$z = strpos($a, "t");
	echo $z;
	echo "<BR>";

	// === dan == operator membuat 0 sama dengan false
	if($z===false){
		echo "yes";
	}else{
		echo "no";
	}

	function checkContain($x , $contain){
		
		if(strpos($x,$contain)== false){
			$result = "no @";
		}else{
			$result = "true";
		}

		return $result;
	}
	
?>