<?php
$con = new PDO("mysql:host=localhost;dbname=aprendendo" , "root", "root");

$stmt = $con->prepare("INSERT INTO usuarios (nome, idade) VALUES(:NAME, :AGE)");

$nome = "Michelle";
$idade = "25";

$stmt->bindParam(":NAME" , $nome);
$stmt->bindParam(":AGE" , $idade);

$stmt->execute();

echo "Dados inseridos com sucesso!";


?>