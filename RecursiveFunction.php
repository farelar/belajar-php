<?php
// <!-- recursive adalah kemampuan function memanggil funtion dirinya sendiro -->
function factorialLop (int $value):int{
    $total = 1;
    for ($i =1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
}

function recursive(int $value):int {
    if ($value==1){
        return 1;
    }
    else{
        return $value * recursive($value - 1);
    }
}

var_dump(recursive(20));
