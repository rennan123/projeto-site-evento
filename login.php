<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <title>Login</title>
</head>
<body>

  <form class="login" method="post" action="validar_acesso.php" id="formLogin">
   <div class="contorno">
    <img id="logo" src="imagens/logo.svg">
  </div>
  <div class="formulario">
    <div class="branco" id="campo_email">
     <img class="imagem" src="imagens/pessoa.svg">
     <input type="email" class="caixa" name="email" id="email" placeholder="Seu e-mail" >
   </div>
   <div class="branco" id="campo_senha">
    <img  class="imagem" src="imagens/locked.svg">
    <input type="password" class="caixa" name="senha" id="senha" placeholder="Sua senha">
  </div>
</div>
<div id="invalido">
<?php
  if($erro == 1){
    echo '<font color="#FF9933">Usuário e ou senha inválido(s)</font>';
  }
?>
</div>
<button type="submit" id="btn-entrar">Entrar</button>
<div class="linha">
  <input type="checkbox" checked="checked"> Lembrar-me
  <a id="esqueceu" href="#">Esqueceu a senha?</a>
</div>
</form>
<button type="register" id="cadastro"><span id="gamb"><a href="cadastro.php">Cadastre-se</a></span></button>
</body>
</html>