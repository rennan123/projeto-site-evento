<?php
	
	class MensagemView
	{

		var $nome;

		function MensagemView($nome)
		{
			$this->nome = $nome;
		}

		function mensagemSucesso()
		{
			echo "enviado";
		}

		function mensagemErro()
		{
			echo "nПлкo enviado";
		}

	}


?>