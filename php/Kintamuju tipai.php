<?php

$a = true;      //logines reiksmes
$b = false;

$c = 6 > 5 ;    // gauname true
$d = 5 > 6 ;    // gauname false

echo $a . "<br>";

var_dump($c);   // naudojami diegnostinems dalykams
print_r($c);

$f = ( bool)1;
var_dump($d) . "<br>";


////////////////////////////////////////////////

$int_a = 0x10;      //hex dec integer
echo $int_a . '<br>';

$float_a = 1.5e1;   //float
echo $float_a . '<br>';

/////////////////////////////////////////////////

    // EILUTES

////////////////////////////////////////////////

$eil = ' &*& ';
$eil_a = ' Labasai ka darai';                   //viengubos kabutes neleidzia interpretuoti
echo $eil_a . '<br>';
echo " Labasai ka darai $eil " . '<br>';        // dvigubos kabutes leidzia interpretuoti


/////////////////////////////////////////////
//puikus dalykas < < < e o t norint isvesti teksta


$aaaa = <<<EOT
  
ka tu ka vakare? <br>
o ka ryt? :D

EOT;

echo $aaaa . '<br>';



/////////////////////////////////////////////
// atskaitos taskas ir pavertimas viska diedziosiom raidem

$bbb = "Labas rytas";
$ccc = substr($bbb, 6 , 3);
echo $ccc . "<br>";
echo strtoupper($ccc) . "<br>";

/////////////////////////////////////////////
///

$o_1 = new stdClass();                  //objektos sukurimas
//$o_2 = new class {};                    //objektos sukurimas
$o_3 = (object) [];                     //objektos sukurimas
$o_4 = json_decode( "{}");


$o_1->tipas = "automobilis";
$o_1->pavdeze = "automatine";
$o_1->durys = 4;

var_dump($o_1);
echo $o_1->tipas . ' ' . $o_1->pavdeze . "<br>";
$o_1->{'labas rytas'} = 'aaa';
echo $o_1->{'labas rytas'} .'<br>';
echo $o_1->{'tipas'} . ' ' . $o_1->{'pavdeze'} . "<br>";

//////////////////////////////////////////////
// operators










?>