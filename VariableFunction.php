<?php

function hello(){
    echo "Hello" . PHP_EOL;
}

function hai(){
    echo "Hai" . PHP_EOL;
}

$fungsiYangWilliDipanggil = "hello";
$fungsiYangWilliDipanggil();


$fungsiYangWilliDipanggil = "hai";
$fungsiYangWilliDipanggil();

// penggunaan variable function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" .PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");