<?php

$con = new PDO("mysql:dbname=aprendendo;host=localhost", "root", "root");

$stmt = $con->prepare("SELECT * FROM usuarios");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    # code...
    foreach ($row as $key => $value) {
        # code...
        echo "<strong>" . $key . ": </strong>" . $value . "</br>";
    }
    echo "=======</br>";
}



?>