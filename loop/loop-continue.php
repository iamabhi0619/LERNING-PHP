<?php

$n = 4;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if (!$i == $j) {
            continue;
        }
        echo $i . " " . $j . "\n";
    }
}