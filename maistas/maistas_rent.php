<?php

$car = false;
if (isset($_POST['rent'])) {
    include 'maistas_action.php';
    $auto = new maistas();
    $car = $auto->get($_POST['rent']);
    $message = $auto->message;
} else $message = 'Neleistinas veiksmas';
if ($car !== false){
    ?>
    <div class="jumbotron p-2 bg-success">
        <p style="color: white; font-size: 32px"><?php echo sprintf("Automobilis %s %s (%s m.) užsakytas", $car["gamintojas"], $car["modelis"], $car["metai"]) ?></p>
    </div>
    <table class="table border">
        <tr><td>Vardas</td><td><?php echo $_POST['vardas'] ?></td></tr>
        <tr><td>Pavardė</td><td><?php echo $_POST['pavarde'] ?></td></tr>
        <tr><td>Kaina</td><td><?php echo $car['kaina'] * $_POST['dienos'] ?> EUR</td></tr>
        <tr><td>Data</td><td><?php echo $_POST['data'] ?></td></tr>
        <tr><td>Dienų</td><td><?php echo $_POST['dienos'] ?></td></tr>
        <tr><td>Pasiimti</td><td><?php echo $_POST['pasiimti'] ?></td></tr>
        <tr><td>Atiduoti</td><td><?php echo $_POST['atiduoti'] ?></td></tr>
    </table>
    <?php
}
else {
    ?>
    <div class="jumbotron p-2 bg-danger">
        <p style="color: white; font-size: 32px"><?php echo $message ?></p>
    </div>
    <?php
}



echo '<a href="/maistas/index.php"> <button class="btn btn-info mr-0"> Atgal </button> </a>';
?>