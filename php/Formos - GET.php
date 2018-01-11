<!DOCTYPE<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba diena</title>

</head>
<body>

<?php

$a = new handleForms();

?>

<form method="get">

    <label>Vardas: </label><input name='vardas' type="text" value="<?php echo $a->getVariable("Vardas") ?>"><br>
    <label>Pavarde: </label><input name='pavarde' type="text" value="<?php echo $a->getVariable("Pavarde") ?>"><br>
    <label>Slaptazodis: </label><input name='slaptazodis' type="password"><br>
    <input type="submit" value="Prisijungti">

</form>


<?php

//var_dump($_GET);
//echo json_encode($_GET);
//var_export($_GET);


class handleForms {

    public $text;


    function __construct() {

        $this->text = '';


        if (count($_GET)>0){
            foreach ($_GET as $key => $value){
                $this->text .= $key . '=' . $value . "<br>";


            }


        }


    }

    function tofile(){

        //fopen nurodom nurodom kur sudesim faila
        $f = fopen("failai/forma-get-parms.txt", "w") or die("Unable to open file!");

        //fwrite nurodom ka sudesim
        fwrite($f, $this->text);

        //uzdarom faila
        fclose($f);

    }

    function openfile(){

        //fopen nurodom nurodom kur sudesim faila
        $f = fopen("failai/forma-get-parms.txt", "r") or die("Unable to open file!");

        //fwrite nurodom ka sudesim
        $s = fread($f, filesize("failai/forma-get-parms.txt"));

        //uzdarom faila
        fclose($f);

        return $s;

    }

    function getVariable($name){

        if (isset($_GET[$name])) return $_GET[$name];
        else return '';

    }

}


$a -> tofile();
$x = $a ->openfile();

echo $x;















?>
</body>
</html>
