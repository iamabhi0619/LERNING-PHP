<?php
$a1 = array("a"=>"red","b"=>"green","c"=>"blue", "d"=>"yellow");
$a2 = array("a"=>"red","b"=>"green","c"=>"blue");
$a3 = array("h"=> "magenta","i"=> "seagreen");
// $result = array_diff($a1, $a2,);
$result = array_flip($a1);
print_r($result);
echo"<br>";
print_r($a1);

echo "<br>";

$arr1 = array("red","green","blue","yellow");
$res_flip = array_flip($arr1);
print_r($res_flip);
