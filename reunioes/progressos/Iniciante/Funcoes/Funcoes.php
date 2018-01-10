<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <title>Funções</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Funções</h1>
            <p class="lead">
                Uma função é um conjunto de códigos ou ações que executam uma tarefa, calculo ou um valor.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                /* Para facilitar a leitura e entendimento dos códigos, 
                serei o mais breve possível, mostrando o uso de funcoes*/

                function SomaNumeros ($a, $b){
                    return  $a + $b;
                }
                print(SomaNumeros(4,4));
                


                function comparaNumeros ($n1, $n2){
                    if ($n1 != $n2){
                        return "</br>" . $n1 . " e " . $n2 . " são diferentes";
                    }else{
                        return "</br>" . $n1 . " e " . $n2 . " são iguais";
                    }
                }
                print(comparaNumeros(1,5));

                echo "</br>";

                $EstadoLampada = true;
                function ligaLampada($estado) {
                    if ($estado == true){
                        return "Acesa :D";
                    }else{
                        return "Desligada :(";
                    }
               }
               print("Sua lampada está " . ligaLampada($EstadoLampada));

            ?>
            
			</div>
    </div>
</body>
</html>