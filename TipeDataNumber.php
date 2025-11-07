<?php
// tipe data number
echo "Decimal";
var_dump(1234);
echo "Octal";
var_dump(0123);
echo "Hexadecimal";
var_dump(0x1A);
echo "Binary";
var_dump(0b111111111);
echo "Underscore di number";
var_dump(1_2_232);

// floating point
echo "Floating Point";
var_dump(1.234);
echo "Floating Point dengan E notation plus (1.2 x 1000)";
var_dump(1.2e3);
echo "Floating Point dengan E notation minus (7 x 0.001)";
var_dump(7e-3);
echo"underscore di floating point";
var_dump(1_232.4242);

echo "Integer Overflow";
var_dump(9223372036854775888);