<?php 

require_once('conexao_bd.php');

$email = $_POST['email'];
$senha = md5($_POST['senha']);
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$cpf_teste = $cpf;
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$objBD = new bd();
$link = $objBD->conecta_mysql();

$email_existe = false;

//verificar se email ja existe
$sql = " select * from usuario where email = '$email' ";

function verifica_cpf($cpf_teste)
{
	$n[1]=substr($cpf_teste,0,1);
	$n[2]=substr($cpf_teste,1,1);
	$n[3]=substr($cpf_teste,2,1);
	$n[4]=substr($cpf_teste,3,1);
	$n[5]=substr($cpf_teste,4,1);
	$n[6]=substr($cpf_teste,5,1);
	$n[7]=substr($cpf_teste,6,1);
	$n[8]=substr($cpf_teste,7,1);
	$n[9]=substr($cpf_teste,8,1);
	$n[10]=substr($cpf_teste,9,1);
	$n[11]=substr($cpf_teste,10,1);

	$soma1 = ($n[1]*10)+($n[2]*9)+($n[3]*8)+($n[4]*7)+($n[5]*6)+($n[6]*5)+($n[7]*4)+($n[8]*3)+($n[9]*2);

	$dgt1 = 11-($soma1%11);

	if ($dgt1 == 10 or $dgt1 == 11) {
		$dgt1 = 0;
	}

	$soma2 = ($n[1]*11)+($n[2]*10)+($n[3]*9)+($n[4]*8)+($n[5]*7)+($n[6]*6)+($n[7]*5)+($n[8]*4)+($n[9]*3)+($dgt1*2);

	$dgt2 = 11-($soma2%11);

	if ($dgt2 == 10 or $dgt2 == 11) {
		$dgt2 = 0;
	}

	if ($dgt1<>$n[10] or $dgt2<>$n[11]) {

		$erro = true;
	} else {
		$erro = false;
	}
	return $erro;
}

if (verifica_cpf($cpf)) {
	
	$retorno_get = '';

	if ($cpf) {
		$retorno_get.= "erro_cpf=1&";
	}

	header('Location: cadastro.php?'.$retorno_get);
	die();
}

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

	header('Location: cadastro.php?'.$retorno_get);
	die();
}

$sql = "INSERT INTO usuario (email, senha, nome, sexo, cpf, rg, telefone, dia, mes, ano, cep, endereco, bairro, cidade, estado) VALUES ('$email', '$senha', '$nome', '$sexo', '$cpf', '$rg', '$telefone', '$dia','$mes', '$ano', '$cep', '$endereco', '$bairro', '$cidade', '$estado')";

	//executar a query
if(mysqli_query($link, $sql)){
	echo 'Usuário registrado com sucesso!';
} else {
	echo 'Erro ao registrar o usuário!';
}

?>