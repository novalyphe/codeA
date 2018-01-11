<?php

/*
Sukurkite HTML dokumentą 11.1-frontend.html su įvedimo formą. Forma turėtu turėti laukus : 2x tekstiniai laukai: Vardas, Pavardė, 1x radio pasirinkimas: Valgis:‐ mėsiškas, žuvies, vegetariškas. Forma turėtu būti nusiųsta į 11.1-backend.php failą metodu GET. 11.1-backend.php faile pridėkite įrašą į sesiją, įrašykite į tekstinį failą (papildydami jį) 11.1-file.txt (failo atidarymo tipas a)  ir redirectinkite vartotoją atgal į įvedimo formos html dokumentą
*/
header('location:http://localhost:8888/php/11.1-frontend.html');


session_start();
if (!isset($_SESSION['getinfo']));
$_SESSION['getinfo']=$_GET;
print_r($_GET);



