<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "relatorio";

$conn = mysqli_connect('localhost', 'root', '', 'relatorio');
//$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
mysqli_set_charset($conn, 'utf8');

if($conn->connect_error){
	die("Falha ao realizar conexao :" . $conn->connect_error);
	echo("Falha");
}else{
	echo("ok");
}
?> 