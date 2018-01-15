<?php
$con = new PDO("mysql:host=localhost;dbname=aprendendo" , "root", "root");

$stmt = $con->prepare("DELETE FROM usuarios WHERE id = :ID");

$id = 3;

$stmt->bindParam(":ID" , $id);

$stmt->execute();

echo "Dados deletados com sucesso!";


?>