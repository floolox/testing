<?php

/*
isFIle()
untuk ngecek string path mengandung file atau tidak

. refers to the current directory
.. refers to the parent directory
*/
		$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('C:\Users\user\Documents\NetBeansProjects\test2file\phptest'), RecursiveIteratorIterator::SELF_FIRST);
            
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
        foreach ($file as $key) {
            $key->__toString();
            echo $key;
            echo "</br>";
        }
        $a = count($filesJava);
        echo $a;
        
        /*

		echo "---------------------------------------------------LIST FILE-----------------------------------------------</br></br>";
		var_dump($files);
        echo "</br></br>";
        var_dump($namefile);
		
		echo "</br> </br>";
		$ext = array();
		echo "</br>NAME file(filename) </br>";
		foreach ($namefile as $key => $file) { 
			echo $file." ".pathinfo($file,PATHINFO_EXTENSION)."</br>";
		}
		echo "</br> </br>";
		echo "</br>Path file</br>";
		foreach ($path as $key => $file) {
			echo $file."</br>";
		}
		/*
		$path = 'fix/files/';

	$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);

foreach($objects as $name => $object){  
    echo  $objects->getDepth() . " " . $object->getFilename() . "<br/>";
    }
    */
    echo "</br> </br> <br>";

    $path = 'fix/files/';
$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
$dom = new DomDocument("1.0");
$list = $dom->createElement("ul");
$dom->appendChild($list);
$node = $list;
$depth = 0;
foreach($objects as $name => $object){  
    if ($objects->getDepth() == $depth){
//the depth hasnt changed so just add another li
        $li = $dom->createElement('li', $object->getFilename());
        $node->appendChild($li);
    }
    elseif ($objects->getDepth() > $depth){
//the depth increased, the last li is a non-empty folder 
        $li = $node->lastChild;
        $ul = $dom->createElement('ul');
        $li->appendChild($ul);
        $ul->appendChild($dom->createElement('li', $object->getFilename()));
        $node = $ul;
    }
    else{
//the depth decreased, going up $difference directories
        $difference = $depth - $objects->getDepth();
        for ($i = 0; $i < $difference; $difference--){
            $node = $node->parentNode->parentNode;
        }
        $li = $dom->createElement('li', $object->getFilename());
        $node->appendChild($li);
    }
    $depth = $objects->getDepth();
}
echo $dom->saveHtml();

?>