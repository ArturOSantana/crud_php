<?php 
require "conexao.php";
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];



try { 
    $sql = $pdo->prepare("INSERT INTO aluno (nome_al,email,idade) VALUES (?,?,?);");
    $sql->execute([$nome, $email, $idade]);
    header("Location: pg_inserido.php");

    } 
catch( PDOException $e) {
    echo "erro ao inserir". $e->getMessage();

}




?>
