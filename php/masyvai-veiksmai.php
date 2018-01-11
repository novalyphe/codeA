



<?php

$m = ['BMW', 'Audi', 'Honda', 'Lada' ];

echo json_encode($m).'<br>'; //json_encode naudojama isvesti duomenis pagal jasona
sort($m); // rusevimas pagal reiksme didejimo tvarka
echo  json_encode($m).'<br>';
rsort($m); // rusevimas pagal reiksme nuo didziausio iki maziausio
echo  json_encode($m).'<br>'; // norint isvesti java scripte naudojama JSON.stringify
// shuffle($m); //maisymas
// echo json_encode($m).'<br>';

$m2 = array_slice($m, 1,2);
echo json_encode($m2). '<br>';


//////////////////////////////////////////////////////////////////////////////////////
$m3 = array_slice($m, 1,3);
echo json_encode($m3).'<br>';

$n = null;
for ($i=0; $i<count($m3); $i++){
    if ($m3[$i]== 'BMW'){
        unset($m3[$i]);
        break;
    }

}
echo json_encode($m3). '<br>';

//////////////////////////////////////////////////////////////////////////////////////

$m4 = $m;                               // si funkcija parodo ar yra honda masyve :D
if (in_array('Honda', $m4))
    echo 'Honda rasta <br>';
else echo 'Honda nerasta <br>';


echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////

$s = 'honda, bmw, audi, lada';          //masyvas is teksto
$ms = explode(',', $s);
echo json_encode($ms).'<br>';
echo '<br>';

$s2 = implode(": '<br>' ", $ms);
echo $s2.'<br>';

///////////////////////////////////////////////////////////////////////////////////////

list($auto1, $auto2, $auto3, $auto4) = $ms;         //automatiskai sumeta i auto masinas is ms

$a1 = $ms[0];                                       //
$a1 = $ms[1];                                       // arba rankiniu budu galima tai padaryti
$a1 = $ms[2];                                       //
$a1 = $ms[3];                                       //












?>
