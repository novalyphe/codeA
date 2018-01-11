<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba Diena</title>


</head>
<body>

<?php
/*1.asmenys ka jie turi?
    vardas
    pavarde
    maistas
    lytis */


$asmenys = [
    ['Vardas' => 'Paulius',
        'Pavarde' => 'Paskevicius',
        'Maistas' => 'Nedietinis',
        'Lytis' => 'Vyras'],
    ['Vardas' => 'Jonas',
        'Pavarde' => 'Jonaitis',
        'Maistas' => 'Nedietinis',
        'Lytis' => 'Vyras'],
    ['Vardas' => 'Aldona',
        'Pavarde' => 'petnicaite',
        'Maistas' => 'Dietinis',
        'Lytis' => 'Moteris'],

    ];

function getInfo($dalyviai){
$s = ' ';
$s .= '<td>' . $dalyviai['Vardas']. '</td>';
$s .= '<td>' . $dalyviai['Pavarde']. '</td>';
$s .= '<td>' . $dalyviai['Maistas']. '</td>';
$s .= '<td>' . $dalyviai['Lytis']. '</td>';

return $s;
};



?>

<table style="border: 1px black solid">


    <tr style="border-collapse: collapse; ">
        <th> Sveciu sarasas: </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th>Nr</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Maistas</th>
        <th>Lytis</th>
    </tr>


    <?php

    $nr = 1;
    foreach ($asmenys as $dalyviai){
    echo '<tr>';
        echo '<td>' . $nr++ . '</td>';
        echo getInfo($dalyviai);
        echo'</tr>';
    };

    ?>
</body>
</html>

