<?php

	class Address {
		private $city;
		
		public function setCity($city){ $this->city = $city; }
		public function getCity(){ return $this->city; }
	}

		class person {
		private $name;
		private $address;

		public function __construct(){ $this->address = new Address(); }

		public function setName($name){	$this->name = $name; }
		
		public function getName(){ return $this->name; }
		//
		//Method Call invoke when instance of object person invoke method that are not define in class
		//the __call catch up 
		public function __call($method,$arg){
			if(method_exists($this->address, $method)){
				return call_user_func_array(array($this->address,$method),$arg);
			}
		}

	}

	$bat = new Person;
	$bat->setName('Bat');
	$bat->setCity('gotham');

	echo $bat->getName()." live : ".$bat->getCity();
?>