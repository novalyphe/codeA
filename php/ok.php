<?php

/* function skaicevimas($ka){

    $belekas = 0;

    for ($a = 0; $a < count($ka)); $a++){
    $belekas = $belekas + $ka[$a] * ($a + 1);
    }
    return $belekas;
}

$m = [2,5,6];

$rezultatas = skaicevimas($m);

*/

$sausainis = [1,2,3,4 ];

function saknis ($c){

    $belenkas = 0;
    for ($i = 0; $i<count($c); $i++) $belenkas = $belenkas + ($c[$i]);
    return sqrt($belenkas);

}

echo saknis ($sausainis).'<br>';
//////////////////////////////////////////////////////////////////////////////

$sausainis2 = ['sokoladinis', 'Vanilinis', 'Beskonis'];

function sausas($s){
    $cc= [];
    for ($i=0; $i<count($s); $i++){

        $cc [] = ucfirst($s[$i]);
    }
    return $cc;
}

echo json_encode(sausas($sausainis2)).'<br>';

//i echo isvedam funkcijos pav ir masyvo pav

////////////////////////////////////////////////////////////////////////////////

$olia = ['koja', 'ranka', 'bulve'];

function ciosas($s){

    $cc = [];

    for ($i = 0; $i<count($s); $i++){

        $cc [] = str_shuffle($s[$i]);
        }

    return implode( ' ', $cc);

}

echo ciosas($olia).'<br>';

/////////////////////////////////////////////////////////////////////////////////

/*
 *      1.  text masyvas
 *      2.  sukuriti funkcija
 *          grazina masyva
 *      3.  nustatyti kiek simboliu texte
 *          prideti prie simboliu skaiciu viena
 *          prikabinti prie teksto gauta skaiciu
 *      4.  echo jason
 *
 */

$masyvas = ['Kaunas', 'Vilnius', 'Klaipeda'];

function miestai($mas){
    $cc= [];


    for ($i=0; $i<count($mas); $i++){
        $cc [] = $mas[$i]. '.' .(strlen($mas[$i]) + 1);
    }
    return $cc;
}

echo json_encode (miestai($masyvas)).'<br>';
echo '<br>';
echo '<br>';
////////////////////////////////////////////////////////////////////////////////////


function masinos($a, $b, $c){
   return
            ["gamintojas" => ucfirst(strtolower($a)),
                 "modelis" => ucfirst(strtolower($b)),
                    "metai" => ucfirst(strtolower($c))];


}

                    $auto = [];

                    $auto [0] = masinos("BMW", "320i", "2010");
                    $auto [1] = masinos("Tesla", "Tesla", "2017");
                    $auto [2] = masinos("Skoda", "Kazkokia", "2011");

                    ksort($auto);


function asiociatyvinis($d){

    $auto_gamintojas = $d["gamintojas"];
        $auto_modelis = $d["modelis"];
            $auto_metai = $d["metai"];

            return "<tr><td>$auto_gamintojas</td><td>$auto_modelis</td><td>$auto_metai</td></tr>";

}





        echo '<table style="border: 1px black solid">';
        echo '<tr><th>Gamintojas</th> <th>Modelis</th> <th>Metai</th></tr>';
        for ($i = 0; $i < count($auto); $i++) echo asiociatyvinis($auto[$i]);
        echo '</table>';

        //var_export ($kolegos);

        echo '<br>';
        echo '<br>';
/////////////////////////////////////////////////////////////////////////////////////












































