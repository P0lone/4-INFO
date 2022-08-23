<?php

    $usuario = $_COOKIE["usuario"];
    $senha =  $_COOKIE["senha"];

    require_once("conexao.php");

    $sql = "select * from clientes where username = '$usuario' and password='$senha'; ";

    $result = $con->query($sql);

    if ($result->num_rows != 1) {
        header("Location: erro.php");
        exit(0);
    }  

?>