$(document).ready(function() {
	$('#link_paquete').on('click', function(event){
		event.preventDefault();
		$('#lista_ciudades').toggle();
	});
});