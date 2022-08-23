<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exclusão</title>
</head>

<body>
    <?php

    require_once("conexao.php");

    $id = $_GET["id"];

    $sqlExcluir = "delete from disciplina where id = '$id'";

    $result = $con->query($sqlExcluir);
    if ($result) {
        echo "<p>" . $con->affected_rows . " registros excluídos</p>";
    } else {
        echo "<p>Erro: " . $con->error . "</p>";
    }
    $con->close();
    ?>

    <p><a href="index.php">Voltar</a></p>

</body>

</html>