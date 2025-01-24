<?php



// $n = readline("Enter thr length:- ");
// $arr = [$n];

// for ($i = 0; $i < $n; $i++) {
//     $arr[$i] = readline("val $i = ");
// }

// for ($i = 0; $i < $n; $i++) {
//     echo "value at $i = $arr[$i] \n";
// }


//2D array
$n = readline("Enter thr length:- ");
$arr = [[]];

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $arr[$i][$j] = readline("Val at $i $j :- ");
    }
}

// for ($i = 0; $i < $n; $i++) {
//     for ($j = 0; $j < $n; $j++) {
//         echo $arr[$i][$j];
//         echo " ";
//     }
//     echo "\n";
// }

foreach($arr as $row){
    foreach($row as $val){
        echo $val." ";
    }
    echo "\n";
}

// key value

// $data = [
//     "name" => "Abhishek Kumar",
//     "current_sem" => "4th",
//     "cgpa" => "8.5",
//     "reg_number" => 12303842
// ];

// echo $data["name"];

// foreach($data as $key => $value){
//     echo $key."".$value."";
// }