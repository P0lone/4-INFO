<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incluindo dados</title>
</head>
<body>
    <h1>Inclusão de dados</h1>
<?php
//obter os dados do formulário
$nome = $_POST["nome"];
$curso = $_POST["curso"];
$ch = $_POST["ch"];
$ativo = $_POST["ativo"];
$preco = $_POST["preco"];
$dtInicio = $_POST["dtInicio"];
$dtFinal = $_POST["dtFinal"];
$dtInicio = date("d-m-Y");
$dtFinal = date("d-m-Y");
$preco = str_replace(",", ".", $preco);

require_once("conexao.php");

$sql = "INSERT INTO disciplina VALUES (null, '$nome', '$curso', '$ch', '$ativo', '$preco', '$dtInicio', '$dtFinal')";

$result = $con->query($sql);

if($con->affected_rows > 0){
    echo "<p>";
    echo $con->affected_rows;
    echo " aluno(s) incluído(s) com sucesso!";
    echo "</p>";
}
else{
    echo "<p>Ocorreu um erro: ";
    echo $con->error;
    echo "</p>";
}

?>

<p><a href="cadastro.php">Voltar</a></p>

</body>
</html>