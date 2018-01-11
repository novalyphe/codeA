<?php

class zmogus{

    const copy = 'CodeAcademy';                          //cont priskiria betkokia reiksme irasius
                                                        //classes pavadinima ( zmogus::copy . ' ' . )
    public $vardas;
    public $pavarde;
    public $amzius;


    private $sablonas = 'Vardas: %s,<br> Pavarde: %s,<br> Amzius: %s.<br>';


    function __construct($v,$p,$a='Nezinomas') {

        $this->vardas = $this->pakeisti($v);                        //papildomas this su private
            $this->pavarde = $this->pakeisti($p);                   // komunikuoja
                $this->amzius = $a;

    }

    private function pakeisti($s){                                  // private padaro kad nebutu
                                                                    // galima viesai prieiti
        return ucfirst(strtolower($s));

    }

    public function eilute(){

        return sprintf($this->sablonas, $this->vardas, $this->pavarde, $this->amzius);

    }


}

$z = new zmogus ('jonas', 'jonaitis', 25);

echo $z->vardas . '<br>';
echo '<br>';
echo $z->eilute() . '<br>';


class mokinys extends zmogus {                              // Paveldejimas extends ...

    public $knyga;

    function __construct($v,$p,$a,$k){

        $this->knyga = $k;
            $this->vardas = $v;
                $this->pavarde = $p;
                    $this->amzius = $a;

    }

}

$mo = new mokinys( 'Paulius', 'Paskevicius', 27, 'AlmaLitera');

var_export($mo);



