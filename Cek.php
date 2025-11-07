<?php
echo "=== Kalkulator CLI PHP ===\n";
echo "Masukkan angka pertama: ";
$angka1 = (float) trim(fgets(STDIN));

echo "Masukkan operator (+, -, *, /): ";
$operator = trim(fgets(STDIN));

echo "Masukkan angka kedua: ";
$angka2 = (float) trim(fgets(STDIN));

switch ($operator) {
    case '+':
        $hasil = $angka1 + $angka2;
        break;
    case '-':
        $hasil = $angka1 - $angka2;
        break;
    case '*':
        $hasil = $angka1 * $angka2;
        break;
    case '/':
        if ($angka2 == 0) {
            echo "Error: Tidak bisa membagi dengan nol!\n";
            exit;
        }
        $hasil = $angka1 / $angka2;
        break;
    default:
        echo "Operator tidak dikenal.\n";
        exit;
}

echo "Hasil: $angka1 $operator $angka2 = $hasil\n";
