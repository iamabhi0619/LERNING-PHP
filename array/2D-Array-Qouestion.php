<?php

$arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

$n = readline("Enter the number to check:- ");

$check = false;
foreach ($arr as $row) {
    foreach ($row as $val) {
        if ($val == $n) {
            $check = true;
        }
    }
}

if ($check) echo "Number is present..!!\n";
else echo "Number is not present..!!\n";


