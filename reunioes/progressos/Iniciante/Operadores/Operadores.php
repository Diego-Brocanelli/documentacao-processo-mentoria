<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <title>Operadores</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Operadores</h1>
            <p class="lead">Atribuição,
            Aritméticos,
            Relacionais,
            Lógicos
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                // Operadores de Atribuição
                $a = 4; // $a RECEBE 4 - logo, atribui o número 4 à variável a.
                $c = $a; // $c RECEBE o valor de $a (4);    
                echo "Variável a recebe o valor de c:" . $c;
                echo "</br>";

                // Operadores Aritméticos
                $a = 2;
                $b = 2;
                $c = $a + $b;
                $d = $a - $b;
                $e = $a * $b;
                $f = $a / $b;
                $g = $a % $b;
                $h = $a ** $b;
                echo "2+2=" . $c . "</br>";
                echo "2-2=" . $d . "</br>";
                echo "2*2=" . $e . "</br>";
                echo "2%2=" . $f . "(resto da divisao)". "</br>";
                echo "2**2=" . $g ."(elevado)" . "</br>";
                echo "</br>";

                // Operadores Relacionais
                echo "== : Igual  - Verdadeiro (TRUE) se a é igual ab" . "</br>";
                echo "=== : Identico  - Verdadeiro (TRUE) se a é igual b, e eles são do mesmo tipo" . "</br>";
                echo "!= : Diferente - Verdadeiro se a não é igual b" . "</br>";
                echo "<> : Diferente - Verdadeiro se a não é igual b" . "</br>";
                echo "!== : Não idêntico - Verdadeiro de a não é igual a b, ou eles não são do mesmo tipo (introduzido no PHP4)" . "</br>";
                echo "< : Menor que - Verdadeiro se a for menor que b" . "</br>";
                echo "> : Maior que - Verdadeiro se a for maior que b" . "</br>";
                echo "<= : Menor ou igual que - Verdadeiro se a for menor ou igual a b" . "</br>";
                echo ">= : Menor ou igual que - Verdadeiro se a for maior ou igual a b" . "</br>";
                echo "<=> : Spaceship (nave espacial) - Um integer menor que, igual a ou maior que zero quando a é, respectivamente, menor que, igual a ou maior que b. Disponível a partir do PHP 7.";
                echo "</br>";
                echo "</br>";
                // Operadores Lógicos
                echo "and : E - verdadeiro se A e B forem verdadeiros" . "</br>";
                echo "OR : OU - verdadeiro se A ou B forem verdadeiros" . "</br>";
                echo "XOR : XOR - verdadeiro se A ou B forem verdadeiros, mas não os dois" . "</br>";
                echo "! : NÃO - verdadeiro se A não for verdadeiro" . "</br>";
                echo "&& : E (comercial) - verdadeiro se A e B forem verdadeiros" . "</br>";
                echo "|| : OU - verdadeiro se A ou B forem verdadeiros" . "</br>";
                echo "</br>";

            ?>
            
			</div>
    </div>
</body>
</html>