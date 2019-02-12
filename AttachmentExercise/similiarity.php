<?php
 //$st = file_get_contents('C:\xampp\htdocs\KP2017\App\Admin\files\sahat\cobalogin\cobaPHP1\src\cobaphp\CobaPHP.java');
 
 $st = file_get_contents('/files/sahat/cobalogin\cobaPHP2\src\cobaphp\CobaPHP.java',FILE_USE_INCLUDE_PATH);
 echo $st; 
 echo "</br>".getcwd()."</br>";
function similarity($str1, $str2) {
    
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    
    $max = max($len1, $len2);
    $similarity = $i = $j = 0;
    
    while (($i < $len1) && isset($str2[$j])) {
        if ($str1[$i] == $str2[$j]) {
            $similarity++;
            $i++;
            $j++;
        } elseif ($len1 < $len2) {
            $len1++;
            $j++;
        } elseif ($len1 > $len2) {
            $i++;
            $len1--;
        } else {
            $i++;
            $j++;
        }
    }

    //$result = ($similarity / $max);
    return round($similarity / $max, 2);
}

//$str1 = '12345678901234567890';
//$str2 = '12345678991234567890';
echo "------------------------";
$str1 = file_get_contents('C:\xampp\htdocs\KP2017\App\Admin\files\sahat\cobalogin\cobaPHP1\src\cobaphp\CobaPHP.java');
echo $str1;
$str2 = file_get_contents('C:\xampp\htdocs\KP2017\App\Admin\files\sahat\cobalogin\cobaPHP2\src\cobaphp\CobaPHP.java');
echo $str2;
echo 'Similarity: ' . (similarity($str1, $str2) * 100) . '%';
// http://php.net/manual/en/function.similar-text.php*/
?>