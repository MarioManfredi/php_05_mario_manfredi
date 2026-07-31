<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$somma = 0;
$index = 0;

foreach( $numbers as $indice => $number){
    if($number % 2 == 0){
        $somma += $number;
        echo "Numero " . $number . " alla posizione " . $indice . "\n";
        $index++;
    }
}

$media = $somma / $index;
echo "La media totale di " . $index . " numeri è " . $media;