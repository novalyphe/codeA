<?php

/*
Sukurkite PHP skriptą, kuriame būtų aprašyti trys kintamieji ir ekrane būtų išvestas tų kintamųjų kvadratų vidurkis.
*/

$a = 2;
$b = 3;
$c = 4;

$d = $a**2+$b**2+$c**2;
echo $d/3;
echo '<br>';
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris codeAcademy kursus, kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus. Asociatyviniuose  masyvuose turi būti laukeliai: kurso pavadinimas, mokinių skaičius, kursų pradžios data.
*/


$df = [
    ['Kursas'=>'FrontEnd', 'Moksk'=>'12', 'Kursu_data'=>'2017'],
    ['Kursas'=>'BackEnd', 'Moksk'=>'10', 'Kursu_data'=>'2017'],
    ['Kursas'=>'FullStack', 'Moksk'=>'14', 'Kursu_data'=>'2017'],
];

var_export($df);
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 5 parametrus ‐ skaičius, funkcija turi paskaičiuoti aritmenitinį vidurkį, ištraukti šaknį ir padauginti iš 10. Rezultatą gražinti. Iškviesti funkciją perduodant 5 parametrus (skaičius) ir parodyti rezultatą.
*/

function skaicius($s,$d,$f,$g,$h){

   return $j=sqrt($s+$d+$f+$g+$h)/5*10;

}

echo skaicius(10,2,13,3,5);
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami while ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidemis, gale teksto prijunkite taško simbolį '.'. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos kableliais ','.
*/

$k = ('Labas vakaras lietuva');
$l = (explode(' ', $k));

$i=0;

while ($i<count($l)){

    $l[$i]= strtoupper($l[$i]);
    $i++;
}

$la = implode(",", $l);

echo $la.'.';
echo '<br>';
echo '<br>';
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”, kuri turi savybes ‐ pavadinimas, miestas, studentai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, miestas, studentai ‐ perduotus parametrus padėtų į savo savybes.
*/

class univeras {

    public $pavadinimas;
    public $miestas;
    public $studentai;

    function __construct($stud,$pav,$miest){
        $this->studentai = $stud;
        $this->pavadinimas = $pav;
        $this->miestas = $miest;
    }

    function info(){

        $as = $this->pavadinimas . ' ' . $this->studentai . ' ' .  $this->miestas;
        echo $as;
    }

}
$la2 = new univeras('olia','vasia', 'kukumaku');
var_export($la2);
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases ktu ir vu, kurios paveldi universitetas klasę. universitetas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, miestais, studentai”. ktu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (KTU)”. KTU ‐ tiesiog paprastas žodis. vu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (VU)”. VU ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/

class ktu extends univeras {

    function info(){

        $as2 = 'KTU' . ' ' . $this->pavadinimas . ' ' . $this->studentai . ' ' .  $this->miestas;
        echo $as2;
    }
}

$la3 = new ktu( 'olia','vasia', 'kukumaku');
echo $la3->info();
echo '<br>';

class vu extends univeras {


}

$la4 = new vu('olia','vasia', 'kukumaku');
echo ' '.'VU'.$la4->info();
echo '<br>';
echo '<br>';


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame aprašykite klasę loto, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas, taip pat būtų metodas generate(), kuris sugeneruoja 5 x 5 atsitiktinių skaičių dvimatį masyvą (min skaičius = 1, max skaičius = 75). Sukurkite metodą get(),kuris išveda sugeneruotą masyvą 5 x 5 HTML lentele. Pademonstruokite veikimą.
*/

class loto{

    public $table = [];

    function generate(){

        for ($i = 0; $i<5; $i++){
            for ($i2 = 0; $i2<5; $i2++){
                   $this->table[$i][$i2] = rand(1,75);
            }
        }

    }

