<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <div class="container-fluid"style="text-align: center">
        <br/>
        <!--<div class="container-fluid col-md-4 col-sm-8 col-xl-2 justify-content-center" style="border-radius: 5px; text-align: center;">
            <form><div class="form-group"><label class="control-label">De:</label><input type="number" id="inicio" class="form-control"/></div>
                <div class="form-group"><label class="control-label">Até:</label><input type="number" id="fim" class="form-control"/></div>
                <button class="btn btn-outline-primary" id="enviar">Novo Número</button></form>
        </div>-->
        
        <br/>
        <div class="container-fluid col-md-4 col-sm-8 col-xl-2 bg-success justify-content-center" style="border-radius: 5px; text-align: center;">
            <!--<p class="lead text-white" id="numeroSorteado" style="font-size: 90px"></p>-->
            <p class="lead text-white" id="numeroSorteado"  style="font-size: 90px"><b>GO </b><i style="font-size: 60px" class="fa fa-arrow-down"></i></p>
        </div>
        <button class="col-md-4 col-sm-8 col-xl-2 btn btn-lg btn-outline-primary" onclick="gerar()">Novo Número</button>
    </div>
    <script>
        var numeros = [];
        function gerar(){

            do{
                var numeroSorteado = Math.floor(Math.random()*200+1);
                document.getElementById("numeroSorteado").innerHTML="<b>"+numeroSorteado+"</b>";

                if(numeros.indexOf(numeroSorteado) == -1)
                    numeros.push(numeroSorteado);
                    
            }while(numeros.length < 200);
            
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>

