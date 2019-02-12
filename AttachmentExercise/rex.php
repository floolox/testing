<?php

	

//$path = realpath('C:\xampp\htdocs');
$path = realpath('C:\Users\user\Documents\NetBeansProjects\cobaPHP');
//$path = realpath('E:\Pemprograman Web Lanjut\contoh MVC dosenJabatan\MVC\latihan\pages\Controller');

$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
	
	// cara dapetin path src main java
	/*
	if(strpos($name, 'java') == true)
    	echo "$name </br>";
	*/   
    		echo "$name </br>";
   
}



 
?>