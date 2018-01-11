<!DOCTYPE<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba diena</title>
    <link rel="stylesheet" href="../css/stilius.css" type="text/css">
</head>
<body>

<?php



function writeMsg()
{
    echo "Hello world! <br>";
}
    writeMsg();                     //isveda funkcijoas teksta bet turi pasakyti kokia funkcija turi matyti


function familyName($fname, $lname = "Trydaliauskas" ) {
    echo "$fname $lname .<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");


call_user_func( 'familyname', 'Borge', 'KoNori');

$fn = 'familyname';
call_user_func($fn, 'Borge', 'Sudeliauskas');

////////////////////////////////////////////////////////////
function familyNameRet($fname = 'nesamone', $lname = 'Nezinomas'){
    return "$fname $lname.<br>";
};
echo familyNameRet("Jonas", 'Jonaitis');
$x = familyNameRet( "Jonas", 'Jonaitis');
echo $x;

$fnc = 'familyNameRet';
echo $fnc("Jonas", 'Jonaitis');










?>

</body>
</html>


