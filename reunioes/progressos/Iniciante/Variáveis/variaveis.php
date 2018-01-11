<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <title>Variáveis</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Variáveis</h1>
            <p class="lead">Booleano
                Numérico,
                String,
                Array,
                Objeto,
                Recurso,
                Misto,
                Callback,
                Null
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
				<?php
					// defini uma variável sem valor
					$nome = "Variável nome criada sem valor"; 
					echo $nome;
					echo "</br>";
				

					// variáveis do tipo numérica
					$idade = "25"; 
					$altura = "1.82";
					echo "Minha idade é " . $idade . " e minha altura é " . $altura;
					echo "</br>";


					// Varivel String
					$nomeCompleto = "Julio Rodrigues";
					echo "meu nome completo é: " . $nomeCompleto;
					echo "</br>";


					// Array 
					$carro = ['Celta', 'Gol', 'Fusion'];
					echo "Carro escolhido do array: " . $carro[2]; // Imprime Fusion
					echo $carro[3] = "Voyage";
					echo "</br>";
					var_dump($carro);
					echo "</br>";


					// Variável do tipo Objeto 
					class ExemploObjeto {
						function comprimentar()
						{
								echo "Olá Pessoal, criei um objeto";
						}
					}
					$varObj = new ExemploObjeto;
					$varObj->comprimentar();
					echo "</br>";
					

					// Resources ou Recursos 
					/*
							Resource na verdade é um handler, ou uma função manipuladora, como por exemplo um mysqli_connect, manipulador de arquivos ou algo do tipo.
					*/


					// Como o próprio nome sugere, o tipo misto (mixed, em inglês) indica que uma variável pode receber valores de vários tipos.
					$nome = "Julio";
					echo gettype($nome); // o gettype pega qualquer valor o retorna o tipo do mesmo
					echo "</br>";


					// Call Back é a referencia de uma função.
					function ExibirMensagem() {
							echo "Seja bem vindo.";
					}
					call_user_func("ExibirMensagem"); // a funcao call_user_func recebe como parametro o nome da funcao e o executa
					echo "</br>";

					
					// NULL - é utilizado para saber se uma variável possuí um valor
					$nome = "Aqui tem valor";
					echo var_dump($nome);
					echo "</br>";
					$sem_valor;
					echo var_dump($sem_valor);
				?>
			</div>
    </div>
</body>
</html>