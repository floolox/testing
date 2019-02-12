


		/*
		<?php
$path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');


echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n"; // since PHP 5.2.0
?>

		echo "</br> </br>";
		$path_parts = dirname('C:\Users\user\Documents\NetBeansProjects\cobaPHP\src\cobaphp\CobaPHP');
		echo $path_parts;
		echo "</br> </br>";

*/


/*

		$tmp = new ArrayObject();
		$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
		

			foreach($objects as $name => $object){
				
				if(strpos($name, '.java')){
					
					$tmp = clone $name;

					//echo "</br> $name </br>";
				}
				
				//echo "</br> $name </br>";
			}
			
			echo "</br> $tmp </br>";

	*/




/*	
		//$info = new SplFileInfo('test.zip');
		//echo $info->getExtension();

		/*
		print_r(pathinfo('C:\Users\user\Documents\NetBeansProjects\cobaPHP'));


		print_r(pathinfo('C:\Users\user\Documents\NetBeansProjects\cobaPHP'));


		$arrayF = pathinfo('C:\Users\user\Documents\NetBeansProjects\cobaPHP');
		
		foreach ($arrayF as $name => $arra) {
			# code...
			echo "</br> $name </br>";
		}
		//print_r(pathinfo('/no/where/file.txt'));

		//echo $pathinfo . "</br>";
		
		*/
		/*
		$path = realpath('C:\Users\user\Documents\NetBeansProjects\cobaPHP');
		

		$dir = new RecursiveDirectoryIterator($path);
		
		echo "[$path]\n";
		foreach ($dir as $file) {
			echo " </br> $file </br>";
		}
		*/
