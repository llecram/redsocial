

var user = user || {};

user.aplicarHover = function(elemento){
	elemento.hover(function () {
		var width = ($(this).width())*1.25;
		var height = ($(this).height())*1.25;

		$(this).width(width);
		$(this).height(height)

	},
	function () {
		var width = ($(this).width())*0.8;
		var height = ($(this).height())*0.8;

		$(this).width(width);
		$(this).height(height)
	}
	);
}

user.init = function() {

	user.aplicarHover($("#cabecera img"));

	$( "button[name='invitacion']" ).click(function () {
		alert("Solicitación enviada");
	});

	$( "button[name='enviarPalabras']" ).click(function () {
		var texto = $( "textarea[name='palabras']" ).val();
		alert("Enviando: "+texto);
	});
}
$( document ).ready(function() {
	user.init();
});
