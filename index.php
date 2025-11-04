<?php include "header.php";
?>
<div class="container-fluid">
<form action="insert.php" cmethod="post">
    <div class="col-md-6">
        <label for="nome" class="form-label"> Nome:</label><br>
        <input type="text" class="form-control" id="nome" name="nome"> <br><br>
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label"> E-mail::</label><br>
        <input type="email" id="email" class="form-control" name="email"> <br><br>
    </div>

    <div class="col-md-6">
    <label for="idade" class="form-label"> Idade::</label><br>
    <input type="number" class="form-control" id="idade" name="idade"> <br><br>
    </div>
    <input type="submit" class="btn btn-success" value="Enviar">

</form><br>
<br>
</div>
<?php
include "footer.php";
?>