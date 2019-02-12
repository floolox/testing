<?php
	$move = "C:\Users\user\Documents\NetBeansProjects\Testing\LevenshteinJava";
	chdir($move);
	$s1 = "hai";
	$s2 = "haiLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL     mkcsmskvmksz ";

	$order = "java -jar SimiliarityLevenshtein.jar 2>&1"; 
	echo $order;
	echo "</br>";
	echo getcwd();
	$m=shell_exec($order."hai haloo");

	 echo shell_exec($order."'\r\n' hai '\r\n' haloo");
	echo "</br>";
	echo $m;
	echo "</br>";
	
	$process_cmd = "java -jar SimiliarityLevenshtein.jar";
	$env = NULL;
	$options = ["bypass_shell" => true];
	$cwd = getcwd();
	$descriptorspec = [
    0 => ["pipe", "r"],     //stdin is a pipe that the child will read from
    1 => ["pipe", "w"],     //stdout is a pipe that the child will write to
    2 => ["file", "java.error", "a"]
	];
	$process = proc_open($process_cmd, $descriptorspec, $pipes, $cwd, $env, $options);

	if (is_resource($process)) {

    //feeding text to java
    fwrite($pipes[0], $s1."\n");
    fwrite($pipes[0], $s2);
    fclose($pipes[0]);

    //reading output text from java
    $output = stream_get_contents($pipes[1]);
    fclose($pipes[1]);

    $return_value = proc_close($process);
    	echo "</br>";
    echo $output;
    	echo "</br>";	
    echo $return_value;
	}
}

	//echo var_dump($out);
?>