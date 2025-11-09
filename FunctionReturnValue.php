<?php

// Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bis membuat sebuah function mengembalikan nilai
// Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan k
// kunci return, lalu diikuti dengan data yang ingin dihasilkan
// Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu


function sum (int $pertama, int $second)
{
    $total =  $pertama + $second;
    return $total;
}

$total = sum(4,5);
var_dump($total);

// bisa kasih return tipe datanya apa nih
function getNilai(int $value):string{
    if($value >= 80 and $value<=100){
        return "A";
    } elseif ($value >= 70){
        return "B";
    } elseif ($value >= 60){
        return "C";
    } else{
        return "D";
    }
}

$functiondapetnilai = "getNilai";
$nilai = $functiondapetnilai(60);
var_dump($nilai);