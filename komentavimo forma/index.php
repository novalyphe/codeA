<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Komentavimo forma </title>
    										<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    										<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    										<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
											<!-- Mano css failas -->
   	<link rel="stylesheet" href="css.css" type="text/css">

</head>
<body>
    <div class="container">
        <hr>
            <div class="row justify-content-md-center">
                <div class="col-sm-4 col-lg-4"></div>
                <div class="col-sm-4 col-lg-4  center"><p><h4>Comment form</h4></p></div>
                <div class="col-sm-4 col-lg-4"></div>
            </div>
        <hr>
        
        <div class="row"><br></div>
        
        <div class="row justify-content-md-center">
            <div class="col-sm-2 col-md-2 col-lg-2">
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <form method="post" action="form.php">
                    <label> Email* </label><input name="email" text="text" type="email">
                    <label> Name* </label><input name="name" text="text">
                    <br>
                    <label> Comment* </label><textarea rows="3" cols="55" name="comment"></textarea>
                    <br>
                    <input class="margin" type="submit" value="Submit">
                </form>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2">
            </div>
        </div>
    
    
            <br>
            <br>
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 bg-light text-dark center borderrad">
               <?php 
                $a = new forma() ;
                echo '<table>' ;
                echo $a->comment_forma( $_POST['name'], $_POST['comment']) ;
                echo '</table>' ;
                ?>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1">
            </div>
        </div>
    
        <div class="row">
        </div>
        
        <div class="row">
        </div>
        
        <div class="row">
        </div>
    </div>
</body>
</html>