<?php

/*
 * daugematis masyvas yra nes viename masyve yra 3 masyvai o jeigu masyvo masyve
 * sukurtume dar masyva butu trimatis masyvas
 * daugiamaciai masyvai pagrinde kuremi skaicevimams.
 * */


$a = [
    ['bmw', '320i', '2000'],
    ['audi', '100', '2001'],
    ['honda', 'civic', '2002'],
];


$x = 3;
$y = 3;

$m[0][2] = 3000; //pirmo masyvo pakeitimas vyksta taip nurodant pozicija ir ka keiti.

echo '<table>';

for ($i = 0; $i<$y; $i++) {
    echo '<tr>';
    for ($j=0; $j<$x; $j++) {
        echo '<td>' . $a[$i][$j] . '</td>';
    }
    echo '<tr>';
}

echo '</table>';


