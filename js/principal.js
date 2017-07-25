$(document).ready(function(){

	listenerMenu();



    $(".regular-pequeno").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $(".regular-medio").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });

    $(".regular-grande").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });

	$('#ajax_form').submit(function(){
		var dados = jQuery( this ).serialize();
		
		$.ajax({
			type: "POST",
			url: "php/Controller/Mensagem_Controller.php",
			data: dados,
			beforeSend: function()
			{
				$("#btn-envio").text("Enviando...");
			},
			success: function( data )
			{
				if ( data == "enviado" )
				{
					toastEnviado();
				}	
				else
				{
					toastNaoEnviado();
				}
			},
			complete: function()
			{
				limpaInputs();
				$("#btn-envio").text("Enviar Mensagem");
			},
		});

		return false;
	});
});

function toastEnviado()
{
	iziToast.success({
		title: 'Sucesso!',
		message: 'Sua mensagem foi enviada com sucesso!',
		position: 'bottomLeft',
	});
}
				
function toastNaoEnviado()
{
	iziToast.error({
		title: 'Erro!',
		message: 'Sua mensagem nÃ£o foi enviada. Verifique a conexÃ£o com a internet e tente novamente.',
		position: 'bottomLeft',
	});
}
				
function limpaInputs()
{
	$("input").val("");
	$("textarea").val(" ");
}

function listenerMenu()
{
	$(".efeito").click(function(event)
	{
		event.preventDefault();
		var sectionId = $(this).attr("href");
		$("html body").animate(
		{
			scrollTop: $(sectionId).offset().top
		}, 1500)

	})

}