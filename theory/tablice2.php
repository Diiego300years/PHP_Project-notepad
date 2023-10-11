<?php
// Ustawianie indeksów 

$user = [10 => 'Janek', 49=>'Basia', 3=>'Kasia'];
print_r($user[10] . ". \n Ilość elementów w tablicy zwracana z funkcji var_dump(count()): \n ");
print_r("\n");
var_dump($user);

// ile elementów?
var_dump(count($user));

print_r("\n");

//sortowanie tablicy które zmienia indeksy na począwszy od 0

sort($user, $flags = 0);

PRINT_R($user);

// Tablice numeryczne zaliczone, teraz TABLICE ASOCJACYJNE

 $tablica_aso = ['Kanpka' => 'Chleb z szynką', 'Bułka' => 'Ze śledziem'];

 print_r($tablica_aso);