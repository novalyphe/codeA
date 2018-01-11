<?php

include 'maistas_action.php';
include 'maistas_action2.php';

$k = new maistas();

//var_export($_POST);
//var_export($_FILES);

$maistas32 = [
    'id' => $_POST['id'],
	'gamintojas' => $_POST['gamintojas'],
	'modelis' => $_POST['modelis'],
	'metai' => $_POST['metai'],
	'kaina' => $_POST['kaina'],
	'pastabos' => $_POST['pastabos'],
];
$ins = true;

    if (isset($_FILES["nuotrauka"]) && strlen($_FILES["nuotrauka"]['name']) > 0) {
            $message = 'Upload ';
            $check = getimagesize($_FILES["nuotrauka"]["tmp_name"]);
            if ($ins = $check !== false) {
                if ($ins = in_array($check["mime"], ['image/jpg', 'image/jpeg', 'image/png'])) {
                    $fp = fopen($_FILES['nuotrauka']['tmp_name'], "rb");
                    if ($ins = $fp !== false) {
                        $maistas32['nuotrauka'] = fread($fp, filesize($_FILES['nuotrauka']['tmp_name']));
                        $maistas32['mime'] = $check["mime"];
                        fclose($fp);
                } else $message .= 'nesėkmingas: problema vykdant upload veiksmą';
            } else $message .= 'nesėkmingas: nuotraukos failo tipas yra neleistinas';
        } else $message .= 'nesėkmingas: nuotraukos failas nėra nuotrauka';
    }

    // $fp = fopen($_FILES['nuotrauka']['tmp_name'], "rb");
    // $maistas32['nuotrauka'] = fread($fp, filesize($_FILES['nuotrauka']['tmp_name']));
    // fclose($fp);
    // $maistas32['mime'] = $_FILES['nuotrauka']['type'];
    //var_dump($_POST);
    //var_dump($_FILES);
    //var_dump($maistas32);
    //exit;

 if ($ins) {
            if (strlen($maistas32['id']) > 0) {
                $ins = $k->ideti($maistas32);
            } else {
                $ins = $k->ideti($maistas32);
            }
            if ($ins) $bg = 'bg-success'; else $bg = 'bg-danger';
            $message = $k->message;
        }
        echo
            '<div class="jumbotron p-2 ' . $bg . '">' .
            '<p style="color: white; font-size: 32px; text-align: center">' . $message . '</p>' .
            '</div>';
   


echo '<a href="/maistas/index.php"> <button class="btn btn-info mr-0"> Atgal </button> </a>';
?>




