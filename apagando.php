<?php
include "header.php";

?>
<div class="container-fluid">
    <div class="col-md-6">
        <form action="delete.php" method="post">
            <label class="form-label" for="nome">Qual o aluno? Digite o ID</label><br>
            <input class="form-control" type="number" id="id" name="id"> <br><br>
            
            <br>
             <input type="submit" class="btn btn-danger" value="Deletar">
            <br>
        </form>
    </div>
</div>

<?php include "footer.php"; ?>