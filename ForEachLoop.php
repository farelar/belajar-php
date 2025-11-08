<?php

// $fruits = ["Apel", "Jeruk", "Pisang", "Mangga"];

// foreach($fruits as $buahtok){
//     echo "Buah - $buahtok" . PHP_EOL;
// }

$nama = [
    "numor1" =>"Farel", 
    "starbor" => "Rizky", 
    "ok gas" => [
        "mantul" => "Bagas",
        "keren" => "Dwi",
    ],
    "jelek" => "Setiawan"
];   

foreach($nama as $key => $orang){
    if(is_array($orang)){
        foreach($orang as $gantikey => $gantiorang){
            echo "$gantikey: $gantiorang". PHP_EOL;
        }
    } else{
        echo "$key : $orang" . PHP_EOL;
    }
}

// for ($i = 0; $i < count($nama); $i++) {
//     echo "Nama - $nama[$i] " . PHP_EOL;
// }