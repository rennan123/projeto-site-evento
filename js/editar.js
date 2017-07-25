$(document).ready(function()
{
	$("#control").slideUp(0);	

});

$('#botao-sair').click(logout);

$("#imagem-pessoa").click(mostraMenu);

function mostraMenu()
{
	$("#control").stop().slideToggle(1000);		
	$("body").toggleClass("background-azul");
}

function logout()
{
	$.ajax({
		type: "POST",
		url: "logout.php"
	});
}