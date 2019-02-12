<?php
	//Avoiding == Versus = Confusion	
	//accidentally assign values when comparing a variable and a constant
	$no = 'sleep';
	if(12 == $no){
		echo "same";
	}else{
		echo "no";
	}

	if($no == 12){
		echo "same";
	}else{
		echo "no";
	}
?>