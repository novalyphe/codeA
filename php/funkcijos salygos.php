<?php

function sulyginti( $a , $b){

    if ($a > $b) return 1;
    elseif ($a == $b) return 0;
    else return -1;
}
echo sulyginti( 3, 2) . "<br>";
echo sulyginti(3,3) . "<br>";
echo sulyginti(3,4) . "<br>";

/////////////////////////////////////////////////////////////


function ilgis($a,$b){
    if (strlen($a) == 0) return true;
    elseif (strlen($a)> $b) echo 'daugiau';
    elseif (strlen($a)< $b) return 'lygu';
    else echo 'maziau' . '<br>';

}
echo ilgis('kaunas',4). '<br>';
echo ilgis(6,'kaunas'). '<br>';
echo ilgis( 'kaunas', 10). '<br>';
echo ilgis('',4). '<br>';

$c = ilgis(6, 5);
if ($c) echo "Daugiau" . '<br>';
else echo "Nedaugiau" . '<br>';

///////////////////////////////////////////////////////////////


















