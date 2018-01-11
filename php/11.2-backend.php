<?php
/*
Sukurkite HTML dokumentą 11.2-frontend.html su įvedimo formą. Forma turėtu turėti laukus : 3x tekstiniai laukai: Vardas, Pavardė, Gimimo data. Forma turėtu būti nusiųsta į 11.2-backend.php failą metodu POST. 11.2-backend.php faile PDO pagalba įrašykite duomenis į duomenų bazės lentelę 'asmenys'. Backend faile įdėkite nuorodą (linką) į įvedimo formos html dokumentą.
 */

header('location:http://localhost:8888/php/11.2-frontend.html');

$cnn = new PDO ('mysql:host=localhost:8889; dbname=asmenys', 'test', 'test');
$res = $cnn->prepare("insert into asmenys(asmuo_vardas,asmuo_pavarde,asmuo_data) values(:vardas,:pavarde,:gdata)");
$x = $res->execute([
    ':vardas' => $_POST['vardas'],
    ':pavarde' => $_POST['pavarde'],
    ':gdata' => $_POST['gdata']
]);






