<?php

$row = (int)readline("Enter Row Count:- ");
$col = (int)readline("Enter number Col Count:-");

$arr = [];

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $arr[$i][$j] = readline("Eneter The Elemet At Row:- $i Col:- $j =");
    }
}

foreach ($arr as $row2) {
    foreach ($row2 as $ele) {
        echo $ele . " ";
    }
    echo "\n";
}

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $arr[$i][$j] = $arr[$i][$j] * 2;
        // echo $arr[$i][$j] ." ";
    }
}


foreach ($arr as $row) {
    foreach ($row as $ele) {
        echo $ele . " ";
    }
    echo "\n";
}
