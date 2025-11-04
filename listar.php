<?php
require "conexao.php";

try{
$sql = $pdo->query("SELECT * FROM aluno;");
}
catch(PDOException $erroSelect){
    echo "Erro ao mostrar" . $erroSelect->getMessage();
}
?> 