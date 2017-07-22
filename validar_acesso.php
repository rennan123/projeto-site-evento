<?php 

	session_start();

	require_once('conexao_bd.php');

	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$sql = " SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ";

	$objBD = new bd();
	$link = $objBD->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){

			$_SESSION['email'] = $dados_usuario['email'];

			header('Location: home.php');

		} else {
			header('Location: login.php?erro=1');
		}
	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}


?>