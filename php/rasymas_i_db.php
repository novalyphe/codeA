<?php
try{
$cnn = new PDO ('mysql:wordpress.localhost; dbname=testas', 'root');
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//leidziam excetions

$res = $cnn->prepare("insert into testas.auto(aut_gamintojas,aut_modelis,aut_metai,aut_kaina) VALUES(:gamintojas,:modelis,:metai,:kaina)");

$x= $res->execute([
    ':gamintojas'=>$_POST['gamintojas'],
    ':modelis'=>$_POST['modelis'],
    ':metai'=>$_POST['metai'],
    ':kaina'=>$_POST['kaina'],
]);

$sql = "select * from testas.auto";
$res = $cnn->query($sql);



echo '<table>';

while ($row=$res->fetch()){
    echo '<tr>';
    echo '<td>' . $row['aut_gamintojas'].'</td>';
    echo '<td>' . $row['aut_modelis'].'</td>';
    echo '<td>' . $row['aut_metai'] .'</td>';
    echo '<td>' . $row['aut_kaina'].'</td>';
    echo '<tr>';

}
echo '</table>';

echo '<a href="pdo_form_frontend.html">Grazinti i forma</a>';
}
catch (PDOException $e) {
        echo $e->getMessage();
    }


