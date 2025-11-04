<?php require "conexao.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="update.php">
    <label for="ID"> Quem devemos alterar: </label><br>
    <input placeholder="Digite o ID" type="number" id="id" name="id"><br> 
    <br>
    <label for="aux">Escolha o que alterar </label>
    <select name="aux" id="aux">
        <option value=""> Escolha uma opção </option>
        <option value="nome">Nome</option>
        <option value="email">E-mail</option>
        <option value="idade">Idade </option>
    </select>
    <br>
    <br>
    <label for="novo">Nova informação:</label>
    <input id="id" name="novo"> <br>
    <br>

    <input type="submit" value="Alterar">
    </form>

<?php 
include "footer.php";
?>