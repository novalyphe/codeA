<?php
/////////////////////////////////////////////////////////////////////////
/*      1.sk masyvas
        2.padaryti funkcija
        3.sudauginti kiekviena elementa is sk. ir grazinti
        4.su echo json_encode isvesti
*/

$a = [2,4];

function daugyba($masyvas, $skaicius){

    for ($i=0; $i<count($masyvas); $i++)  $masyvas[$i] *= $skaicius;
    return $masyvas;

}
echo json_encode (daugyba($a, 10)).'<br>';

/////////////////////////////////////////////////////////////////////////
/*  1. text masyvas
    2. funkcija suskaiciuoti bendra mas textu simboliu skaiciu parametras masyvas
    3. echo rez is funkcijos
strleng
*/

$b = ['Paulius', 'Jonas', 'Gerai'];

function mazosios($f){
$d = 0;
for ($i = 0; $i<count($f); $i++) $d = strlen($f[$i]) +  $d;
   // for ($i = 0; $i<count($f); $i++) $d += strlen($f[$i]); ARBA TAIP.
return $d;
    }

echo mazosios($b) . '<br>';

//////////////////////////////////////////////////////////////////////////

$auto = ['koja', 'ranka', 'galva'];

function belenkas($kunas){
    $bet = 0;
    for ($i = 0; $i<count($kunas); $i++) $bet += strlen($kunas[$i]);
    return $bet;
}
echo belenkas($auto).'<br>';

///////////////////////////////////////////////////////////////////////////


$m = [3,5,1];

function sitas ($h){

    $s = 0;

    for ($i=o; $i<count($h); $i++);

    return ;

}

echo sitas($m);



$auto = ['koja', 'ranka', 'galva'];

function gf ($s){
        return $f=strtolower($s);

};

$cc=[];
for ($i=0; $i<count($m); $i++){

    $p=gf($h[$i]);
    $cc[]=strtoupper($p);
}
    echo json_encode($cc);

















