<?php  
function adder(&$str2)  
{  
    $str2 .= 'Call By Reference';  
}  
$str = 'Hello ';  
adder($str);  
echo $str;  
?> 
