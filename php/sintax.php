<!DOCTYPE<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Pirma diena</title>
    <link rel="stylesheet" href="../css/stilius.css" type="text/css">


</head>
<body>


<?php       //pradeti taip php faila su html



echo 'labas';       // echo isveda texta


//kintamieji
$a = 5;             //skaicius
$af = 5.6;          //float plaukejontis kablelis
$b = true;           //bulean (masyvas)
$c = "abc";         //string
$d = ['BMV', 'Honda'];   //masyvas
$e = new stdClass();      //objektas
$f = NULL;  //nieko

//kintamieji gali buti 3 rusiu : 1) Lokalus 2) Static 3)Global


// 1)
function pvz_static (){
    static $a = 0;      // sukurimas su pradine reiksme
            $a++;       //pridedama +1
    echo $a . '<br>';          //isvedame ir kas karta i nauja eilute ta musu skaiciu
}

pvz_static();   // sukuremas dolgeris :D a tada pridedama +1 ir parodoma
pvz_static();
pvz_static();

$g = "labasai";

function pvz_local() {

    $g = " ka darai";
    echo $g . '<br>';
}
pvz_local();
    //jeigu bandysiu gauti ekrane labasai neiseis nes jis yra uz funkcijos reikia
    // nurodyti kad g yra global kad galetu rodyti. tarkim

    global $h;
    $h = " labasai";

    function pvz_global() {
        global $h;
        echo $h . '<br>';
    }
pvz_global();


echo $_SERVER['PHP_SELF'] . '<br>';
echo $_SERVER['HTTP_HOST'] . '<br>';


//////////////////////////////////////////////////////////////////////

eval('$s = "aaaa";');   // ivygdo php koda
echo $s . "<br>";
unset($s);              //panaikina php koda
echo $s . "<br>";          //ir isveda klaida kad nebera kodo ir ka tu cia man liepi isvesti :D


define('konst', 'dolgeris'); //konstanta su geiksme
echo konst . "<br>";

// Const konst = 'dolgeris'; // sintakse klasese











/**
 * Created by PhpStorm.
 * User: vartotojas
 * Date: 2017-12-15
 * Time: 08:24
*/

?>

</body>
</html>
