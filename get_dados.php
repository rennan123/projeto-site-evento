<?php 

	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: index.php?erro1');
	}

	require_once('conexao_bd.php');

	$email = $_SESSION['email'];

	$objBD = new bd();
	$link = $objBD->conecta_mysql();

	$sql = "SELECT * FROM usuario WHERE email = '$email';";

	$resultado_id = mysqli_query($link, $sql);

	if ($resultado_id) {
		$registro = mysqli_fetch_assoc($resultado_id);

		echo json_encode($registro);
		
	} else {
		echo 'erro';
	}

?>