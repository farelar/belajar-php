<?php

function ucapHello($name, $lastname){
    echo "Hello $name $lastname". PHP_EOL;
}

ucapHello("farel", "ar");
ucapHello("jefri", "arr");

echo "\n";

function ucapHello2($name){
    echo "Hello $name". PHP_EOL;
}

ucapHello2("farel");
ucapHello2("jefri");

echo "\n";

function ucapHellowDefault($name = "Hacker"){
    echo "Hello $name" . PHP_EOL;
}

ucapHellowDefault();
ucapHellowDefault("farel ar rizieq");

// ------------------type declration-----------------------------
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total". PHP_EOL;
}
sum("100", "100");
sum(100, 100);
sum(true, false);

// variable length
function sumAll (...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode("+", $values) . " = $total" . PHP_EOL;

}              

sumAll(10,20,30,24);
sumAll(...[90, 70, 90]);