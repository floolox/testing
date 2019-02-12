<?php

	class Test{
		private $x="X";
		private $y="Y";
		private $z="Z";
		public function __get($name){
			
            return $this->$name;
        //     if (array_key_exists($name, $this->data)) {
        //     return $this->data[$name];
        // }
        	
		}
	}

	$test = new Test();
	echo var_dump($test->__get("x"));
	echo var_dump($test->__get("y"));
	echo var_dump($test->__get("m"));// null because not define


?>