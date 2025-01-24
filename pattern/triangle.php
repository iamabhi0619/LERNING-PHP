<?php

$n = 5;

$temp = 0;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        $temp += 1;
        echo $temp." ";
    }
    echo "\n";
}
