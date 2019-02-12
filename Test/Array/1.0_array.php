<?php
	
	$fruits = array('Apple', 'Banana', 'Cantaloupes', 'Dates');

	$fruits_2[0] = "Apple";
	$fruits_2[1] = "Banna";
	$fruits_2[2] = "Cantaloupes";
	$fruits_2[3] = "Dates";

	echo "</BR> fruits_2 </BR>";
	echo $fruits_2[0]."</br>";
	echo $fruits_2[1]."</br>";
	echo $fruits_2[2]."</br>";
	echo $fruits_2[3]."</br>";
	//short syntax
	$fruits_3 = ['Apples', 'Bananas', 'Cantaloupes', 'Dates'];
	foreach ($fruits_3	 as $key => $value) {
		echo "</BR>";
		echo "KEY : ".$key." VALUE : ".$value;
	}
		echo "</BR></BR></BR>";

	/*
		To define an array using not integer keys but string keys, you can also use array(), but
		specify the key/value pairs with =>:
	*/

	$fruits_4 = array("red"=>'Apples', 'yellow'=>"Banana", 'beige'=>'Cantaloupes', 'Brown'=>'Dates');
	//short syntax
	$fruits = ['red' => 'Apples','yellow' => 'Bananas','beige' => 'Cantaloupes','brown' => 'Dates'];

	foreach ($fruits_4 as $color => $fruit) {
		echo "</BR>";
		echo "color : ".$color." fruit : ".$fruit;
		
	}

?>