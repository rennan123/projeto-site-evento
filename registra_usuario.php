<?php 

require_once('conexao_bd.php');

$email = $_POST['email'];
$senha = md5($_POST['senha']);
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


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

$sql = "INSERT INTO usuario (email, senha, nome, sexo, cpf, rg, telefone, nascimento, cep, rua, complemento, numero, bairro, cidade, estado) VALUES ('$email', '$senha', '$nome', '$sexo', '$cpf', '$rg', '$telefone', '$nascimento', '$cep', '$rua', '$complemento', '$numero', '$bairro', '$cidade', '$estado')";

	//executar a query
if(mysqli_query($link, $sql)){
	echo 'Usuário registrado com sucesso!';
} else {
	echo 'Erro ao registrar o usuário!';
}

?>