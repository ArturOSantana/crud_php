<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Aluno</title>
</head>
<body>
 <form action="delete.php" method="post">
    <label for="nome">Qual o aluno? Digite o ID</label><br>
    <input type="number" id="id" name="id"> <br><br>
    <br><br> 
    <input type="submit" value="Deletar">
 </form>

<?php include "footer.php";?>