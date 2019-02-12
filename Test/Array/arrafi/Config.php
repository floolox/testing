<?php

class Config
{
   private static $elements = array();

    public static function get($element) {
        if(self::$elements === array()) {
            self::$elements = require "route.php";
        }
        return self::$elements[$element];
	    }
}

	$x = Config::get('admin');
	var_dump($x);
?>