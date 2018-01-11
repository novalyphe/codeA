
<!DOCTYPE<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba diena</title>
    <link rel="stylesheet" href="../css/stilius.css" type="text/css">
</head>
<body>

<?php

$a = array(1,11,3,'Labasai');       //senovinis masybas
var_dump($a);

$a = [1,11,3,'Labasai'];       //naujas masyvas nuo 5 php versijos
var_dump($a);

//socetyviniai

$b = ['a' => 1 . "<br>",
        'b' => 2 . "<br>",
            'c' => [0,1,2,3] . "<br>"];
var_dump($b);


echo count($b) . "<br>";

unset($b['a']);
var_dump($b);
$b['aaa'] = 'kaunas';
var_dump($b);










?>
</body>
</html>
