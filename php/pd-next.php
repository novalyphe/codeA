<?php

$dbh = new PDO ('mysql:wordpress.localhost; dbname=testas', 'root');
$kaina = 3000;

// taikinys nulauzimui istatant spec teksta vietoje $kaina

$res = $cnn->querry ( "select aut_gamintojas from auto where aut_kaina > {$kaina}");


while ($a=$res->fetch()){
    echo $a ['aut_gamintojas'].'<br>';

}

// su apsauga nuo nulauzimo
$res = $cnn->querry ( "select aut_gamintojas from auto where aut_kaina >:$kaina");

$x= $res->execute ([':kaina'=>$kaina]);
while ($a = $res->fetch()){
    echo $a['aut_gamintojas'].'<br>';
}

