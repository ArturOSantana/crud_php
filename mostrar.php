<?php
include 'listar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos cadastrados</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Idade</th>
        </tr>
        <?php
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $aluno) {
            echo "<tr>";
            echo "<td>" . $aluno['id_aluno'] . "<td>";
            echo "<td>" . $aluno['nome_al'] . "<td>";
            echo "<td>" . $aluno['email'] . "<td>";
            echo "<td>" . $aluno['idade'] . "<td>";
            echo "<tr>";
        }
        ?>
        </tr>

    </table>




<?php
include "footer.php";
?>