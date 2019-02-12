<?php
	
	$array = [];
	echo count($array);

	echo "\tArray Empty </BR>";
	$array = ['one','two','three'];
	//delete array
	unset($array[2]);
	echo "total Array after delete= ".count($array);
	//add array
	$array[] = 'four';
	$x =count($array);
	echo "</BR> total array after sign =".count($array)."</br>listing element in array</br>";
	foreach ($array as $key => $value) {
		echo $key." ".$value."</BR>";
		if($key==1){
			unset($array[$key]);

		}else if($key==$x){
			$array['error'] = "four";
		}
	}
	echo "</BR>";
	echo count($array);
	echo " </BR>delete 1 element and asign 1 element<br>";
	foreach ($array as $key => $value) {
		echo $key." ".$value."</BR>";
	
	}



?>