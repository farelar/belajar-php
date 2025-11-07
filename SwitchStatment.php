<?php

// switch buat kasus nya equal to  == ==

$nilai = "p";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda ngak lulus" . PHP_EOL;
        break;
    default:
        echo "salah jurusan";
        break;
}

// alternatif
switch ($nilai) :
    case "A":
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda ngak lulus" . PHP_EOL;
        break;
    default:
        echo "salah jurusan";
        break;
    endswitch;