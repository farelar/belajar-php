<?php

$buah=["apel", "mangga", "durian", "jeruk"];
$hewan = [
    "warna" => "kuning",
    "kaki" => "empat",
    "sifat" => "manja"
];
$first_name = [
    "firstName" => "eko",
    "lastName" => "situbondo"
];
$last_name = [
    "lastName" => "situbondo",
    "firstName" => "eko"
];

// operator array ---------------------------------------------------------

// gabungkan (union)
$fullname = $first_name + $last_name;
var_dump($fullname);

// equal dan identity, yang = 3 itu harus harus mirip semua termasuk penempatan barisnya
var_dump($first_name == $last_name);
var_dump($first_name === $last_name);

//inequality
var_dump($first_name != $last_name);
var_dump($first_name<>$last_name);

// nonidentity, kaya yang atas sama dengan 3 tapi ini buat yang tidak sama dengan
var_dump($first_name !== $last_name);