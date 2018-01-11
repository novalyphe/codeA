

<?php

// trecias bubdas

class darbuotojas {





    //savybiu priskirimas
    public $vardas;
    public $pavarde;
    public $atlyginimas;





    //savybems priskirema paskirtis
    // su function __construkt
    function __construct($vard,$pav,$atl) {

        $this->vardas = $vard;
        $this->pavarde = $pav;
        $this->atlyginimas = $atl;

    }

    // isreiskiam kaip atrodys
    function info (){

        $s = 'Vardas: %s, <br> Pavarde: %s, <br> Atlyginimas: %s ';

        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }

    //priskireme papildoma funkcija
    function vardas_pavarde($skiriklis){

        return $this->vardas . $skiriklis . $this->pavarde  ;
    }
}





//sukuriama paskirties israiskos reiksme
$d = new darbuotojas('Jonas', 'Jonaitis', 1500);

// isvedame i ekrana
echo $d->info().'<br>';

echo '<br>';

// isvedame papildoma funkcija i ekrana
echo $d->vardas_pavarde(' : ').'<br>';

















