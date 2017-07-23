$(document).ready(function()
{
	iniciarMapa(); 
	carregarPontos();
});

var mapa;

function iniciarMapa() {
    var latlng = new google.maps.LatLng(40.630929, 22.958141);
 
    var options = {
        zoom: 18,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    map = new google.maps.Map(document.getElementById("mapa"), options);
}

function carregarPontos() {
    $.getJSON('js/pontos.json', function(pontos) {

        $.each(pontos, function(iniciarMapadex, ponto) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
                title: ponto.Titulo,
                map: map,
                icon: 'media/mark.png'
            });
        });
 
    });
}

