<?php


function sulyginti2($h){

    $a = "Paulius";
    $b = "Saule";
    $c = "Menuliukas";

    if (strlen($a) == $h) return "$a";
    elseif (strlen($b) == $h) return "$b";
    elseif (strlen($c) == $h) return "$c";
    else return "Nera Vardo";
}

echo sulyginti2(7);





