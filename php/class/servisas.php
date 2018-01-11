<?php


class servisas extends automobilis {

    function info(){

        $s = 'Gamintojas: %s, <br> Modelis: %s, <br> Metai: %s ';

        return sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }

}


