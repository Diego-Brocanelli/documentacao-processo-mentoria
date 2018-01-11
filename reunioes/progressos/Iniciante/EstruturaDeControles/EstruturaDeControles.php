<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <title>Estrutura de Controles</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Estrutura de Controles</h1>
            <p class="lead">if,
            while,
            for,
            switch,
            foreach,
            continue,
            break
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                /* Para facilitar a leitura e entendimento dos códigos, 
                serei o mais breve possível, mostrando o uso de cada Estrutura de controle */

                /* Estrutura Condicional IF */
                $idade = 18;

                if ($idade < 18 ) {
                    echo "Você é menor de idade";
                }else {
                    echo "Você é maior de idade e já pode ser preso :D";
                }
                
                echo "</br>";

                /* Estrutura de Controle IF ELSE */
                $a = 10;
                $b = 55;
                
                if ($a > $b) {
                    echo "A é maior que B";
                }else if($a == $b) {
                    echo "A é igual a B";
                }else{
                    echo "B é maior que A";
                }
                
                echo "</br>";

                /* Estrutura de Controle SWITCH */
                $carro = "Celta";

                switch ($carro) {
                    case "Bmw":
                        echo "Você tem uma BMW";
                        break;
                    case "Ferrari";
                        echo "Você tem uma Ferrari";
                        break;
                    case "Lamborghini":
                        echo "você tem uma Lamborghini";
                        break;
                    case "Celta":
                        echo "VocÊ tem um Celtinha velho de guerra :D";
                        break;
                    default:
                        echo "VocÊ é pobre e só pode andar de bike. ";
                }

                echo "</br>";

                /* Laços de REpetição FOR */
                $contador = 10;
                for ($i = 0; $i <= $contador; $i++){
                    echo $i;
                }

                echo "</br>";

                /* Laço While */
                $i = 1;
                while ($i <= 10):
                    echo $i;
                    $i++;
                endwhile;

                echo "</br>";

                /* For Each */
                $carros = array("Gol", "Celta", "Voyage", "Civic", "Peugeout", "Corola");
                
                foreach ($carros as $modelo) {
                    echo "</br>" . $modelo; // a variável modelo assume o valor de cada unidade do array, ou seja, cada carro.
                }
            ?>
            
			</div>
    </div>
</body>
</html>