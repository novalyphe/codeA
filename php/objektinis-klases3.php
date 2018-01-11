<?php


class zmogus{

    public $vardas;
    public $pavarde;
    public $amzius;


    function __construct($v,$p,$a)
    {
        $this->vardas = $v;
        $this->pavarde = $p;
        $this->amzius = $a;

    }

    static function keisti($s){                                 // galima isvesti su echo be new komandos

        return ucfirst(strtolower($s));

    }

    function keisti2($s){                                        // reikalinga pirma new komanda

        return ucfirst(strtolower($s));

    }


}


class mokinys extends zmogus{

    function keisti2($s){

        return strtoupper($s) . ' ' . parent::keisti2($s);

    }
}


echo zmogus::keisti('tOmas').'<br>';


$s = new zmogus ('jonas', 'jonaitis', 25);
echo $s->keisti2('tomas').'<br>';


$z = new mokinys('Paulius', 'Paskevicius', 27);
echo $z->keisti2('tOmas').'<br>';










