
<?php 

	//

	interface UserInterFace{
		public function show();
	}

	class Diskon{
		protected $user;

		public function __construct(UserInterFace $user){
			$this->user = $user;
		}
		public function GetUser(){
			return $this->user;
		}
	}

	class Customer implements UserInterFace{
		private $m = 20;
		private $name="MR.x";

		public function show(){
			return $this->m;
		}

		public function GetName(){
			return $this->name;
		}

	}

	class Member implements UserInterFace{
		private $m= 30;

		public function show(){
			return $this->m;
		}
	}

	$diskon = New Diskon(new Customer);
	echo $diskon->GetUser()->show();
	echo $diskon->GetUser()->GetName();
	
	echo "\n";
	$diskon2 = New Diskon(new Member);
	echo $diskon2->GetUser()->show();
?>