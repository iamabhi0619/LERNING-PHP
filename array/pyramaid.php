<?php

$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        echo " ";
    }
    for ($k = 0; $k < $i+1; $k++) {
        echo "*";
    }
    echo "\n";
}
