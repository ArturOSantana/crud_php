
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
    <label for="nome"> Nome:</label><br>
    <input type="text" id="nome" name="nome"> <br><br>

    <label for="email"> E-mail::</label><br>
    <input type="email" id="email" name="email"> <br><br>

    <label for="idade"> Idade::</label><br>
    <input type="number" id="idade" name="idade"> <br><br>

    <input type="submit" value="Enviar">

    </form><br> 
    <br>

<?php 
include "footer.php";
?> 