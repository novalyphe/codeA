



<?php

$m = ['Textas1', '.....TExtas2', 'TEXTAS3', 'Textas textuotas#'];

function mazosios($s){
    $x = strtolower($s);
    $x = rtrim(ltrim($x, '.'), '#');        //apvalo texta
    return $x;
}
/////////////////////////////////////////////////////////////////////
$mns = [];
$nm = [];
$mps = [];
$lms = [];
$lmx = [];
$lme = [];

    for ($i=0; $i<count($m); $i++){

    $s = mazosios($m[$i]);
    // $nm = ucfirst($s);
    $nm[] = ucwords($s);
    $mns [] = strtoupper($s);
    $mps [] = str_replace('a' , '*', $s);
    $lms [] = $s . '-' . strlen($s);
    $lmx [] = $s . ' - ' . strpos($s, 'a');
    $lme [] = str_shuffle($s);
    }

    echo json_encode($nm) . '<br>';
    echo json_encode($mns) . '<br>';
    echo json_encode($mps) . '<br>';
    echo json_encode($lms) . '<br>';
    echo json_encode($lmx) . '<br>';
    echo json_encode($lme) . '<br>';


$slamsto = ['Koja', 'ranka', 'Galva'];

function mazosiosdu($b){
    $konori = [];
    for ($i = 0; $i<count($b); $i++)
        $konori = strtoupper($b[$i]);
    return $konori;
}

echo json_encode($slamsto).'<br>';













?>