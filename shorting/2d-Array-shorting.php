<?php

$n = 3;
$arr = [[10, 7, 8], [1, 6, 2], [3, 5, 9]];

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        for ($k = 0; $k < $n - 1; $k++) {
            if ($arr[$i][$k] < $arr[$i][$k + 1]) {
                $temp = $arr[$i][$k];
                $arr[$i][$k] = $arr[$i][$k + 1];
                $arr[$i][$k + 1] = $temp;
            }
        }
    }
}

foreach ($arr as $row) {
    foreach ($row as $val) {
        echo " " . $val . " ";
    }
    echo "\n";
}
