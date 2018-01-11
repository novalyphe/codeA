

<?php

include 'maistas_action.php';
$k = new maistas();
$k->delete($_POST['delete']);

if ($k = true){
    echo '<div class="container"><div class="jumbotron mt-1 p-2 bg-success" ><p style="color: white; font-size: 32px; text-align: center">Pasalinta sekmingai</p></div></div>'.'<br>';
}
else{
    echo '<div class="container"><div class="jumbotron p-2 bg-danger"><p style="color: white; font-size: 32px; text-align: center">Pasalinta nesekmingai</p></div></div>'.'<br>';
}
echo '<a href="/maistas/index.php"> <button class="btn btn-info mr-0"> Atgal </button> </a>';
?>

