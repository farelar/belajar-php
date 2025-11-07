<?php

$name = 'Eko';
$name = NULL;

$kontol = 'Budi';
echo"Name : ";
echo $name;

echo "\n";

echo "Is name null ? ";
$isNull = is_null($name);
var_dump( $isNull);
 
$example = "Farel";
unset($example);


var_dump(isset($kontol));

// isset untuk ngecek apakah variablenya ada dan tidak null, kalo is null kalo varibenya gak ada error
// kalo unset itu hapus variable dan yang null itu ngosing tok ngak ngehapus variablenya