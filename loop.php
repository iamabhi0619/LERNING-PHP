<?php

$i = 0;
$n = readline("Enter the Number:-");
$sum = 0;

//for
for ($i = 0; $i < $n; $i++) {
    $sum += $i;
}

// while
while ($i < $n) {
    // echo "$i \n";
    $sum += $i;
    $i++;
}

// echo "Sum = $sum \n";

$arr = [1,2,3,4,5,6,7,8];

foreach($arr as $val){
    echo "$val ";
}

