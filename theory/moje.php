<?php

$digit1 = 10.11;
$digit2 = 20.23;

if($digit1 === $digit2){
    true;
}
else{
    false;
}



function add(int|float $param1, int|float $param2): int {
    return $param1 + $param2;
}


echo add($digit1, $digit2);



