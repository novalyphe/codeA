<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba Diena</title>


</head>
<body>

<?php

$masyvas = ['BMV','Audi','Tesla','Mersas'];



for ($i = 0; $i<count($masyvas); $i++) {
    echo ($i + 1) . '. ' . $masyvas[$i] . '<br>';

}
echo '<br>';

$ii = 10;
foreach ($masyvas as $automobilis){

    echo ($ii++ ) . '. ' . $automobilis . '<br>';

}
//////////////////////////////////////////////////////////

echo '<br>';
echo '<br>';
echo '<br>';

$auto = [
    ['Gamintojas' => 'BMW',
        'Modelis' => '320i',
        'Variklis' => 2.0,
        'Durys' => 4,
        'Metai' => 2010,],
    ['Gamintojas' => 'Audi',
        'Modelis' => 100,
        'Variklis' => 1.8,
        'Durys' => 4,
        'Metai' => 1993,],
    ['Gamintojas' => 'Honda',
        'Modelis' => 'civic',
        'Variklis' => 1.6,
        'Durys' => 4,
        'Metai' => 1995,]
];

function getInfo($masina){
    $s = ' ';
    $s .= '<td>' . $masina['Gamintojas']. '</td>';
    $s .= '<td>' . $masina['Modelis']. '</td>';
    $s .= '<td>' . $masina['Variklis']. '</td>';
    $s .= '<td>' . $masina['Durys']. '</td>';
    $s .= '<td>' . $masina['Metai']. '</td>';
  return $s;
}

?>

<table style="border: 1px black solid">
    <tr>
        <th>Nr</th>
        <th>Gamintojas</th>
        <th>Modelis</th>
        <th>Variklis</th>
        <th>Metai</th>
    </tr>

    <?php
    $nr = 1;
    foreach ($auto as $masina){
        echo '<tr>';
        echo '<td>' . $nr++ . '</td>';
        echo getInfo($masina);
        echo'</tr>';
    }
    ?>
</table>





</body>
</html>
