<?php 

require_once('conexao_bd.php');

$nome = $_POST['nome'];
$senha = md5($_POST['senha']);
$email = $_POST['email'];

$objBD = new bd();
$link = $objBD->conecta_mysql();

$email_existe = false;

//verificar se email ja existe
$sql = " select * from usuario where email = '$email' ";
if($resultado_id = mysqli_query($link, $sql)){

	$dados_usuario = mysqli_fetch_array($resultado_id);

	if(isset($dados_usuario['email'])){
		$email_existe = true;
	}
} else {
	echo 'Erro ao tentar localizar o registro de email';
}

if($email_existe){

	$retorno_get = '';

	if ($email_existe) {
		$retorno_get.= "erro_email=1&";
	}

	header('Location: inscrevase.php?'.$retorno_get);
	die();
}

$sql = " insert into usuario(nome, email, senha) values ('$nome', '$email', '$senha') ";

	//executar a query
if(mysqli_query($link, $sql)){
	echo 'Usuário registrado com sucesso!';
} else {
	echo 'Erro ao registrar o usuário!';
}

?>