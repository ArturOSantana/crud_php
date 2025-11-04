<?php 
include "conexao.php";
$id = $_POST['id'];
try
{
    $sql = $pdo->prepare("DELETE FROM aluno WHERE id_aluno = ?;");
    $sql->execute([$id]);
  
   header("location:mostrar.php?get:removido_com_sucesso");

}
catch(PDOException $ErroDelet){
    echo "Erro ao tentar deletar".$ErroDelet->getMessage();
}





?>