<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
</head>

<body>
    <form method="post" action="incluir.php">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" />
        <br /><br />
        <label for="curso">Curso: </label>
        <input type="text" id="curso" name="curso" />
        <br /><br />
        <label for="ch">Carga Horaria: </label>
        <input type="text" id="ch" name="ch" />
        <br /><br />
        <label for="ativo">Ativo: </label>
        <input type="radio" id="ativo" name="ativo" value="1" />Sim
        <input type="radio" id="ativo" name="ativo" value="0" />Não
        <br /><br />
        <label for="preco">Preço: </label>
        <input type="text" id="preco" name="preco" />
        <br /><br />
        <label for="dtInicio">Data Início: </label>
        <input type="date" id="dtInicio" name="dtInicio" />
        <br /><br />
        <label for="dtFinal">Data Final </label>
        <input type="date" id="dtFinal" name="dtFinal" />
        <br /><br />
        <input type="submit" value="Enviar" />
    </form>

    <h1>Frutas Cadastradas</h1>
    <table border="1">
        <tr>
            <th>Id:</th>
            <th>Nome:</th>
            <th>Curso: </th>
            <th>Carga Horaria:</th>
            <th>Ativo:</th>
            <th>Preço do curso:</th>
            <th>Data Inicio:</th>
            <th>Data Final:</th>
            <th colspan="2">Ação:</th>
        </tr>

        <?php
        require_once("conexao.php");

        $sql = "SELECT * FROM disciplina";

        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($linha = $result->fetch_assoc()) {
        ?>

                <?php
                if ($linha["ativo"] == true) {
                    $linha["ativo"] = "Sim";
                } else {
                    $linha["ativo"] = "Não";
                }

                $linha["dataInicio"] = date("d/m/Y", strtotime($linha['dataInicio']));
                $linha["dataFinal"] = date("d/m/Y", strtotime($linha['dataFinal']));
                ?>

                <tr>
                    <td><?= $linha["id"] ?></td>
                    <td><?= $linha["nome"] ?></td>
                    <td><?= $linha["curso"] ?></td>
                    <td><?= $linha["cargaHoraria"] ?></td>
                    <td><?= $linha["ativo"] ?></td>
                    <td><?= $linha["preco"] ?></td>
                    <td><?= $linha["dataInicio"] ?></td>
                    <td><?= $linha["dataFinal"] ?></td>
                    <td><a href="alterar.php?id=<?= $linha["id"] ?>">Alterar</a></td>
                    <td><a href="excluir.php?id=<?= $linha["id"] ?>">Excluir</a></td>
                </tr>

        <?php
            }
        } else {
            echo "0 resusltados obtidos";
        }
        ?>


    </table>


</body>

</html>