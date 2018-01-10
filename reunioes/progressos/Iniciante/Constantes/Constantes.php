<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <title>Constantes</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Constantes</h1>
            <p class="lead">
            Uma constante é um identificador (nome) para um valor único. Como o nome sugere, esse valor não pode mudar durante 
            a execução do script (exceto as constantes mágicas, que não são constantes de verdade). As constantes são case-sensitive
             por padrão. Por convenção, identificadores de constantes são sempre em maiúsculas.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                /* Para facilitar a leitura e entendimento dos códigos, 
                serei o mais breve possível, mostrando o uso de constantes*/

                // Nomes de constantes válidos
                    define("CONSTANTE", "Hello world."); // no primeiro parametro se assume o nome da constante e em segundo seu valor.
                    echo CONSTANTE; // imprime "Hello world."
                    echo "</br>";

                    define("FOO2",    "alguma outra coisa");
                    echo F002;
                    echo "</br>";

                    define("FOO_BAR", "alguma coisa mais");
                    echo FOO_BAR;
                    echo "</br>";

                    // Nomes de constantes inválidas
                    define("2FOO",    "alguma coisa");
                    // Isto é válido, mas deve ser evitado:
                    // O PHP pode vir a fornercer uma constante mágica
                    // que danificará seu script
                    define("__FOO__", "alguma coisa");

                    /* FONTE : http://php.net/manual/pt_BR/language.constants.syntax.php */
            ?>
            
			</div>
    </div>
</body>
</html>