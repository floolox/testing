<?php
	
	class person{
		public $name;
		public $email;

		public function setName($name){
			$this->name = $name;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getName($email){
			return $this->name;
		}


	}	

	$person1 = new Person();
	var_dump($person1);
	$person1->setName('user');
	$person1->setEmail('@test');

	$person2 = new Person();
	$person3 = new Person();
	$person3->setName('user2');
	$person3->setEmail('@test');
	//copy By reference, 2 name for same exact object

	$person2 = $person1;
	var_dump($person1);
	echo "<br>";
	var_dump($person2);
	echo "</br>";
	var_dump($person3);
	//if one object change property other object change too
	$person2->setName('update');
	echo "</br>";
	var_dump($person1);
	echo "</br>";
	var_dump($person2);
	echo "</br>";

?>