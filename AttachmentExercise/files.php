<?php


function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}



if ($_POST['upload']) {
    $file_ary = reArrayFiles($_POST['ufile']);

    foreach ($file_ary as $file) {
        print 'File Name: ' . $_POST['name'];
        print 'File Type: ' . $_POST['type'];
        print 'File Size: ' . $_POST['size'];
    }
}

?>