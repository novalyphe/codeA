<?php

class svecias{

    public $vardas;
    public $pavarde;
    public $maistas;

    function __construct($vardas,$pavarde,$maistas) {

        $this->vardas = ucfirst(strtolower($vardas));
            $this->pavarde = ucfirst(strtolower($pavarde));
                $this->maistas = ucfirst(strtolower($maistas));

    }

    function eilute() {

        $s= '<tr>';

            $s.= '<td>' . $this->vardas . '</td>';
            $s.= '<td>' . $this->pavarde . '</td>';
            $s.= '<td>' . $this->maistas . '</td>';

        $s.= '</tr>';

            return $s;

    }

}

$sveciai = [];

$sveciai [] = new svecias( 'jonas', 'jonaitis', 'silke');
$sveciai [] = new svecias( 'Paulius', 'paskevicius', 'batonas');
$sveciai [] = new svecias( 'cigonas', 'juodas', 'siuksle');

//var_export($sveciai);


echo '<table style="border: 1px black solid; background: lightgray">';

foreach ($sveciai as $sv) {

    echo $sv->eilute();
}

echo '</table>';
echo '<br>';
echo '<br>';

