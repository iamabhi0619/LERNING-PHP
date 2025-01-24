<?php
$data = [
    "name" => "Abhishek Kumar",
    "current_sem" => "4th",
    "cgpa" => "8.5",
    "reg_number" => 12303842
];

echo $data["name"];

foreach($data as $key => $value){
    echo $key."".$value."";
}