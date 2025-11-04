<?php require "conexao.php";
include "header.php";
?>
<div class="container-fluid">
    <form method="post" action="update.php">

        <div class="col-md-6">
            <label class="form-label" for="ID"> Quem devemos alterar: </label><br>
            <input class="form-control" placeholder="Digite o ID" type="number" id="id" name="id"><br>
        </div>

        <br>

        <div class="col-md-6">
            <label for="aux">Escolha o que alterar </label>
            <select name="aux" class="form-select" id="aux">
                <option selected value=""> Escolha uma opção </option>
                <option value="nome">Nome</option>
                <option value="email">E-mail</option>
                <option value="idade">Idade </option>
            </select>
        </div>
       
        <br>
        <br>
        <div class="col-md-6">
            <label class="form-label" for="novo">Nova informação:</label>
            <input class="form-control" id="id" name="novo"> <br>
        </div>
        <br>

        <input type="submit" class="btn btn-success" value="Alterar">
    </form>
</div>
</body>

</html>