<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alteração</title>
</head>

<body>
    <?php
    require_once("conexao.php");

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $curso = $_POST["curso"];
    $ch = $_POST["cargaHoraria"];
    $ativo = $_POST["ativo"];
    $preco = $_POST["preco"];
    $dtInicio = $_POST["dataInicio"];
    $dtFinal = $_POST["dataFinal"];

    $sqlAlterar = "update disciplina set nome='$nome', curso='$curso', cargaHoraria='$ch', ativo='$ativo', preco='$preco', dataInicio='$dtInicio', dataFinal='$dtFinal' where id='$id'";
    
    $result = $con->query($sqlAlterar);
    if ($con->affected_rows > 0) {
        echo "<p>Registro atualizado com sucesso!</p>";
    } else {
        echo "<p>Nenhum registro foi atualizado</p>";
    }
    $con->close();
    ?>
    
    <p><a href="cadastro.php">Voltar</a></p>
</body>

</html>