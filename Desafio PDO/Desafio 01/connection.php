<?php

$dsn = "mysql:host=localhost;dbname=teste";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão com banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados!". $e->getMessage();
}