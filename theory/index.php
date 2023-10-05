<?php
echo "PHP Hello application!";


echo "<h1>Bum <br> tum</h1>";

// jeśli są tylko 'napis' to jest lipa bo nie odczyta \n
echo "Bum \n tum";

$my_array = [];
$nazwa = " Nazwa";
echo $nazwa;

$my_string = "111";
$new_integer  = intval($my_string);
echo $new_integer;

if (is_int($my_string)){
    echo " JEST INTEM !!!";
} else {
    echo " Nie jest intem  :(";
}

echo "<br></br>";
echo "<h1> Sprawdzam typy zmiennych, lekcja 2:  </h1>";

echo var_dump($new_integer), var_dump($my_string);
ECHO "<br></br>";

// DEFINOWANIE STAŁEJ, KTÓREJ NIE DA SIĘ ZMIENIĆ
define('PHP_SIZE', '<p>używam stałej, nie uzywam $ przy użyciu

ponadto jest funkcja do tego define() DO NAZYWANIA STAŁYCH UŻYWAMY TYLKO DUŻYCH LITER ORAZ _ W NAZWACH ZAMIAST CAMEL CASE SNAKE CASE</p>');
echo PHP_SIZE;


echo "<br></br>";

const LINE = "kolejny rodzaj wpisania zmiennej poprzez const, a nie define(). const jak w JS";
echo LINE;

echo "<br><?br>";
var_dump(5+5);

$imie = "Tom";
$nazwisko = "Bąk";
$nazwa = "Ela";
$nazwa .= " " . $nazwisko; 
echo " Operator kokatenacji (łączenie stringów): " . $imie . ' ' . $nazwisko . " Można użyć  $imie . '' . $nazwisko lub .= jak np:

" . $nazwa; 



//     POST I PRE INKREMENTCJA


// to jest post ikrementacja
$age = 11;
var_dump($age++);
var_dump($age); 

$age = 11;
var_dump($age);
var_dump(++$age);
