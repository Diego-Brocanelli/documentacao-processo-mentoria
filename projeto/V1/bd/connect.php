<?php

try {
    $dbh = new PDO("mysql:host=localhost;dbname=controleestoque", "root", "root");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}