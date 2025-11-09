<?php

// apaan ini dih fungsi tanpa nama juga dipanggil closure
$firstName = "Eko";
$lastName = "Khannedy";

$sayHeloo = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHeloo("Coba");
$sayHeloo("Aja");

function sayGoodBye (string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName". PHP_EOL;
}

sayGoodBye("Eko", function (string $name) {
    return strtolower($name);
});

// cara aksses variable dari luar function
$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName". PHP_EOL;
};
$sayHelloEko();