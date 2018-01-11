<?php

class numberList{

    public $numbers;

    function add($number) {
        if (!isset($this->numbers)) $this->numbers = [];
        $this->numbers [] = $number;

    }
    function average(){
        $sum = 0;
        for ($i = 0; $i<count($this->numbers); $i++){

            $sum += $this->numbers[$i];
        }
        return $sum / count($this->numbers);
    }

}

$objektas = new numberList();

$objektas->add(32);
$objektas->add(12);
$objektas->add(1632);
$objektas->add(123);

echo $objektas->average().'<br>';



/*
 * class  turgus{

  public $automobiliai;

    function automobilis($gamintojas,$modelis,$metai,$kaina){

        if (!isset($this->automobiliai)) $this->automobiliai = [];
        $this->automobiliai [] =

            ['gamintojas' => $gamintojas,
             'modelis' => $modelis,
             'metai' => $metai,
             'kaina'=> $kaina, ];

    }
    function minKaina(){
        $min = $this->automobiliai[0]['kaina'];
        for ($i = 0; $i<count($this ->automobiliai); $i++){
            if ($this->automobiliai[$i]['kaina']< $min) $min = $this->automobiliai[$i]['kaina'];
        }
        return $min;
    }

}

$objektas = new turgus();

$objektas->automobilis('bmw', '320i','2009', '3500');
$objektas->automobilis('bmwb', '320ia','2009', '35000');
$objektas->automobilis('bmwa', '320ic','2009', '350');
$objektas->automobilis('bmwc', '320ie','2009', '3550');

echo $objektas->minKaina().'<br>';
*/


class personalas {

    public $zmogus;

    function persona($vardas,$pavarde,$lytis){

        if (!isset($this->zmogus)) $this->zmogus = [];
        $this->zmogus [] =

            ['vardas' => $vardas,
                'pavarde' => $pavarde,
                'lytis' => $lytis,
            ];
    }

    function kiekMoteru (){

        $mot=0;

        for ($i=0; $i<count($this->zmogus); $i++){
            if ($this->zmogus[$i]['lytis'] == "moteris") $mot+=1 ;

            }
            return $mot;
    }

    function kiekVyru (){

        $vyr = 0;

        for ($i=0; $i<count($this->zmogus); $i++){
            if ($this->zmogus[$i]['lytis'] == "vyras") $vyr+=1;
        }
        return $vyr;
    }

}



$objektas = new personalas();

$objektas->persona('a', 'p','vyras');
$objektas->persona('h', 'a','moteris');
$objektas->persona('o', 'b','vyras');
$objektas->persona('m', 'h','vyras');
$objektas->persona('of', 'by','moteris');
$objektas->persona('mj', 'hyu','vyras');

echo $objektas->kiekMoteru().'<br>'. $objektas->kiekVyru().'<br>';

class automobiliai {

    public $auto;

    function automobilis($gamintojas,$modelis,$kuras,$sanaudos){
        if (!isset($this->auto)) $this->auto=[];
        $this->auto[] = [
            'gamintojas' => $gamintojas,
            'modelis' => $modelis,
            'kuras' => $kuras,
            'sanaudos' => $sanaudos
        ];
    }

    function kuroVidDyzelis (){
        $dyzelis=0;
        $kurosan=0;

        for ($i=0; $i<count($this->auto); $i++){
            if ($this->auto[$i]['kuras'] == "dyzelis") $dyzelis+=1;
            if ($this->auto[$i]['kuras'] == "dyzelis") $kurosan += $this->auto[$i]['sanaudos'];
            }
          return $kurosan/$dyzelis;
    }
    function kuroVidBenzinas () {
        $benz = 0;
        $kuras = 0;

        for ($i = 0; $i < count($this->auto); $i++) {
            if ($this->auto[$i]['kuras'] == "benzinas"){
                $benz += 1;
                $kuras += $this->auto[$i]['sanaudos'];
            }
        }
        return $kuras/$benz;
    }


}

$obj = new automobiliai();

$obj->automobilis('a', 'p','benzinas',10);
$obj->automobilis('h', 'a','dyzelis', 7);
$obj->automobilis('o', 'b','dyzelis', 8);
$obj->automobilis('m', 'h','benzinas', 9);
$obj->automobilis('of', 'by','dyzelis', 5.5);
$obj->automobilis('mj', 'hyu','benzinas', 15);

echo $obj->kuroVidDyzelis().'<br>'.$obj->kuroVidBenzinas().'<br>';

////////////////////////////////////////////////////////////////////////////////////////////////

$a = 2;
$b = 4;

echo (sqrt($a) + sqrt($b))/2 .'<br>';

////////////////////////////////////////////////////////////////////////////////////////////////

$a = ['marke' => 'Ford', 'modelis' => 'eskortas', 'pag metai' => 1990, 'spalva' => 'raudona', 'galia' => '100kw'];

///////////////////////////////////////////////////////////////////////////////////////////////

function skaicius($a,$b,$c){

    return $a + $b + $c;


}

echo skaicius(2,3,4).'<br>';

///////////////////////////////////////////////////////////////////////////////////////////////



$vardai = ['paulius','justas','antanas','petras','aldona'];
$x = 0;

foreach ($vardai as $name){

    $vardai[$x++] = strtoupper($name);

}

//var_dump($vardai).'<br>';

///////////////////////////////////////////////////////////////////////////////


$var =
    [   'paulius'=>'paulaitis',
        'justas'=>'justaitis',
        'antanas'=>'antanaitis',
        'petras'=>'petraitis',
        'aldona'=>'aldonaite'];


foreach ($var as $key => $value){

    $var[$value] = ucfirst($key);

}

var_dump($var).'<br>';






























