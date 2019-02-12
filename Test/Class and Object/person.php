<?php  

	class person{
		private $name= "one";
		private $Tools;
		private $Address;

		public function __construct(Tool $tools, Address $add){
			$this->Tools = $tools;
			$this->Address = $add;
		}

		// public function all(){
			// echo $this->name." ".$this->Tools->getPhone()." ";
		// }
		public function getName(){
			echo $this->name;
		}
		public function getTools(){
			return $this->Tools;
		}
		public function getAdd(){
			return $this->Address;
		}
	}

	class Tool{
		private $phone= "samsung";

		
		public function getPhone() {
			return $this->phone;
		}

	}
	class Address{
		private $city = "bandung";

		public function getAddress(){
			return $this->city;
		}
	}

	$person1 = new Person(new Tool,new Address);

	// echo $person1->all();

	 echo $person1->getName()."\n".$person1->getTools()->getPhone()."\n".$person1->getAdd()->getAddress();
	 

?>