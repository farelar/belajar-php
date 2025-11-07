<?php

$name = "farel";
echo "Nama: " .$name . PHP_EOL;
echo "Nilai: " . 100 . PHP_EOL;

$valueString = (string)1900;
var_dump($valueString);
$valueInteger = (int)"10";
var_dump($valueInteger);
$valueFloat = (float) "100.9";
var_dump($valueFloat);

// akses karakter string
$name = "Oke gas";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
echo $name[6] . PHP_EOL;

echo "Hello " . $name . ", selamat" . PHP_EOL;
echo "Hello $name, selamat" . PHP_EOL;

// variable curly brace
echo "Hello {$name}'s, selamat" . PHP_EOL;


