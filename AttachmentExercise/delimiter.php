<?php
$line = "Please insert a tab to this string\t anywhere!"; //Do what i say! :)))

$tab = false;
if (preg_match("/\t/", $line)) {
    $tab = true;
}
var_dump($tab);

$str = "aaa\naaaaaaaaa";
if (ord($str) == 10) {
    echo "The first character of \$str is a line feed.\n";
}

print_r(unpack("C*", " Hello world	"));
function string_to_ascii($string)
{
    $ascii = NULL;
 
    for ($i = 0; $i < strlen($string); $i++) 
    { 
    	$ascii += ord($string[$i]); 
    }
 
    return($ascii);
}
	$a="	zz";
	
	$z=string_to_ascii($a);
	echo $z;

	$m=file_get_contents("C:\Users\user\Documents\NetBeansProjects\\test2file\phptest\src\phptest\Phptest.java");
	echo "</BR> </BR>";
	
	$b=unpack("C*", $m);
	echo count($b);
	//echo $m;


	$array = unpack('C*', "odd 		string");

	$new= call_user_func_array('pack', array_merge(array('C*'), $array ));
	//echo $array;
	var_dump($array);
	echo "</br>";
	var_dump($new);
	foreach ($new as $key) {
		echo $key;
	}

?>