<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Untitled Document</title>
        <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="http://twitter.github.com/bootstrap/1.4.0/bootstrap-dropdown.js"></script>
    </head>
    <body>
<?php 

if ( $handle = opendir('D:\cobalogin\testing') ) {
    while(false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            $var .= $file . ",";
        }
    }
}

$var = explode(',', $var);

echo " <ul class='tabs'>";
foreach($var as $v){
    if(!preg_match("/php/i", $v)) {
        echo "<li class='dropdown' data-dropdown='dropdown'><a href='" . $v . "' class='dropdown-toggle'>" . $v . "</a><ul class='dropdown-menu'>";
        $folder = $v;
        $t = opendir($_SERVER['DOCUMENT_ROOT'] . "/menu/" . $v);
        while(false !== ($v = readdir($t))) {
            if ($v != "." && $v != "..") {
                echo "<li><a href='" . $folder ."/". $v . "'>" . $v . "</a></li>";
            }
        }
        echo "</ul></li>";
    }
} 
echo " </ul>";

?>
    </body>
</html>