    function get(){

        echo '<table style="border: 1px black solid">';
        for ($i = 0; $i<5; $i++){
           echo  '<tr>';
            for ($i2 = 0; $i2<5; $i2++){
                echo '<td>'.$this->table[$i][$i2].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }


}

$zz= new loto();
$zz->generate();
echo $zz->get();
echo '<br>';
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class loto2{

    public $table = [];

    function add($m){

        $s = 0;
        foreach($m as $number){
            $s += $number;
        }

        $m[] = $s / count($m);
        $this->table[] = $m;

    }

    function get(){

        echo '<table style="border: 1px black solid">';

        for ($i=0; $i<count($this->table); $i++){
            echo '<tr>';

            for ($j=0; $j<count($this->table[$i]); $j++){
                echo '<td>' . $this->table[$i][$j] . '</td>';
            }

            echo '</tr>';
        }
        echo '</table>';
    }
}
$a = new loto2();
$a->add([1,2,5]);
$a->add([6,22,55]);
$a->add([16,27,51]);
$a->get();

echo '<br>';
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuris panaudodamas PDO objektą atliktų prisijungimą prie duomenų bazės ir įvykdytų SQL užklausą visų lentelės ‘asmenys’ duomenų apie 3 vyriausius asmenis gavimui. Rezultatus išveskite HTML lentelės forma.
*/

/*$cnn = new PDO ('mysql:host=localhost:8889; dbname=asmenys', 'test', 'test');
$res = $cnn->query('select asmuo_id, asmuo_vardas, asmuo_pavarde, asmuo_data from asmenys order by asmuo_data asc limit 0,3');
echo '<table style="border: 1px black solid">';
while ($row = $res->fetch()){
    echo '<tr>';
    echo '<td>' . $row['asmuo_vardas'].'</td>';
    echo '<td>' . $row['asmuo_pavarde'].'</td>';
    echo '<td>' . $row['asmuo_data'].'</td>';
    echo '</tr>';
}
echo '</table>';


echo '<br>';
echo '<br>';*/

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<p style="background: red">Kita Diena pradedam nuo 5.4</p>'.'<br>';
echo '<br>';
echo '<br>';

/*
Sukurkite PHP skriptą, kuriame būtų aprašyti du kintamieji. Sudėkite juos, sumą padauginkite iš PI reikšmės. Išveskite rezultatą ekrane.
*/

$as = 1;
$as1 = 3;

$as3 = $as + $as1;
echo $as3*M_PI;

echo '<br>';
echo '<br>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašytas taksi automobilio asociatyvinis masyvas, kurio raktai yra: gamintojas, modelis, metai, vairuotojai. Vairuotojai taip pat turi būti asociatyvinis masyvas, kurio raktai: vardas, pavarde, stazas.
*/

$ad = ['gamintojas'=>'Girteka', 'modelis'=>'Mersas','metai'=>'1999','vairuotojai'=>
        ['vardas'=>'Paulius','pavarde'=>'Paskevicius','stazas'=>'7.5 metu']
];
var_export($ad);

echo '<br>';
echo '<br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, su 3 parametrais: minimalus skaicius, maksimalus skaicius, kiek atsitiktinių skaiciu sugeneruoti. Funkcija turi gražinti atsitiktinių skaičių masyvą. Pademonstruoti funkcijos veikimą.
*/

function randomSk($ah,$ah1,$ah2){

    $gh = [];

    for ($jo=0; $jo<$ah2; $jo++){
        $gh [] = rand($ah,$ah1);
    }
    return $gh;

}

var_dump(randomSk(2,10,5));

echo '<br>';
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis skaičių masyvas. Masyvo kas antro elemento reikšmę cikle programiškai pakeiskite į 0.
 */

$aq = [2,3,4,5,6,6,7,8,1,3];

for ($qw = 0; $qw < count($aq); $qw++){
    if ($qw%2 !=0)

        $aq[$qw] =  0;
}
var_dump($aq);

echo '<br>';
echo '<br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”, kuri turi savybes ‐ pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus du parametrus ‐ pavadinimas, kaina ‐ perduotus parametrus padėtų į savo savybes. Panaudodami prieš tai sukurtą klasę dviratis, sukurkite klases moteriskas ir vyriskas, kurios paveldi dviratis klasę. dviratis klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, kaina”. moteriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: moteriskas”. moteriskas ‐ tiesiog paprastas žodis. vyriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: vyriskas”. vyriskas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/

class dviratis{

    public $pavadinimas;
    public $kaina;

    function __construct($pav,$kn){

        $this->pavadinimas = $pav;
        $this->kaina = $kn;
    }

    function info(){
        $shaa = $this->pavadinimas . ' ' . 'Kaina' .  $this->kaina;
        echo $shaa;
    }
}

$sha = new dviratis('Kalnu dviratis',': 2000 Eur');
echo '<hr>';
echo $sha->info().'<hr>';
echo '<br>';

class moteriskas extends dviratis {

    function info(){
        $shaa2 = 'Moteriskas'. ' ' .$this->pavadinimas . ' ' .'Kaina' .   $this->kaina;
        echo $shaa2;
    }

}
$sha3 = new moteriskas('Kalnu dviratis',': 2000 Eur');
echo '<hr>';
echo $sha3->info().'<hr>';
echo '<br>';

class vyriskas extends dviratis {

    function info(){
        $shaa3 = 'Vyriskas'. ' ' .$this->pavadinimas . ' ' .'Kaina' .   $this->kaina;
        echo $shaa3;
    }

}
$sha4 = new vyriskas('Kalnu dviratis',': 2000 Eur');
echo '<hr>';
echo $sha4->info().'<hr>';
echo '<br>';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers. Sukurkite metodą delMin(), kuris pašalina mažiausią masyve sąvybėje esantį skaičių. sukurkite funkciją getInfo(), kuris išveda skaičius esančius savybėje.
*/

class numbersList {

    public $numbers=[];

    function add($number){

        $this->numbers[]= $number;

    }


}

$objektas = new numbersList();

$objektas->add(1);
$objektas->add(2);
$objektas->add(3);
$objektas->add(4);

echo 'Tau pavyko :D'.'<br>';
echo '<br>';




class auto23{
    
    public $sarasas = [];
   
    function __construct(){

        $sarasas [] = [
            ['bmw','nera','2000'],
            ['bmw','yra','2000'],
            ['bmw','nera','2001'],
    ];
    }

    function getList(){

            echo '<table style="border: 1px black solid">';

            for ($i = 0; $i<count($this->sarasas); $i++){
                echo  '<tr>';
            for ($i3 = 0; $i3<count($this->sarasas); $i3++){
                echo  '<tr>';
            for ($i2 = 0; $i2<count($this->sarasas); $i2++){
                echo '<td>'.$this->sarasas[$i][$i2][$i3].'</td>';

            }

            echo '</tr>';
        }

        echo '</table>';

    }
}

                



$objektas23 = new auto23();
$objektas23->getList();







