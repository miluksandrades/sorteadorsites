<?php

    /*$host = 'localhost';
    $user = 'root';
    $database = 'sorteador';

    $con = mysql_connect($host, $user) or die(mysql_error());

    mysql_select_db($database, $con);

    $q = "SELECT * FROM numeros";

    $query = mysql_query($q) or die(mysql_error());

    $total = mysql_num_rows($query);

    $numero = rand(1, $total);

    $q = "SELECT * FROM numeros order by id ASC limit ".$numero.",1";

    $query = mysql_query($q);

    $resultado = mysql_fetch_array($query);*/

    //echo 'Numero sorteado: '.$resultado["numero"];

?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="container-fluid text-white"style="text-align: center">
            <br/>
            <div class="container-fluid col-md-4 col-sm-8 col-xl-2 bg-success justify-content-center" style="border-radius: 5px; text-align: center;">
                <p class="lead" style="font-size: 90px"><b><?php echo rand(1, 400); ?></b></p>
                <!--<p class="lead" style="font-size: 90px"><b>GO</b><i class="fa fa-arrow-down"></i></p>-->
            </div>
            <button onclick="carregar()" class="col-md-4 col-sm-8 col-xl-2 btn btn-lg btn-outline-primary">Novo Sorteio</button>
        </div>
        <script>
            function carregar(){
                location.reload();
            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>

