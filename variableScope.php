<?php


// php kita bisa buat variable dimanapun
// tapi aksesnya bisa dimana aja ditentuin (scope)
// ada 3 jenis variable global,static,local

// -----------------------
// global scope
$name = "aku";

function sayName(){
    global $name; //global keyword
    echo $name;
    echo $GLOBALS["name"]. PHP_EOL; //global variable
    // var_dump($GLOBALS); //global bisa diakses dari manapun
}
 
sayName();
// ------------------------------
// local scope untuk varible di dalam function

function createName(){
    $namelocal = 'eko';
}

createName();
// echo $namelocal . PHP_EOL;
// -----------------------------

// static scope biar variblenya gak reset saat function selesai
function increment(){
    static $counter = 1;
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}
increment();
increment();
increment();
