<?php

	interface ControllerInterface{
		public function Index();
	}

	class ALLController{
		private $controller;

		public function __construct(ControllerInterface $con){
			$this->controller = $con;
		}
		public function getController(){
			return $this->controller;
		}
		

		public function __call($method,$arg){
			if(method_exists($this->controller, $method)){
				return call_user_func_array(array($this->controller,$method),$arg);
			}
		}

	}

	class BirdController implements ControllerInterface{
		
		public function Index(){
			echo "Bird";
		}
	}

	class FishController implements ControllerInterface{
		
		public function Index(){
			echo "Fish";
		}
	}

	$x = new ALLController(new BirdController);
	$x->Index();

	$y = new ALLController(new FishController);
	$y->Index();

?>