<?php
$con = new PDO("mysql:host=localhost;dbname=aprendendo" , "root", "root");

$stmt = $con->prepare("UPDATE usuarios SET nome = :NAME, idade = :AGE WHERE id = :ID");

$nome = "Michelle";
$idade = "26";
$id = 3;

$stmt->bindParam(":NAME" , $nome);
$stmt->bindParam(":AGE" , $idade);
$stmt->bindParam(":ID" , $id);

$stmt->execute();

echo "Dados alterados com sucesso!";


?>