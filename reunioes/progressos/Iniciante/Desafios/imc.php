<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <title>Desafio 01 - INICIANTE</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Calculo IMC</h1>
            <p class="lead">
                Neste simples desafio, devo calcular o IMC, usando todo o conhecimento adquirido neste módulo.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="form">
                <form action="#" method="GET">
                    <div class="row">
                        <label for="peso">Digite seu peso</label>
                        <input type="text" name="peso" id="peso">
                    </div>
                    <div class="row">
                        <label for="altura">Digite sua altura</label>
                        <input type="text" name="altura" id="altura">
                    </div>
                    <div class="row">
                        <input class="" type="submit" value="Enviar">
                    </div>
                </form>
                
            </div>
        </div>
        <div class="row">
            <?php
               $SeuPeso = $_GET["peso"];
               $SuaAltura = $_GET["altura"];
               $MostraPeso = 0;
               $MostraAltura = 0;

               function CalculaIMC($peso,$altura){
                    $imc = $peso / ($altura * $altura);
                    if($imc < 20) {
                        $mensagem = "Você está magro.";
                    }elseif(($imc > 20) && ($imc < 25)) {
                        $mensagem = "Você está no peso ideal.";
                    }else{
                        $mensagem = "Você está acima do peso.";
                    }
                    return "Seu IMC: " . number_format($imc, 2) . "</br>" .  $mensagem;
               }

               print(CalculaIMC($SeuPeso, $SuaAltura));
            ?>
        </div>
    </div>
</body>
</html>