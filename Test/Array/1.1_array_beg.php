<?php
		//associative array
		//spesifi array not beggining in 0, and doesnt use 1;
		$presidents = array(1 => 'Washington', 'Adams', 'Jefferson', 'Madison');

		foreach ($presidents as $number => $president) {
			echo "number : ".$number." president: ".$president."</br>";
		}

		$presidents = array('one' => 'Washington', 'Adams', 'Jefferson', 'Madison');
		echo "</BR></BR></BR></BR>";
		//String can't automatic indexing array
		foreach ($presidents as $str => $president) {
			echo "string : ".$str." president: ".$president."</br>";
		}

		$presidents = [1 => 'Washington', 'Adams', 'Honest' => 'Lincoln', 'Jefferson'];
		echo "</BR></BR></BR></BR>";
		foreach ($presidents as $key => $value) {
			echo " key: ".$key." value: ".$value;
		}
?>