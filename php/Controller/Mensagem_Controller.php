<?php
	
	include("../Model/Mensagem.php");
	include("../View/MensagemView.php");

	$mensagem = new Mensagem($_POST["nome"], $_POST["email"], $_POST["assunto"], $_POST["mensagem"]);
	$mensagem_view = new MensagemView($_POST["nome"]);

	$header ="MIME-Version: 1.0\n";
	$header .= "Content-type: text/html; charset=iso-8859-1\n";
	$header .= "From: marcoslucsrios@gmail.com\n";


	if (mail ("marcoslucsrios@gmail.com", $mensagem->getAssunto(),$mensagem->getCorpoMensagem(),$header))	
		return $mensagem_view->mensagemSucesso();
	else
		return $mensagem_view->mensagemErro();
?>