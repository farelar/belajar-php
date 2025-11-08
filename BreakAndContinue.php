<?php

$counter = 1;

while(true){
    echo "Counter ke - " . $counter . PHP_EOL;
    $counter++;

    if($counter > 10){
        break;
    }
}

// menampilkan bilangan ganjil saja pengguanan continue
for($counter = 0; $counter <= 100; $counter++){
    if($counter % 2 == 0){
        continue; // skip bilangan genap
    }
    echo "Counter Ganjil ke - " . $counter . PHP_EOL;
}