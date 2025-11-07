<?php

$data = [
    "database" => "my sql"
];

// if(isset($data["database"])){
//     $database = $data["database"];
// }else{
//     $database = "Ngak ada";
// }

$database = $data['database'] ?? 'nothing';
echo $database;