<?php
	
	function getfile($dir){
		$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::SELF_FIRST);
            
		$files = array();
		$namefile = array();
		//$filesJava = array(); 

		foreach ($rii as $file) {

	    	if ($file->isDir()){ 
    	    	
    	    	continue;
    		}
    		if($file->isFile() AND strpos($file, '.java')){
    	    		$filesJava[] = $file;
    	    }
	    	$files[] = $file->getPathname();
	    	$namefile[] = $file->getFilename(); 
	    	$path[] = $file->getPath();

		}
        $a = count($filesJava);
        return $filesJava;
     }

     $var = "C:\\xampp\htdocs\KP2017\App\\Admin\\files\sahat\\test2file\phptest";   
  	 echo $var;
  	 echo "</br>";
  	 $file =getfile($var);
  	 echo count($file);
  	 echo "</br>";
  	 
  	 foreach ($file as $key) {
  	 	$key->__toString();
  	 	echo $key;
  	 	echo "</br>";
  	 }

?>
