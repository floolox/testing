<?php
class TestClass
{   
    private  $currentValue;

    private static $_instance = null;

    private function __construct () { }

    public static function getInstance ()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function toValue($value) {
        $this->currentValue = $value;
        return $this;
    }

    public function add($value) {
        $this->currentValue = $this->currentValue + $value;
        return $this;
    }

    public function subtract($value) {
        $this->currentValue = $this->currentValue - $value;
        return $this;
    }

    public function result() {
        return $this->currentValue;
    }
}

// Example Usage:
$result = TestClass::getInstance ()
    ->toValue(5)
    //->add(3)
    ->subtract(2)
    ->add(8)
    ->result();
    var_dump($result);

// $result->add(3)->result();
?>