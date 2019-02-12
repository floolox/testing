<?php

	interface ControllerInterface{
		public function Index();
	}

	class ALLController{
		private $bird;
		private $fish;

		public function __construct(){
			//$this->bird = $bird;
			//$this->fish = $fish;
		}
		public function getBird(ControllerInterface $bird){
			
			return $this->bird = $bird;
		}
		public function getFish(ControllerInterface $fish){
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
			echo "hai Bird";
		}
	}

	class FishController implements ControllerInterface{
		
		public function Index(){
			echo "Fish";
		}
	}
	$all = new ALLController();
	$all->getBird(new BirdController)->Index();

?>