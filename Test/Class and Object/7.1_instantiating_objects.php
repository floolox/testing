<?php

	class Book2 {
		private $name;
		private $year;

		public function setName($name){
			$this->name = $name;
		}

		public function setYear($year){
			$this->year = $year;
		}

		public function __toString(){
			return (string)$this->name." ".(int)$this->year;
		}
	}

	$book = new Book2;
	$book->setName('purple');
	$book->setYear('1000');df
	echo $book;
	
?>