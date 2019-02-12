<?php
	
	//cloning object ie 2 exact object

	class Address {
		private $city;
		private $country;

		public function setCity($city){ $this->city = $city; }

		public function setCountry($country){ $this->country = $country; }

		public function getCountry(){ return $this->country; }

		public function getCity(){ return $this->city; }
	}

	class person {
		private $name;
		private $address;



		public function __construct(){ $this->address = new Address(); }
		//override the default behavior
		public function __clone() { $this->address = clone $this->address; }

		public function setName($name){	$this->name = $name; }
		
		public function getName(){ return $this->name; }
		/**
		 * Method Call dipangggil ketika object memanggil method yang tidak ditemukan 
		 * @param  [type] $method [method yang dipangggil]
		 * @param  [type] $arg    [paramater]
		 * @return [type]         [call user func array]
		 */
		public function __call($method,$arg){
			if(method_exists($this->address, $method)){
				return call_user_func_array(array($this->address,$method),$arg);
			}
		}
	}
	
	$bat = new Person();
	$bat->setName('Batman');
	$bat->setCity('bingo');

	$supp = clone $bat;
	$supp->setName('Supper');
	$supp->setCity('cent');

	echo $bat->getName()." city: ".$bat->getCity();
	print "\n";
	
	echo $supp->getName()." city: ".$supp->getCity();
	print "\n";

	//output : 
	//Batman city: cent
	//Supper city: cent
	//CITY is can't worked because is object
?>