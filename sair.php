<?php

setcookie("usuario","");
setcookie("senha","");

unset($_COOKIE["usario"]);
unset($_COOKIE["senha"]);

header("location:index.php");

?>