<?php

	//C:\Users\user\Documents\NetBeansProjects\cobaPHP
		$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('files/'));

		$files = array();
		//$filesJava = array(); 

		foreach ($rii as $file) {

	    	if ($file->isDir()){ 
    	    	
    	    	continue;
    		}
    		if($file->isFile() AND strpos($file, '.java')){
    	    		$filesJava = $file;
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
		$output = shell_exec("java cobaphp.CobaPHP < input.txt > output.txt");
		//$output = exec("java cobaphp.CobaPHP");
		echo "</br> </br>";
		echo "---------------------------------------------------HASIL OUTPUT-----------------------------------------------</br></br>";
		echo $output;
		
		

/*
command` // back ticks drop you out of PHP mode into shell
exec('command', $output); // exec will allow you to capture the return of a command as reference
shell_exec('command'); // will return the output to a variable
system(); //as seen above.
*/


?>