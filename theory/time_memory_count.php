<?php

$start_time = microtime(true);

// $moviesCount = count($cinemaMovies);

// for ($index = 0; $index < $moviesCount; $index++) {
//     echo $cinemaMovies[$index] . "\n";
// }



$end_time = microtime(true);

// Oblicz czas wykonania
$execution_time = ($end_time - $start_time);

// Pobierz zużycie pamięci

$memory_usage = memory_get_peak_usage(true);
echo 'Czas wykonania: ' . $execution_time . " sekundy\n";
echo 'Zużycie pamięci: ' . $memory_usage . ' bajtów';