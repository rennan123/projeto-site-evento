<?php 

$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
$erro_cpf = isset($_GET['erro_cpf']) ? $_GET['erro_cpf'] : 0;
$erro_senha = isset($_GET['erro_senha']) ? $_GET['erro_senha'] : 0;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/cadastro.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/layout.min.css" rel="stylesheet">

  <title>Cadastro</title>
</head>
<body>
	<header>
		<img id="logo" src="media/svg/logo.svg">
	</header>
	<div class="formulario" >
		<div class="container">		
			<h4 class="ptop30">Olá, preencha seus dados de inscrição:</h4>
			<form method="post" action="registra_usuario.php" id="formCadastrarse">
				<div class="form-group mtop30">
					  <label for="nome" class="col-12 col-form-label">Nome:<span> *</span></label>
					  <div class="col-12 col-lg-12 col-md-12">
					    <input class="form-control" name="nome" type="text" placeholder="Informe seu nome ..." id="nome">
					  </div>
				</div>

				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row mleft0 m0">
					    <div class="col-12 row col-sm-12 col-xs-12 col-6 col-lg-6 col-md-6" >
					  		<label class="mtop20">Data Nascimento:<span> *</span></label>
					  		<div class="row">
							  	<div class="col-4 col-sm-4 col-xs-4 col-4 col-lg-4 col-md-4">
							    	<input class="form-control" placeholder="Dia" name="dia" type="number"  id="dia" min="01" max="31" required="true">
							  	</div>
							  	<div class="col-4 col-sm-4 col-xs-4 col-4 col-lg-4 col-md-4">
							    	<input class="form-control" placeholder="Mês" name="mes" type="number"  id="mes" min="01" max="12" required="true">
							  	</div>
							  	<div class="col-4 col-sm-4 col-xs-4 col-4 col-lg-4 col-md-4">
							    	<input class="form-control" placeholder="Ano" name="ano" type="number"  id="ano" min="1900" required="true">
							  	</div>
							</div>
						</div>

					    <div class="col-12 row col-sm-12 col-xs-12 col-6 col-lg-6 col-md-6 mleft10" >

					  		<label class="mtop20">Sexo:<span> *</span>

					    	<select class="form-control mtop17" id="estado" name="sexo">>
								<option selected="" value="">Selecione seu Sexo
								</option>
								<option value="M">Masculino</option>
								<option value="F">Feminino</option>
							</select>
					    </div>
				</div>

				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
					  <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
					  	<label for="cpf" class="mtop20">CPF (somente números):<span> *</span></label>
					    <input class="form-control" name="cpf" type="text" placeholder="Informe seu CPF ..." id="cpf" required="true">
					    <?php 
					    	if($erro_cpf){
					    		echo '<font style="color:#FF0000">CPF inválido!</font>';
					    	}
					    ?>
					  </div>
					  <div class="col-6 col-sm-12 col-xs-12 col-12  col-lg-6 col-md-6">
					  	<label for="cpf" class="mtop20">RG:<span> *</span></label>
					    <input class="form-control" name="rg" type="text" placeholder="Informe seu RG ..." id="rg" required="true">
					  </div>
				</div>			


				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
					  <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
					  	<label for="email" class="mtop20">Email:<span> *</span></label>
					    <input class="form-control" name="email" type="text" placeholder="Informe seu email ..." id="email" required="true">
					    <?php 
					    	if($erro_email){
					    		echo '<font style="color:#FF0000">E-mail já existe</font>';
					    	}
					    ?>
					  </div>
					  <div class="col-6 col-sm-12 col-xs-12 col-12  col-lg-6 col-md-6">
					  	<label for="telefone" class="mtop20">Telefone:<span> *</span></label>
					    <input class="form-control" name="telefone" type="text" placeholder="Informe seu Telefone ..." id="telefone" required="true">
					  </div>
				</div>			


				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
					  <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
					  	<label for="cpf" class="mtop20">CEP:<span> *</span></label>
					    <input class="form-control" name="cep" type="text" placeholder="Informe seu CEP ..." id="cep" required="true">
					  </div>
					  <div class="col-3 col-sm-6 col-xs-6 col-6  col-lg-3 col-md-3">
					  	<label for="estado" class="mtop20">Estado:<span> *</span></label>
					    <select class="form-control" id="estado" name="estado" required="true">

							<option selected="" value="">Selecione o Estado (UF)</option>
							<option value="Acre">Acre</option>
							<option value="Alagoas">Alagoas</option>
							<option value="Amapá">Amapá</option>
							<option value="Amazonas">Amazonas</option>
							<option value="Bahia">Bahia</option>
							<option value="Ceará">Ceará</option>
							<option value="Distrito Federal">Distrito Federal</option>
							<option value="Espírito Santo">Espírito Santo</option>
							<option value="Goiás">Goiás</option>
							<option value="Maranhão">Maranhão</option>
							<option value="Mato Grosso">Mato Grosso</option>
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							<option value="Minas Gerais">Minas Gerais</option>
							<option value="Pará">Pará</option>
							<option value="Paraíba">Paraíba</option>
							<option value="Paraná">Paraná</option>
							<option value="Pernambuco">Pernambuco</option>
							<option value="Piauí">Piauí</option>
							<option value="Rio de Janeiro">Rio de Janeiro</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Rio Grande do Norte">Rio Grande do Norte</option>
							<option value="Rondônia">Rondônia</option>
							<option value="Roraima">Roraima</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
							<option value="Sergipe">Sergipe</option>
							<option value="Tocantins">Tocantins</option>

						</select>
					  </div>
					  <div class="col-3 col-sm-6 col-xs-6 col-6  col-lg-3 col-md-3">
					  	<label for="cidade" class="mtop20">Cidade:<span> *</span></label>
					    <input class="form-control" name="cidade" type="text" placeholder="Informe sua cidade ..." id="cidade" required="true">
					  </div>
				</div>	

				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
					  <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
					  	<label for="endereco" class="mtop20">Endereço:<span> *</span></label>
					    <input class="form-control" name="endereco" type="text" placeholder="Informe seu endereço ..." id="endereco" required="true">
					  </div>
					  <div class="col-6 col-sm-12 col-xs-12 col-12  col-lg-6 col-md-6">
					  	<label for="bairro" class="mtop20">Bairro:<span> *</span></label>
					    <input class="form-control" name="bairro" type="text" placeholder="Informe seu bairro ..." id="bairro" required="true">
					  </div>
				</div>	


				<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
					  <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
					  	<label for="cpf" class="mtop20">Senha:<span> *</span></label>
					    <input class="form-control" name="senha" type="password" placeholder="Informe sua senha ..." id="senha" required="true">
					    <?php 
					    	if($erro_senha){
					    		echo '<font style="color:#FF0000">Senha diferente da confirmação</font>';
					    	}
					    ?>
					  </div>
					  <div class="col-6 col-sm-12 col-xs-12 col-12  col-lg-6 col-md-6">
					  	<label for="confsenha" class="mtop20">Confirmar Senha:<span> *</span></label>
					    <input class="form-control" name="confirmar_senha" type="password" placeholder="Informe a senha novamente para confirmá-la ..." id="confsenha" required="true">
					  </div>
				</div>	

				<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 texto-centralizado">
					<button class="btn btn-laranja mtop30 mbottom30 " type="submit">CADASTRAR NO SISTEMA</button>			
				</div>
			</form>	


		</div>
	</div>
</body>
</html>