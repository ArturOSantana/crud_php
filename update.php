<?php require "conexao.php";

$aux = $_POST["aux"];
$novo = $_POST["novo"];
$id = $_POST["id"];


try {
    if ($aux == "nome") {
        $sql = $pdo->prepare("UPDATE aluno SET nome_al = ? WHERE id_aluno = ?");
        $sql->execute([$novo, $id]);
    } elseif ($aux == "email") {
        $sql = $pdo->prepare("UPDATE aluno SET email = ? WHERE id_aluno = ?");
        $sql->execute([$novo, $id]);
    } elseif ($aux == "idade") {
        $sql = $pdo->prepare("UPDATE aluno SET idade = ? WHERE id_aluno = ?");
        $sql->execute([$novo, $id_aluno]);
    } else {
        echo "ERRO";
    }
    header("Location: mostrar.php");
} catch (PDOException $Updateerror) {
    echo "Erro no set" . $Updateerror->getMessage();
}
