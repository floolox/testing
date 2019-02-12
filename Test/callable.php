<?php 

	/**
		* 
		*/
		class Hello
		{

			private function Test(){
				return "testing private";
			}
			public function __call($name, $argument)
			{
				echo $this->Test()." Hello World";
			}
		}	

		$Test = new Hello();

		$Test->hello()."\n";
		echo "\n".memory_get_usage()."\n";

 ?>