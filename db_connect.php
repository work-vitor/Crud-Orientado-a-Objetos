<?php
//Conexão com banco de dados

$severname = "localhost";
$username = "root";
$password = "";
$db_name = "cadastro";

$connect = mysqli_connect($severname, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()):
	echo "Erro na Conexão:".mysqli_connect_error();
endif;

?>