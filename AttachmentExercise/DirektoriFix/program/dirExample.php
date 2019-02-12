<?php


	$path = "../files/";


	$dir = new DirectoryIterator($path);
	echo "[$path]\n";
	foreach ($dir as $file) {
    	echo " ├  $file </br>";
	}


	echo "</br></br><---------------------------------------------></br> </br>";

	$files = new IteratorIterator($dir);
	
		echo "[$path]\n";
		foreach ($files as $file) {
    		echo " ├ $file</br>";
		}

		echo "</br></br><---------------------------------------------></br> </br>";


		$dir = new RecursiveDirectoryIterator($path);
		echo "[$path]\n";
		foreach ($dir as $file) {
    			echo " ├ $file</br>";
		}
				echo "</br></br><---------------------------------------------></br> </br>";

		$files = new RecursiveIteratorIterator($dir);
		echo "[$path]\n";
		foreach ($files as $file) {
    	echo " ├ $file</br>";
		}

		echo "</br></br><---------------------------------------------></br> </br>";

		echo "[$path]\n";
foreach ($files as $file) {
    $indent = str_repeat('   ', $files->getDepth());
    echo $indent, " ├ $file</br>";
}
echo "</br></br><---------------------------------------------></br> </br>";
$dir   = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::SELF_FIRST);
echo "[$path]\n";
foreach ($files as $file) {
    $indent = str_repeat('   ', $files->getDepth());
    echo $indent, " ├ $file</br>";
}


?>