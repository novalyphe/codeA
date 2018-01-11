<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyti du kintamieji ir ekrane būtų išvestas tų kintamųjų dešimtainių logaritmų suma.
*/

$a = 2;
$b = 3;

echo log10($b)+log10($a);
echo '<br>';

/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas, aprašantis vieną šalį naudojant vardinius raktus, pavyzdžiui “šalis” => “Lietuva”. Masyve turi būti laukeliai ‐ šalis, sostinė, gyventojų skaičius, plotas.
*/


$c = ['salis' => 'Italija', 'sostine' => 'Roma', 'gyventoju_skaicius' => 'Daugybe', 'plotas' => 'Nezinomas'];


/*
06.Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus du parametrus ‐ skaičius, funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų kvadratų sumą padaugintą iš pi.
*/


function mat($d,$e){

 $f = (($d ** 2)+($e ** 2)) * M_PI;

 	return $f;
}

echo mat('2','3');
echo '<br>';
echo '<br>';

/*
07.Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 3 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis.
 */

$g = ['Labas','Ka','Tu'];

$i = 0;
foreach ($g as $key){

    $g [$i++] = strtolower($key);
}
var_export($g);
echo '<br>';
echo '<br>';































