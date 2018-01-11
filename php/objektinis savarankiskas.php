<?php

class automobiliai {

    public $marke;
    public $modelis;
    public $metai;

    function __construct($mark,$mdl,$m) {

        $this->marke = $mark;
        $this->modelis = $mdl;
        $this->metai = $m;

    }
    function info (){

        $s = 'Marke: %s, <br> Modelis: %s, <br> Metai: %s ';

        return sprintf($s, $this->marke, $this->modelis, $this->metai);
    }


}



$sveciai = [];

$sveciai [] = new automobiliai( 'BMW', '320i', '2010');
$sveciai [] = new automobiliai( 'Tesla', 'Tesla', '2016');
$sveciai [] = new automobiliai( 'Alfa Romeo', 'Nepamenu', '2008');

foreach ($sveciai as $sv) {

    echo '<br>' .$sv->info(). '<br>';

}

//var_export($sveciai);







