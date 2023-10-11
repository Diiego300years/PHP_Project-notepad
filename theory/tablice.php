<?php 

// zapis tablicowy 

$user = ['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];

var_dump($user);

// print_r nie pokazuje jaki typ

$digit  = 1;
$stringgg = '1';

var_dump($user);
print_r($user);

// po co?
var_dump($digit);
print_r($stringgg);

var_dump($user);
print_r('');

print_r('Pierwszy user $user[0] to: ' . $user[0]);

var_dump('');

// UWAGA BARDZO DZIWNE przypisać można do elementu np 11, nie koniecznie kolejno.

$index = 11;
$user[$index] = 'Zofia Tkacz';
var_dump($user);


// Kopiowanie indexu tablicy

$oldUser = $user[1];
$user[1] = 'Marcin B';
var_dump($oldUser);
print_r($user);


// Dodawanie na koniec tablicy: 

$user[] = 'Kamila';
print_r($user);


// Usuwanie elementów
unset($user[11], $user[12]);
print_r($user);

