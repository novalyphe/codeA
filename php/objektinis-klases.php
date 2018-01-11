


<?php

class zmogus {
    //savybiu aprasymas
    public  $vardas;
    public  $pavarde;
    public  $metai;


    //galima prisiskirti varda funkcijoje
    // bet taip yra maziau galimybiu

    function info(){

        $this->vardas = 'Andrius';                      //taip priskireme varda tam publik
        $this->pavarde = 'Andriukaitis';
        $this->metai = '1990-02-23';
        $s = 'Vardas: %s, <br> Pavarde: %s, <br> Metai: %s. ';

        return sprintf($s, $this->vardas, $this->pavarde, $this->metai);
    }

}

$zmogus = new zmogus();
echo $zmogus ->info().'<br>';                           //iskvieciame funkcija

echo '<br>';
echo $zmogus ->vardas .'<br>';                          //taip galime nuskaityti savybe vardas
echo '<br>';
echo '<br>';


class darbuotojas {

    //savybiu aprasymas
    public  $vardas = 'Nezinomas';
    public  $pavarde = 'Nezinomas';
    public  $atlyginimas = '0';


    // arba galima irasyti vardus uz funkcijos
    // ribu taip suteiki sau daugiau galimybiu

    function info(){

        $s = 'Vardas: %s, <br> Pavarde: %s, <br> Atlyginimas: %s ';

        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }

}

$db = new darbuotojas();
echo $db ->info().'<br>';                               //iskvieciame funkcija

echo '<br>';

echo $db ->vardas = 'Jonas ';                           //taip galime nuskaityti savybe vardas
echo $db ->pavarde = 'Jonaitis ';
echo $db ->atlyginimas = '1000 Pinigu. '.'<br>';
echo '<br>';
echo $db ->info().'<br>';








?>
