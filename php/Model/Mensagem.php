<?php
	
	class Mensagem 
	{

		var $nome;
		var $email;
		var $assunto;
		var $mensagem;
		var $corpo_mensagem;

		function Mensagem($nome, $email, $assunto, $mensagem)
		{
			$this->nome = $nome;
			$this->email = $email;
			$this->assunto = $assunto;
			$this->mensagem = $mensagem;
			$this->montaCorpoMensagem();
		}

		function getAssunto()
		{
			return $this->assunto;
		}

		function montaCorpoMensagem()
		{
			$this->corpo_mensagem = "Nome = $this->nome <br>"; 
			$this->corpo_mensagem .= "Email = $this->email <br>"; 
			$this->corpo_mensagem .= "Mensagem = $this->mensagem <br>"; 
		}

		function getCorpoMensagem()
		{
			return $this->corpo_mensagem;
		}
	}

?>