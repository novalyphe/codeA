<?php

$dbh = new PDO ('mysql:wordpress.localhost; dbname=testas', 'root');
$sql = "select count (*) as cnt from auto";
$res = $cnn->querry ($sql);                                  //siuncia uzklausa i mysql tas querry
while ($row=$res->fetch()){
    echo $row ['cnt']. '<br>';
};

$res -> closeCursor();
$sql = "select (*) where aut_kaina>3000; from auto";
$res = $cnn ->querry ($sql);



echo '<table>';
while ($row=$res->fetch()){
    echo '<tr>';
    echo '<td>'. $row['aut_gamintojas'];
    echo '<td>'. $row['aut_metai'];
    echo '<td>'. $row['aut_kaina'];
    echo '<td>';
    echo '</tr>';
};
echo '</table>';



$res -> closeCursor();