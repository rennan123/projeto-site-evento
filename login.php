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

  <!--<script src="js/jquery-3.2.1.min.js"></script>-->


</head>
<body>

  <form class="login" method="post" action="validar_acesso.php" id="formLogin">
   <div class="contorno">
    <img id="logo" src="imagens/logo.svg">
  </div>
  <div class="formulario">
    <div class="branco">
     <img class="imagem" src="imagens/pessoa.svg">
     <input type="email" class="caixa" name="email" id="campo_email" placeholder="Seu e-mail" >
   </div>
   <div class="branco">
    <img  class="imagem" src="imagens/locked.svg">
    <input type="password" class="caixa" name="senha" id="campo_senha" placeholder="Sua senha">
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
<button type="register" id="cadastro"><span id="gamb"><a href="inscrevase.php">Cadastre-se</a></span></button>
</body>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script>
    $(document).ready( function(){

        //verificar se os campos de usuário e senha foram devidamente preenchidos
        $('#btn-entrar').click(function(){

          var campo_vazio = false;

          if($('#campo_email').val() == ''){
            $('#campo_email').css({'border-color': '#A94442'
        'border-style': 'solid' });
            campo_vazio = true;
          } else {
            $('#campo_email').css({'border-color': '#CCC'
            	'border-style': 'solid' });
          }

          if($('#campo_senha').val() == ''){
            $('#campo_senha').css({'border-color': '#A94442'
        'border-style': 'solid' });
            campo_vazio = true;
          } else {
            $('#campo_senha').css({'border-color': '#CCC'
        'border-style': 'solid' });
          }

          if(campo_vazio) return false;
        });
      });         
    </script>
</html>