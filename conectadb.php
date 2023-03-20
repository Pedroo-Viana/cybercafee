<?php
#LOCALIZA O IP DO BANCO OU NOME DO COMPUTADOR
$servidor = "localhost";
#nome do banco
$banco = "cybercafe";
#usuario do banco
$usuario = "admin";
#senha do usuario
$senha = "123";

#conecxão ou link de acesso
$link = mysqli_connect($servidor, $usuario, $senha, $banco);

?>