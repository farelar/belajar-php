<?php

$nilai = array(1,2,3,5);
$buah = ["Apel", "Pear", "Anggur"];

//------------------- operasi array--------------------//
// akses data
echo $nilai[1];
echo"\n";

// ubah data array di index dg value baru
echo $nilai[2] = "harimau";
echo $nilai[0] = 1000;
echo"\n";

// nambah data di array pada possis belakang
$nilai[]=100;

//hapu data di array, index auto hilang dari array
unset($nilai[2]); 

//mapping
$farel = array (
    "id" => 001,
    "name" => "Farel",
    "age" => 17,
    "alamat" => [
        "city" => "Jakarta",
        "negara" => "Indo"
    ]
);

$uang = [
    "currency" => "idr",
    "banyak" => 90000,
    "bentuk" => [
        "fisik" => "kertas",
        "digital" => "dana"
    ]
];

$arrayinarray = [
    $arraydalem = [1,2, "Donat"]
];

var_dump($farel["id"]+["age"]);
// var_dump($arrayinarray);
// unset($farel["name"]);
// var_dump($farel);
// var_dump($farel["name"] = "comat");
// var_dump($farel);
// var_dump($nilai);
// var_dump(count($nilai)); 