<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <title>PHP Intermediário</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Classes</h1>
            <p class="lead">
            A classe é uma estrutura ou esqueleto que abstrai um conjunto de objetos 
            contendo características similares. Uma determinada classe define o comportamento 
            de seus objetos usando métodos e modificando seus estados como os atributos.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                require "./class/Pessoa.php";
                echo "</br>";
                require "./class/Lutador.php";
            ?>
        </div>
    </div>
</body>
</html>