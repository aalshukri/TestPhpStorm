<?php
echo "Hello World" . "\n</br>";

$name = 'Ash';
$fruits = array('apple', 'pear', 'lemon');

foreach ($fruits as $fruit){
    $output = $name . " likes " . $fruit . "\n</br>";
    echo $output;
}
