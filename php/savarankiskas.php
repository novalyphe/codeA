1.funkcija font-syze: 16px
2.fonto dydis mazas, normalus, didelis, extra
3.html + php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laba Diena</title>


</head>
<body>

<p> Lorem ipsum <span style="font-size:  <?php echo fontodydis('mazas') ?>">dolor sit amet,</span>
    <span style="font-size: <?php echo fontodydis('didelis') ?>">consectetur adipisicing elit. </span>
    <span style="font-size: <?php echo fontodydis('extra') ?>">Amet distinctio exercitationem optio! </span>
    <span style="font-size:  <?php echo fontodydis('normalus') ?>">Accusantium spernatur aut </span>abeatae consequatur culpa
    doloremque dolorum earum esse et eum fuga minima, repudiandae sapiente similique unde!  </p>
</body>
</html>


<?php

function fontodydis ($dydis) {
    switch ($dydis){
        case 'mazas' : $dydis = '12px'; break;
        case 'normalus' : $dydis = '18px'; break;
        case 'didelis' : $dydis = '20px'; break;
        case 'extra' : $dydis = '28px'; break;
        default: $dydis = '16px';
    }
    return $dydis;
}

echo '<script>alert("Nebehakink");</script>';




?>