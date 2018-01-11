<?php

function pitagoras ($a, $b ){

    return sqrt(($a ** $a ) + ($b ** $b ));

}
echo pitagoras (4,4 );
echo '<br>';
////////////////////////////////////////////////////////////


function pytis ($a , $b ){

    return sqrt($a **2 +$b **2);

}
echo pytis(3, 6).'<br>';

///////////////////////////////////////////////////////////


function pitagoro ($a, $b){
    $d= ($a**2) + ($b**2);
    $c= sqrt($d);
    return $c;
}
echo pitagoro(5, 2);
echo '<br>';
//////////////////////////////////////////////////////////

function atimimas($a, $b){

    return $a - $b;

}
echo atimimas(5, 4).'<br>';

/////////////////////////////////////////////////////////

function ilgas ($x, $y, $z){

    return ($x ** $x + sqrt($y) + ($x * $y) + $z);

}
echo ilgas( 5, 10, 2);
echo '<br>';







