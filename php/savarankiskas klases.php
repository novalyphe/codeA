<?php


include "class/automobilis.php";
include "class/servisas.php";

$auto = [];

$auto [] = new servisas( 'BMW', '320i', '2010');
$auto [] = new servisas( 'Tesla', 'Tesla', '2017');
$auto [] = new servisas( 'Skoda', 'skoduota', '2011');

foreach ($auto as $sv) {

    echo '<br>'. $sv->info() . '<br>';
    }