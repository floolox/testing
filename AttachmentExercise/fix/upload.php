<?php
		
		if(isset($_POST['btn_submit'])){

				$filename = $_FILES['file']["name"];
					$ext = end(explode('.', $filename));
					echo $ext;   	   
					echo 'hello'; 

					if($ext == "rar"){
						echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    					echo "Type: " . $_FILES["file"]["type"] . "<br />";
    					echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    					echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";


    					if (file_exists("files/" . $_FILES["file"]["name"]))
      					{
      						echo $_FILES["file"]["name"] . " already exists. ";
      					}else{
							move_uploaded_file($_FILES["file"]["tmp_name"], "files/" . $_FILES["file"]["name"]);
							echo "Stored in: " . "files/" . $_FILES["file"]["name"];
						}
					}else{
						echo "invalid format";
					}	
		}

		function getDirektory(){
				$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('files/'));
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
		}

?>
