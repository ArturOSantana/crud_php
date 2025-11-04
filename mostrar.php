<?php
include 'listar.php';
include 'header.php';
?>


<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $aluno) {
                echo "<tr>";
                echo "<td>" . $aluno['id_aluno'] . "</td>";
                echo "<td>" . $aluno['nome_al'] . "</td>";
                echo "<td>" . $aluno['email'] . "</td>";
                echo "<td>" . $aluno['idade'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>





</body>
</html>