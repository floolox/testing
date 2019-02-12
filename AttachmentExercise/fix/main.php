<?php


		$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('C:\Users\user\Documents\NetBeansProjects\cobaPHP'));

		$files = array();
		//$filesJava = array(); 

		foreach ($rii as $file) {

	    	if ($file->isDir()){ 
    	    	
    	    	continue;
    		}
    		if($file->isFile() AND strpos($file, '.java')){
    	    		$filesJava = $file->get;
    	    }
	    	$files[] = $file->getPathname(); 
		}
		echo "---------------------------------------------------LIST FILE-----------------------------------------------</br></br>";
		var_dump($files);
		echo "</br> </br>";
		echo "---------------------------------------------------File JAVA-----------------------------------------------</br></br>";
		var_dump($filesJava);
		echo "</br> </br>";
		$a = $filesJava->__toString();
		echo $a;



		function safe_dirname($path) {
 		  $dirname = dirname($path);
   		  return $dirname == '/' ? '' : $dirname;
		}
		echo "</br> </br>";
		$parentDirektory = safe_dirname($a);
		$parentparentDirectory = safe_dirname($parentDirektory);
		echo $parentDirektory;
		
		exec("cd ".$parentDirektory);

		echo "</br> </br>";
		echo "CMD :". getcwd();
		chdir($parentDirektory);
		echo "</br> </br>";
		echo "CMD : ".getcwd();
		exec("javac CobaPHP.java"); 
		chdir($parentparentDirectory);
		echo "</br> </br>";
		echo "CMD : ".getcwd();
		$output = exec("java cobaphp.CobaPHP");
		echo "</br> </br>";
		echo "---------------------------------------------------HASIL OUTPUT-----------------------------------------------</br></br>";
		echo $output;
		/*
		$output = exec("1");
		echo $output;
		echo "</br> </br>";
		$output = exec("2");
		echo $output;
		echo "</br> </br>";
		*/
	
		/**
		* CHDIR mengganti direktory sistem
		*
		*
		*/


?>