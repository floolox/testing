<?php

	interface ControllerInterface{
		public function Index();
	}

	class ALLController{
		private $bird;
		private $fish;

		public function __construct(ControllerInterface $bird,ControllerInterface $fish){
			$this->bird = $bird;
			$this->fish = $fish;
		}
		public function getBird(){
			return $this->bird;
		}
		public function getFish(){
			return $this->fish;
		}
		
		//buat method __get untuk semua object yg yg disimpan array

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

	$all = new ALLController(new BirdController, new FishController);
	$all->getBird()->Index();

?>