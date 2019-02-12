<?php
	/**
	 * Method chaining having series mutator (function that return )
	 */


	Class Address{
		private $city="jakarta";

		public function GetAddress(){
			return $this->city;
		}
	}

	class Person{
		private $name;
		private $email = "abc@com";
		public function GetNama(){$this->name="Mr. X"; return $this;}
		public function GetEMail(){$this->name .="C"; return $this->name;}

	}

	$Person1 = New Person();
	echo $Person1->GetNama()->GetEMail();

 	

?>