<?php
$courses = array("PHP", "Laravel", "Python", "Django", "Java", "Spring");
print_r(array_chunk($courses, 2 ,true));

echo"<br>";

$a1 = array("a"=>"red","b"=>"green","c"=>"blue", "d"=>"yellow");
$a2 = array("a"=>"red","b"=>"green","c"=>"blue");
$a3 = array("h"=> "magenta","i"=> "seagreen");

$res = array_merge($a1, $a2, $a3);
print_r($res);

echo "<br>";

// array_pop($a1);
print_r($a1);

echo "<br>";

$a4 = array("d"=>"yellow");
// array_push($a1, $a4);
print_r($a1);


echo "<br>";

echo "Reverse <br>";

$rev = array_reverse($a1, true);
print_r($rev);

