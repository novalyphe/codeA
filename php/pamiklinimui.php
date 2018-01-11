<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba diena</title>

    <style>

        html {
            background: url(/maistaskitaip/nuotraukos/10402419_10152650047326837_8492336144929512183_n-680x388.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }

        .mano {
            border-spacing: 0px 5px;
            display: table;
        }

        .manoeilute{
            padding: 5px 5px;
            font-size: 40px;
            font-weight: normal;
            background: lightgreen;
            display: table-row;

        }

        .manostulpelis{
            padding: 5px 5px;
            font-size: 40px;
            font-weight: normal;
            background: lightgreen;
            display: table-cell;
        }


    </style>

</head>
<body>

<div  class="mano">
    <div class="manoeilute" >

        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing
        </div>
        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
    </div>
</div>

<div  class="mano">
    <div class="manoeilute" >

        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing
        </div>
        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
    </div>
</div>

<div  class="mano">
    <div class="manoeilute" >

        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing
        </div>
        <div class="manostulpelis">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
    </div>
</div>


</body>
</html>


<?php

echo '<body style="font-size: 25px; font-weight: normal;"> </body>';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$a = 1;
$b = 2;
$c = 3;

$d = ($a**2)+($b**2)+($b**2);

echo  $d.'<br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$asnuo = ['vardas' => 'Paulius', 'pavarde' => 'Paskevicius', 'gim_metai' => '1990 - 02 - 23', 'lytis' => 'Vyras'];

var_export($asnuo);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function para($a,$b,$c,$d){

    $sum = ($a+$b+$c+$d)/4;

    return $sum;
}

echo '<br>'.para(2,3,5,6).'<br>';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$df = ['vard'=>'Paulius', 'pav'=>'Pausk', 'amz'=>'27', 'k'=>'gal'];

foreach ($df as $key=>$value){

    $df[$key] = ucfirst(strtolower($value)). ' . ';

}

var_dump($df);

echo '<br>';
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class automobilis{

    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($vard,$mod,$met){

        $this->gamintojas = $vard;
        $this->modelis = $mod;
        $this->metai = $met;

    }
    function duomenys(){

        $x = $this->gamintojas . ' - ' . $this->modelis . ' - ' . $this->metai ;
        echo $x;
    }

}


$ahoi = new automobilis("Honda", 'Civic', '1999');

echo $ahoi->duomenys();

echo '<br>';
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class lengvasis extends automobilis{

    function duomenys(){

        $x = ' Lengvasis automobilis' . ' : ' . $this->gamintojas . ' ' . $this->modelis . ' - ' . $this->metai ;
        echo $x;
    }

}

$ahoi2 = new lengvasis("Honda", 'Civic', '1999');

echo $ahoi2->duomenys();
echo '<br>';


class krovininis extends automobilis{

}

$krov = new krovininis('saiba','dumine', '1990');

echo $krov->duomenys();
echo '<br>';
echo '<br>';

class textList {

    public $texts = [];

    function  add($text){
        $this->texts [] = $text;
    }
    function sudelis(){
        $aha = 0;

        foreach ($this->texts as $kazkas){
            $aha += strlen($kazkas);
        }
        return $aha;
    }

}


$objektas = new textList();

$objektas->add('as');
$objektas->add('labas');
$objektas->add('ka tu');
$objektas->add('ka vakare');

echo $objektas->sudelis().'<br>';
echo '<br>';


////////////////////////////////////////////////////////////////////////////////////////////////////////

function parametrai($p,$o,$i){

    $s = 'Marke: %s <br> Modelis: %s <br> Metai: %s ';

    return sprintf($s, $p, $o, $i);

}

echo parametrai('audi', '100', 'lupena').'<br>';

echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami for ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis, pirmą raidę - didžiąja. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos vertikaliais '|' brūšniais.
*/


$s = 'Zaidimas smagu kai ji zaidi';


$e = (explode(' ', $s));
//var_export($e);

for ($i = 0; $i<count($e); $i++) {
    $e[$i]= ucfirst(strtolower($e[$i]));
}

$z = implode(" | ", $e);

echo $z;
echo '<br>';
echo '<br>';
///////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes.
*/

class codeAcademy {

    public $data;
    public $skaicius;
    public $auditorija;

    function __construct($dt,$sk,$aud){

        $this->data = $dt;
        $this->skaicius = $sk;
        $this->auditorija = $aud;

    }


}
$j = new codeAcademy('2018.01.03', 'gaunu 10', '3auditorija');
var_export($j);

echo '<br>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend, kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “kursas” veikimą.
*/

class backend extends codeAcademy {

    function kursas(){

    $k = "backend kursas" . ' : ' . $this->data . ', ' . $this->skaicius . ', ' . $this->auditorija;
        echo $k;
    }
}

$j2 = new backend('2018.01.03', 'gaunu 10', '3auditorija');
echo $j2->kursas();

echo '<br>';


class frontend extends codeAcademy {

    function kursas(){
        $k2= "frontend kursas prasides" . ' : ' . $this->data . ', ' . $this->skaicius . ', ' . $this->auditorija;
        echo $k2;
    }


}
$j3 = new frontend('2018.01.12', 'gausiu 10', '3auditorija');
echo $j3->kursas();

echo '<br>';
echo '<br>';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame aprašykime klasę rndList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas generate(), kuris sugeneruoja atsitiktini skaičių ir padeda į masyvą sąvybę $numbers. Taip pat sukurkite metodą list(), kuris surikiuoja masyve esančius skaičius ir išveda juos su echo atskiriant vieną nuo kito tarpais.
*/

class rndList {

    public $numbers = [];

    function generate(){

        $numb = rand(1,50);
        $this->numbers [] = $numb;

    }

    function listas(){

        sort($this->numbers);
    for ($i = 0; $i<count($this->numbers); $i++){
        echo  $this->numbers[$i] . ' ';
    }

}
}

$zz= new rndList();
$zz->generate();
$zz->generate();
$zz->generate();
echo $zz->listas();
echo '<br>';
echo '<br>';
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




echo '<br>';
echo '<br>';

?>