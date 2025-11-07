<?php

$gender = "Pria";
$sapa = null;

// if ($gender == "Pria") {
//     $sapa = "hi bapak";
// }else{
//     $sapa = "hi ibu";
// }

// tanda tanya true, titik dua else. (condition) ? (value_if_true) : (value_if_false);
$sapa = $gender == "Pria" ? "Hi bro": "Hi nona";
echo $sapa . PHP_EOL;

