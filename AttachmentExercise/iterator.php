<?php
$array = array('1' => 'one',
               '2' => 'two',
               '3' => 'three',
               '4' => 'four',
               '5' => 'five'

               );

$arrayobject = new ArrayObject($array);

$iterator = $arrayobject->getIterator();

while($iterator->valid()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";

    $iterator->next();
}
?>