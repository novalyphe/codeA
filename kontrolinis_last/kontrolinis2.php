<?php
/*
08.Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “salis”, kuri turi savybes ‐ pavadinimas, sostine, gyventojai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, sostine, gyventojai ‐ perduotus parametrus padėtų į savo savybes.
*/

class salis {

    public $pavadinimas;
    public $gyventojai;
    public $sostine;

    function __construct($sos,$pav,$gyv){
        $this->sostine = $sos;
        $this->pavadinimas = $pav;
        $this->gyventojai = $gyv;
    }

    function informacija(){
    	$x = $this->pavadinimas . ' - ' . $this->gyventojai . ' - ' . $this->sostine ;
        echo $x;

    }

}
$la2 = new salis('olia','vasia', 'kukumaku');
var_export($la2);
echo '<br>';
echo '<br>';

/*
09.Panaudodami prieš tai sukurtą klasę salis, sukurkite klases vakaru_salis ir rytu_salis, kurios paveldi salis klasę. Salis klasę papildykite metodu “informacija”, kuris išvestų suformatuotą eilutę “šalis, sostinė, gyventojai”. rytu_salis klasėje perrašykite metodą informacija, pakeisdami išvedamą eilutę į “šalis, sostinė, gyventojai (Rytų šalis)”. Rytų šalis ‐ tiesiog paprastas tekstas.
*/

class vakaru_salis extends salis
{
	

}



class rytu_salis extends salis
{
	
    function informacija(){
    	$x = $this->pavadinimas . ' ' . $this->gyventojai . ' ' . $this->sostine . ' ' . 'Rytu salis';
        echo $x;

    }

}

$la23 = new rytu_salis('olia','vasia', 'kukumaku');
echo $la23->informacija();
echo '<br>';
echo '<br>';

/*
10.Sukurkite PHP skriptą, kuriame aprašykime klasę countryList, kurioje būtų viena savybė ‐ $countries, kuri bus masyvas, taip pat būtų metodas insert($country), kuris papildo savybę $countries nauja šalimi. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių šalių pavadinimų ilgio matematinį vidurkį
*/


class countryList 
{
	
	public $countries = [];

    function insert($country){
    	$this->countries[] = $country;
    }
    function average(){
    	$sum = 0;
    	$kiekis = 0;
    for ($i = 0; $i<count($this->countries); $i++){
        $kiekis++;
        $sum += strlen($this->countries[$i]);

    }
    return $sum/$kiekis;
}
}

$zza = new countryList();
$zza->insert('Lenkija');
$zza->insert('Estija');
$zza->insert('Anglija');
echo $zza->average();
echo '<br>';
echo '<br>';

































