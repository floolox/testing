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
		public function Index2(){
			echo "hai";
		}
	}

	$all = new ALLController(new BirdController, new FishController);
	$all->getBird()->Index();
	$all->getFish()->Index2();

?>