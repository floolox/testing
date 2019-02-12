<?php
	
	class files{
		private $name;
		private $path;

		function getName(){
        	return $this->name;
    	}
    	function setName($x){
        	$this->name = $x;
    	}
    	function getPath(){
        	return $this->path;
    	}
    	function setPath($x){
        	$this->path = $x;
    	}
	}


	$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('../files/'), RecursiveIteratorIterator::SELF_FIRST);

	$file = array();
	$file[] = new Files();
	$file[]->setName('s');
	var_dump($file);
	echo "</br> </br> </br>";
	var_dump($files);

		foreach ($dir as $dirs) {

	    	if ($dirs->isDir()){ 
    	    	
    	    	continue;
    		}
    		
		}
		
		var_dump($file);


?>