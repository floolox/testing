<?php

/**
* 
*/
class Person
{
	private $id;
	private $name;
	private $Money;
	
	function __construct($id, $name)
	{
		$this->id   = $id;
		$this->name = $name;
	}

	public function Money(Money $money)
	{
		$this->Money = $money;
	}

	public function getMoney(){
		return $this->Money;
	}
}

class Money
{
	private $value;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;

	}

	public function MoneyAdd(Money $addMOney)
	{
		return new Money($this->value + $addMOney->getValue());
	}
}

$money = new Money(10);
echo "<BR>";
$moneyTambahan = new Money(100);
$x= $money->MoneyAdd($moneyTambahan);
var_dump($x);

echo "<BR>";
$person = new Person(1,"test");
$person->Money($money);
echo "<BR>";
var_dump($person);


echo "<BR>";
$m=$person->getMoney();
echo "<BR>";

$person->Money($person->getMoney()->MoneyAdd(new Money(1000)));

var_dump($person);
echo "<BR>";
echo $person->getMoney()->getValue();



?>