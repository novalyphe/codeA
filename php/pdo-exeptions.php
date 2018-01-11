<?php

$dbh = new PDO ('mysql:host=localhost:8889; dbname=asmenys', 'test', 'test');
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//leidziam excetions

$res = $cnn->query("select aut_gamintojas from auto");
while ($a = $res->fetch()){
    echo $a['aut_gamintojas'].'<br>';
}

catch (PDOException $err) {
    echo $err->getMessage();
}
