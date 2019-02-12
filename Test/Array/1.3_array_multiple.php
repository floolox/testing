<?php
	
	$fruits = array('red'=>array('strawberry','apple'),'yellow'=> array('banana'),'blue'=> array('naco'));
	
	foreach ($fruits as $color => $color_fruit) {
		// $color_fruit is an array
		foreach ($color_fruit as $fruit) {
			echo " key: ".$color." value : ".$fruit."</BR>";
			print "$fruit is colored $color.<br>";
			echo "<BR>";
			//echo "key:".$key."value: ".$fruit."</BR>";
			//error #key is not array
		}
	}
	//var dum have total of index array
	var_dump($fruits);
	echo "<BR>";
	//not have total of index array
	print_r($fruits);


	$fruits = array();
	$fruits['red'][] = 'strawberry';
	$fruits['red'][] = 'apple';
	$fruits['yellow'][] = 'banana';
	echo "<BR>";
	echo "<BR>";

	var_dump($fruits);
?>