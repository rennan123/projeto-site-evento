<?php 

require_once('conexao_bd.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$objBD = new bd();
$link = $objBD->conecta_mysql();

$sql = " insert into usuario(nome, email, senha) values ('$nome', '$email', '$senha') ";

	//executar a query
if(mysqli_query($link, $sql)){
	echo 'Usuário registrado com sucesso!';
} else {
	echo 'Erro ao registrar o usuário!';
}

?>