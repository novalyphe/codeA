<?php


class salis {


    function eilute ($salis,$sostine,$skaicius){

        return "<tr><td>Salis: {$salis}</td></tr>
                <tr><td>Sostine: {$sostine}</td></tr>
                <tr><td>Gyventoju sk:{$skaicius}</td></tr>" ;

    }


}
$a = new salis() ;
echo '<table>' ;
echo $a->eilute($_GET['salis'], $_GET['sostine'], $_GET['skaicius']) ;
echo '</table>' ;
echo '<br>';
echo '<a href="Forma_GET_Savarankiskas.html"> ATGAL </a>';