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


<div class="container-flex">
    <?php include 'maistas_header.php' ?>
			<div class="mx-auto site-body mt-1">
				<?php

                if (isset($_POST['delete'])){
                    include 'maistas_delete.php';
                }
                elseif (isset($_POST['edit'])){
                    include 'maistas_edit.php';
                }
                elseif (isset($_POST['rent-form'])){
                   include 'maistas_rent.php';
                }
                elseif (isset($_POST['prideti'])){
                   include 'auto_update.php';
                }

					
			?>
			</div>
</body>
</html>





                    