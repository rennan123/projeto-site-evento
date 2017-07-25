<?php
	
	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro=1');
	}

	require_once('conexao_bd.php');

	$nome = $_POST['nome'];
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	$sexo = $_POST['sexo'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$email = $_SESSION['email'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$senha = $_POST['senha'];

	$objBD = new bd();
	$link = $objBD->conecta_mysql();

	$sql = " UPDATE usuario SET email='$email', senha='$senha', nome='$nome', sexo='$sexo',	cpf='$cpf',	rg='$rg', telefone='$telefone', cep='$cep', endereco='$endereco', bairro='$bairro', bairro='$bairro', cidade='$cidade', estado='$estado', dia='$dia', mes='$mes', ano='$ano' WHERE email = '$email' ";

	mysqli_query($link, $sql);
?>