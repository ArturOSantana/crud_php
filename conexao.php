<?php
$host = "localhost";
$dbname = "cadastro";
$user = "root";
$pass = "root";

try {
    $pdo = new
        PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    //echo "Conexão com sucesso";
} catch (PDOException $error) {
    echo "Erro ao se conectar" . $error->getMessage();
}
