<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/editar.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/layout.min.css" rel="stylesheet">

    <title>Dados pessoais</title>

</head>
<body> 
<header class="col-12">

    <img id="imagem-pessoa" src="media/svg/pessoa-laranja2.svg">
    <button class="btn-sair" id="botao-sair"><a href="index.html">Sair</a></button>

</header>


	
		<div class="controle col-12	col-lg-2 col-md-4 col-sm-12 col-xs-12  mbottom50" id="control">
		       <center><img id="logo" src="media/svg/logo-laranja.svg"></center>
		        <div class="texto">
		            <h5>MEU CADASTRO</h5>
		            <a href="#">Visualizar cadastro</a>
		        </div>
		        <div class="texto">
		            <h5>INSCRIÇÃO</h5>
		            <a href="#">Visualizar inscrição</a>
		        </div>

		</div>
		<div  class="formulario col-12 col-sm-12 col-xs-12 col-md-8 col-lg-10">
		    <div class="container">
		        <h4 class="ptop30">Meu Cadastro</h4>
		            <div class="form-group mtop30">
		                <label for="nome" class="col-12 col-form-label">Nome:<span> *</span></label>
		                <div class="col-12 col-lg-12 col-md-12">
		                    <input class="form-control" name="nome" type="text" id="nome" />
		                </div>
		            </div>

		            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row mleft0 m0">
		                <div class="col-12 row col-sm-12 col-xs-12 col-6 col-lg-6 col-md-6" >
		                    <label class="mtop20">Data Nascimento:<span> *</span></label>
		                    <div class="row">
		                        <div class="col-4 col-sm-4 col-xs-4 col-4 col-lg-4 col-md-4">
		                            <input class="form-control" placeholder="Dia" name="dia" type="number"  id="dia">
		                        </div>
		                        <div class="col-4 col-sm-4 col-xs-4 col-4 col-lg-4 col-md-4">
		                            <input class="form-control" placeholder="Mês" name="mes" type="number"  id="mes">
		                        </div>
		                        <div class="col-4 col-sm-4 col-xs-4 col-4 col-lg-4 col-md-4">
		                            <input class="form-control" placeholder="Ano" name="ano" type="number"  id="ano">
		                        </div>
		                    </div>
		                </div>

		                <div class="col-12 row col-sm-12 col-xs-12 col-6 col-lg-6 col-md-6 mleft10" >

		                    <label class="mtop20">Sexo:<span> *</span>

		                        <select class="form-control mtop17" id="sexo" name="sexo">
		                            <option selected="" value="">Selecione seu Sexo
		                            </option>
		                            <option value="M">Masculino</option>
		                            <option value="F">Feminino</option>
		                        </select>
		                </div>
		            </div>

		            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
		                <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
		                    <label for="cpf" class="mtop20">CPF:<span> *</span></label>
		                    <input class="form-control" name="cpf" type="text" placeholder="Informe seu CPF ..." id="cpf">
		                </div>
		                <div class="col-6 col-sm-12 col-xs-12 col-12  col-lg-6 col-md-6">
		                    <label for="cpf" class="mtop20">RG:<span> *</span></label>
		                    <input class="form-control" name="rg" type="text" placeholder="Informe seu RG ..." id="rg">
		                </div>
		            </div>


		            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
		                <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
		                    <label for="email" class="mtop20">Email:<span> *</span></label>
		                    <input class="form-control" name="email" type="email" placeholder="Informe seu email ..." id="email">
		                </div>
		                <div class="col-6 col-sm-12 col-xs-12 col-12  col-lg-6 col-md-6">
		                    <label for="telefone" class="mtop20">Telefone:<span> *</span></label>
		                    <input class="form-control" name="telefone" type="text" placeholder="Informe seu Telefone ..." id="telefone">
		                </div>
		            </div>


		            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
		                <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
		                    <label for="cpf" class="mtop20">CEP:<span> *</span></label>
		                    <input class="form-control" name="cep" type="text" placeholder="Informe seu CEP ..." id="cep">
		                </div>
		                <div class="col-3 col-sm-6 col-xs-6 col-6  col-lg-3 col-md-3">
		                    <label for="estado" class="mtop20">Estado:<span> *</span></label>
		                    <select class="form-control" id="estado" name="estado">

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
		                    <input class="form-control" name="cidade" type="text" placeholder="Informe sua cidade ..." id="cidade">
		                </div>
		            </div>

		            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
		                <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
		                    <label for="endereco" class="mtop20">Endereço:<span> *</span></label>
		                    <input class="form-control" name="endereco" type="text" placeholder="Informe seu endereco ..." id="endereco">
		                </div>
		                <div class="col-6 col-sm-12 col-xs-12 col-12  col-lg-6 col-md-6">
		                    <label for="bairro" class="mtop20">Bairro:<span> *</span></label>
		                    <input class="form-control" name="bairro" type="text" placeholder="Informe seu bairro ..." id="bairro">
		                </div>
		            </div>


		            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 row">
		                <div class="col-6 col-sm-12 col-xs-12 col-12 col-lg-6 col-md-6">
		                    <label for="cpf" class="mtop20">Senha:<span> *</span></label>
		                    <input class="form-control" name="senha" type="password" placeholder="Informe sua senha ..." id="senha">
		                </div>
		            </div>

		            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 texto-centralizado">
		                <button class="btn btn-laranja mtop30 mbottom30" id="btn_atualizar">ATUALIZAR NO SISTEMA</button>
		            </div>

		    </div>
		</div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/editar.js"></script>
	<script type="text/javascript">

		var dados_carregados = false;

		$(document).ready(function() {

			$('#btn_atualizar').click(function() {
				/* Act on the event */
				if ($('#nome').val().length > 0){
					$.ajax({
						url: 'inclui_dados.php',
						method: 'post',
						data: { nome:$('#nome').val(),
								dia:$('#dia').val(),
								mes:$('#mes').val(),
								ano:$('#ano').val(),
								sexo:$('#sexo').val(),
								cpf:$('#cpf').val(),
								rg:$('#rg').val(),
								email:$('#email').val(),
								telefone:$('#telefone').val(),
								cep:$('#cep').val(),
								estado:$('#estado').val(),
								cidade:$('#cidade').val(),
								endereco:$('#endereco').val(),
								bairro:$('#bairro').val(),
								senha:$('#senha').val()},
						success: function(data){
							alert('Dados atualizados com sucesso!');
						}
					});
				}				
			});

			function atualizar_dados(){
				$.ajax({
					url: 'get_dados.php',
					success: function(data) {
						var usuario = JSON.parse(data);
						$('#nome').val(usuario.nome);
						$('#dia').val(usuario.dia);
						$('#mes').val(usuario.mes);
						$('#ano').val(usuario.ano);
						$('#sexo').val(usuario.sexo);
						$('#cpf').val(usuario.cpf);
						$('#rg').val(usuario.rg);
						$('#email').val(usuario.email);
						$('#telefone').val(usuario.telefone);
						$('#cep').val(usuario.cep);
						$('#estado').val(usuario.estado);
						$('#cidade').val(usuario.cidade);
						$('#endereco').val(usuario.endereco);
						$('#bairro').val(usuario.bairro);
						$('#senha').val(usuario.senha);
					}
				});
			}
			if (!dados_carregados) {
				atualizar_dados();
				dados_carregados = true;
			}
		});

	</script>
</body>
</html>