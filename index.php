<?php
  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

  <section>
    <div class="container">
      <h1>Login</h1>

      <form method="POST" action="" id="ajax_form">
      	
        <div class="form-group">
      		<label><b>Usuário</b></label>
          <input type="text" class="form-control" id="usuario" required="true">
        </div>
        
        <div class="form-group">
        	<label><b>Senha</b></label>
        	<input type="password" class="form-control" id="senha" required="true">
        </div>
          <button id="btn-login" type="submit" class="btn btn-primary">Entrar no Sistema</button>
      </form>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <script type="text/javascript">
    $(document).ready(function(){
      $('#ajax_form').submit(function(){
        var dados = jQuery( this ).serialize();
  
        $.ajax({
          type: "POST",
          url: "php/Controller/", // Aqui vc chama o controller do PHP
          data: dados,
          beforeSend: function()
          {
            $("#btn-login").text("Entrando ...");
          },
          success: function( data )
          {
              
          }complete: function()
          {
            $("#btn-login").text("Entrar no Sistema");
          },
        });

        });

        return false;
      });
    });

</body>
</html>