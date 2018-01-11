



<?php

$m = [1,2,3,44,55,];

function vidurkis($mas){
    $sum = 0;
    for ($i=0; $i<count($mas); $i++) $sum += $mas[$i];  //kaskart prideda nauja skaiciu
    return $sum / count($mas);                          //gaunam vidurki

}
echo vidurkis($m).'<br>';
/////////////////////////////////////////////////////////////////////////////////////////

function prideti($mas, $skaicius){
    for ($i=0; $i<count($mas); $i++) $mas[$i] += $mas[$i] + $skaicius;  //pridedam prie kiekvieno skaiciaus skaiciu
    return $mas;

}
echo json_encode(prideti($m, 1)).'<br>';

/////////////////////////////////////////////////////////////////////////////////////////

$m2 = [2,3,64,23,13,5,778,1];

function didziausias($mm){                      // surandam didziausia skaiciu is masyvo
    $d = 0;
    for ($i=0; $i<count($mm); $i++){
        if($mm[$i] > $d ) $d = $mm[$i];
    }
    return $d;
}

echo didziausias($m2).'<br>';

////////////////////////////////////////////////////////////////////////////////////////

function maziausias($mm){                                      //ieskom maziausios skaiciaus
    for ($i=0; $i<count($mm); $i++){
        if (isset($d)){
            if ($mm[$i] < $d && $mm[$i] > 0) $d = $mm[$i];
        } else $d = $mm[$i];
    }
    return $d;
}

echo  maziausias($m2).'<br>';

////////////////////////////////////////////////////////////////////////////////////////









?>

