<?php
// pecah pecah dalam beberapa file
// Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan
// once biar cuma sekali di load biar gak error
include_once "Function.php";
include_once "Function.php";
require "FunctionArgument.php";


echo Hello();
echo ucapHello("farel", "ar");
