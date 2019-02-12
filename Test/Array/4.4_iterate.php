<?php
	
	//MODIF ARRAY KEY not value

	$items = [1=>'one',2=>'two',3=>'three',4=>'four',5=>'five'];

		foreach ($items as $item => $value) {
			if($value=='one'){
				//won't work 
				//$item = 10;
				//not Change item only value;
				unset($items[$item]);
				$items[$item] = 'six';
				
				//$items[$item] = '8';
				//unset($items[$item]);

			}
			echo "item: ". $item ."value :". $value."<BR>";
		}
	echo "<BR>";
	var_dump($items);
	//unset($items);
	echo "<BR><BR><BR>";

	foreach ($items as $item => $value) {
		echo $item."value :".$value."</BR>";
	}
?>