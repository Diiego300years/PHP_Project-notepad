<?php

if (true) {
    echo "True \n";
}

// with element it's true
var_dump((bool) [0]);

var_dump((bool) null);

// If else
$categories = ['R' => 17, 'PG=13' => 13];

$age = 12;

if (11 >= $categories["R"]) {
    echo 'Wchodzisz!';
}  else if ($age >= 13)
{
    echo 'Jesteś za młody na ten film, chcesz może kupić bilet na Jumanji?';
}else {
    echo 'Za młody jesteś' . "\n";
}


$grade = 3;

// if($grade > 4){
//     $mood = 'happy';
// } else {
//     $mood = 'unhappy';
// }

// echo $mood;

// if skrócony
$mood = $grade > 4 ? 'happy' : 'unhappy';
echo $mood;


$age = 24;
$myWallet = 200;
$ticketprice = 10;

// najwazniejsze operatory logiczne 
/*
    && and
    || or
    ! negacja - czy wyrażenie nie jest prawdziwe
    xor - prawda gdy tylko jdne jest prawdziwe
  

*/

if ($age >= 17 && $myWallet > $ticketprice && (2+2 === 4 || 2+3 === 10)) {
    echo "\nBilet kupiony!";
} else{ 
    echo "\nNie kupisz!";
}