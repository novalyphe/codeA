<?php

function spalva_kodas($spalva){

    switch ($spalva){
        case 'raudona' : $kodas = 'red'; break;
        case 'geltona' : $kodas = 'yellow'; break;
        case 'tamsus' : $kodas = '#214532'; break;
        default: $kodas = 'black';
    }
    return $kodas;
}

echo '<p style="color:' . spalva_kodas('raudona'). '"> Lietuvos Rytas GAIDYS! </p>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba Diena</title>


</head>
<body>

<p> Lorem ipsum <span style="color: <?php echo spalva_kodas('raudona') ?>">dolor sit amet,
        consectetur adipisicing elit. </span>
    Amet distinctio exercitationem optio! <span style="color: <?php echo spalva_kodas('geltona') ?>">Accusantium aspernatur aut beatae consequatur culpa
    doloremque dolorum earum esse et eum fuga minima, repudiandae sapiente similique unde! </span> </p>




</body>
</html>

1.funkcija font-syze: 16px
2.fonto dydis mazas, normalus, didelis, extra
3.html + php









