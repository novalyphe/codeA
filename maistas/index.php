<?php
include 'maistas_action.php';
$a = new maistas();
$b = $a->getList();

?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> nieko nera</title>
    										<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    										<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    										<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    										<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    										<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
											<!-- Mano css failas -->
   	<link rel="stylesheet" href="/maistas/maistas.css" type="text/css">

</head>
<body>
											         <!-- Logo / saito pav / kontaktai -->
<div style="color: white" class="container-flex">
    <div class="site-header">
        <table class="mx-auto w-100">
            <tr>
            								<!-- logo -->
                <td><img class="site-logo" src="http://localhost:8888/maistaskitaip/nuotraukos/woup.png" alt="mano maistas"></td>
                <td>
                    <h1 class="site-title">Woup Woup šakalaka</h1>
                    <div class="row site-header-top-grid">
                    						<!-- Tel numeris -->
                        <div class="col p-0"><button class="btn m-0 p-0 pb-1 pl-2 pr-2"><i class="fa fa-phone pr-1" aria-hidden="true"></i>+370 64030589</button></div>
                        					<!-- Faceboo icona -->
                        <div class="col p-0 pl-1"><a href="https://www.facebook.com/novalyphe"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></div>
                        					<!-- Twitter icona -->
                        <div class="col p-0 pl-1"><a href="https://www.twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></div>
                        					<!-- Google icona -->
                        <div class="col p-0 pl-1"><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></div>

                    </div>
                </td>
            </tr>
        </table>
    </div>
                                                        <!-- Meniukas -->
<div class="site-menu">
	<div class="mx-auto">
		<nav class="navbar navbar-expand-sm m-0 p-0">
			<ul class="navbar-nav nav-pills">
				<li class="nav-item active">
					<a class="nav-link" href="/maistas"><i class="fa fa-home" aria-hidden="true"></i>Titulinis</a>
					
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/maistas/maistas_insert.php"><i class="fa fa-plus" aria-hidden="true"></i>Prideti nauja recepta</a>

				</li>
			</ul>
			
		</nav>
		
	</div>
</div>
                                                        <!-- Lentele -->
<div style="color: black" class="mx-auto site-body">
    <form method="post" action="maistas_action2.php" >
        <table class="table table-striped mt-1 site-car-list">
            <thead class="thead-light">
                <tr>
                    <th>NR:</th>
                    <th>Gamintojas</th>
                    <th>Modelis</th>
                    <th>Metai</th>
                    <th>Kaina</th>
                    <th>Nuotrauka</th>
                    <th><i class="fa fa-plus-square "></i> <i class="fa fa-minus-circle "> </i> <i class="fa fa-pencil-square "> </i></th>
                </tr>
            </thead>
            <tbody class="thead-light">
                <?php

                    foreach ($b as $c){
                            echo '<tr>';
                            echo '<td>'.$c['id'] . '</td>';
                            echo '<td>'.$c['gamintojas'] . '</td>';
                            echo '<td>'.$c['modelis']. '</td>';
                            echo '<td>'.$c['metai'] . '</td>';
                            echo '<td>'.$c['kaina'] . '</td>';
                            echo '<td><img src="data:'.$c['mime']. ';base64,'.base64_encode($c['nuotrauka']).'"> </td>';
                            echo '<td style="white-space: nowrap">
                                    <button style="width: 160px;" class="btn btn-danger mr-1" type="submit" name="delete" value="
                                        '. $c['id']. '">Pasalinti
                                    </button><br>
                                    <button style="width: 160px;" class="btn btn-info mr-1" type="submit" name="edit" value="
                                        '. $c['id']. '">Redaguoti
                                    </button><br>
                                    <button style="width: 160px;" class="btn btn-success mr-1" type="submit" name="rent-form" value="'. $c['id']. '">
                                        Nomuoti</button><br>
                                    </td>';

                            echo '</tr>';
                        }

                ?>

            </tbody>
        </table>
    </form>
</div>



</div>
</body>
</html>