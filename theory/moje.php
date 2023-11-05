<?php


// $digit1 = 10.11;
// $digit2 = 20.23;

// if($digit1 === $digit2){
//     true;
// }
// else{
//     false;
// }



function add(int|float $param1, int|float $param2): int|float {
    return $param1 + $param2;
}


// echo add($digit1, $digit2);


$digggfdggg = 1;



// Wyjaśnienia, string może być nullem, domślnie nim jest BO inaczej gdyby nie było w funkcji nic to wyskoczyłby błąd.
function sayHello(?string $name=null)  {
    if($name !== null){
        echo 'I am not null !!!, look: ' . printf($name);
    } else {
        echo "\nI am simply null... :(  look:" . var_dump($name) . ' just null... ';
    }
}


// echo sayHello('null');
// echo sayHello(null);
// echo sayHello();

function myCall(string $name, callable $func): void{
    $func($name);
}

$userName_func = function(string $name): void{
    echo "$name\n";
};

myCall('jacek', $userName_func);

fn(int $value): int => 2 * $value;
$myFunction = fn(int $value): int => $value * 2;

var_dump($myFunction(20));

$users = [
    'Robert', 'Marcin', 'Kamila'
];

$hello = array_map(fn(string $value): string => "Hello ".$value,
    $users
);

var_dump($hello);