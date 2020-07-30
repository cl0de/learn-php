<?php
function sumArray(array $sum){

    $total = 0;
    foreach($sum as $element){

        $total += $element;
    }
    return $total;
}
$inputtedElements = $argv;
$removeFirstElement = array_shift($inputtedElements);
echo sumArray($inputtedElements) . PHP_EOL;

