<?php

$name = "eko";

$otherName = &$name;

$otherName = "jarjit";

echo $name. PHP_EOL;


function increment(int &$value){
     $value++;
}

$counter  = 3;
increment($counter);

echo $counter;