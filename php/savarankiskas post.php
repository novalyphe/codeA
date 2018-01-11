<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Online Student Portal</title>
</head>
<body>

<form method="get">
    <label>Gamintojas: </label><input name="gam" type="text" <br>
    <label>Gamintojas: </label><input name="mod" type="text" <br>
    <label>Gamintojas: </label><input name="met" type="text" <br>

    <input type="submit" value=" Vykditi">
</form>

<?php

class handelForm1 {

    public $text;


    function toText($gami, $model, $meta){

        $sablonas = "Gamintojas: %s, modelis: %s, metai: %s";

        return sprintf($sablonas, $gami, $model, $meta);

    }

}

$masina = new handelForm1();


if (isset($_GET['gam']) && isset($_GET['mod']) && isset ($_GET['met'])){

    echo $masina -> toText($_GET['gam'] && isset($_GET['mod']) && isset ($_GET['met']));

}

else echo 'Iveskite duomenis';


?>
</body>
</html>