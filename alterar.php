<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alteração</title>
</head>

<body>
    <?php

    require_once("conexao.php");

    $id = $_GET["id"];
    $sqlAlterar = "select * from disciplina where id = '$id'";
    $result = $con->query($sqlAlterar);

    if ($result->num_rows > 0) {
        $linha = $result->fetch_assoc();
        $checked1 = ($linha['ativo'] == true)?'checked':'';
        $checked2 = ($linha['ativo'] == false) ? 'checked' : '';
    ?>
        <form method="POST" action="alteracao.php">
            <input type="hidden" name="id" value="<?= $linha['id'] ?>" />
            Nome: <input type="text" name="nome" value="<?= $linha['nome'] ?>" /> <br />
            Curso: <input type="text" name="curso" value="<?= $linha['curso'] ?>" /> <br />
            Carga Horaria: <input type="text" name="cargaHoraria" value="<?= $linha['cargaHoraria'] ?>" /> <br />
            Ativo: <input type="radio" name="ativo" value="1" />Sim
            <input type="radio" name="ativo" value="0" />Não <br>
            Preço: <input type="text" name="preco" value="<?= $linha['preco'] ?>" /><br>
            Data Inicio <input type="date" name="dataInicio" value="<?= $linha['dataInicio'] ?>" /><br>
            Data Final <input type="date" name="dataFinal" value="<?= $linha['dataFinal'] ?>" /><br>
            <input type="submit" value="Alterar Dados">
        </form>

    <?php
    }

    $con->close();
    ?>

    <p><a href="cadastro.php">Voltar</a></p>
</body>

</html>