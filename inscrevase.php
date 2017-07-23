<?php 

$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
$erro_cpf = isset($_GET['erro_cpf']) ? $_GET['erro_cpf'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Filosofia Grega</title>
	
	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- bootstrap - link cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="imagens/logo.png" />
			</div>
			
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Voltar para Home</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<div class="container">
		
		<br /><br />

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3>Inscreva-se já.</h3>
			<br />
			<form method="post" action="registra_usuario.php" id="formCadastrarse">
				<div class="form-group">
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required="requiored">
				</div>

				<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					<?php 
						if($erro_email){
							echo '<font style="color:#FF0000">E-mail já existe</font>';
						}
					?>
				</div>

                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
                </div>

				<div class="form-group">
                    <input type="radio" name="sexo" id="masculino" value="M" checked>
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="sexo" id="feminino" value="F">
                    <label for="feminino">Feminino</label><br>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf" required="requiored">
                    <?php 
                    	if($erro_cpf){
                    		echo '<font style="color:#FF0000">CPF inválido!</font>';
                    	}
                    ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="rg" name="rg" placeholder="rg" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="telefone" required="requiored">
                </div>

                <div class="form-group">
                    <input type="date" class="form-control" id="datanascimento" name="nascimento" placeholder="datanascimento" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="complemento">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="rua" name="rua" placeholder="rua" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="numero" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="cep" required="requiored">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="estado" required="requiored">
                </div>
				
				<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
			</form>
		</div>
		<div class="col-md-4"></div>

		<div class="clearfix"></div>
		<br />
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>

	</div>


</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>