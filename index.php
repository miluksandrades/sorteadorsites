<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container-fluid"style="text-align: center">
            <br/>
            <br/>
            <div class="container-fluid col-md-4 col-sm-8 col-xl-2 bg-success justify-content-center" style="border-radius: 5px; text-align: center;">
                <!--<p class="lead text-white" id="numeroSorteado" style="font-size: 90px"></p>-->
                <p class="lead text-white" id="numeroSorteado"  style="font-size: 90px"><b>GO </b><i class="fa fa-arrow-down" style="font-size: 60px"></i></p>
            </div>
            <button class="col-md-4 col-sm-8 col-xl-2 btn btn-lg btn-outline-primary" onclick="gerar()">Novo Número</button>
        </div>
        <script>
            function gerar(){
                var numeros = new Array(400);

                var numeroSorteado = Math.floor(Math.random(numeros)*300+1);

                //if(numeroSorteado.length == 1)
                    //numeroSorteado += "0"+numeroSorteado;

                document.getElementById("numeroSorteado").innerHTML="<b>"+numeroSorteado+"</b>";
                

            }
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>

