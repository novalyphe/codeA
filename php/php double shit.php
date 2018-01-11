<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>

<?php

function svecias($vardas, $pavarde, $maistas){

    return
        ['vardas' => strtolower($vardas),
            'pavarde' => strtolower($pavarde),
                 'maistas' => strtolower($maistas)
        ];

}

$sv = svecias('Paulius', 'Paskevicius', 'Pizza');

$sveciai = [];

$m = svecias('Paulius', 'Paskevicius', 'Pizza');
$raktas = strtolower($m ['vardas']) . strtolower($m ['pavarde']);
$sveciai[$raktas] = $m;

$m = svecias('Antanas', 'Jonaitis', 'Pizza');
$raktas = strtolower($m ['vardas']) . strtolower($m ['pavarde']);
$sveciai[$raktas] = $m;

$m = svecias('Jonas', 'Antanaitis', 'Pizza');
$raktas = strtolower($m ['vardas']) . strtolower($m ['pavarde']);
$sveciai[$raktas] = $m;

ksort($sveciai);


function eilutes($sveciai){

return "<tr><td>{$sveciai['vardas']}</td><td>{$sveciai['pavarde']}</td><td>{$sveciai['maistas']}</td></tr>";

}


//var_export ($sveciai);


?>
<table>
    <?php

    foreach ($sveciai as $slamstas => $aaabbb){
        echo eilutes($aaabbb);
    }

    ?>
</table>

</body>
</html>
