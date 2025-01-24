<?php

for ($i = 1; $i < 10; $i++) {
    echo $i . "\n";
    if ($i == 5) break;
    //break is use to come outside the loop
}

$n = 4;

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $i . " " . $j . "\n";
        if($i==2 && $j== 2) break;
    }
}
