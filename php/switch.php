<?php


function spalva_kodas($spalva){

    switch ($spalva){
        case 'raudona' : $kodas = 'red'; break;
        case 'geltona' : $kodas = 'yellow'; break;
        case 'tamsus' : $kodas = '#214532'; break;
        default: $kodas = 'black';
    }
    return $kodas;
}

echo '<p style="color:' . spalva_kodas('raudona'). '"> Lietuvos Rytas GAIDYS! </p>';








