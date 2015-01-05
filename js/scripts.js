$(document).ready(function() {
	if ($(window).width() < 1200) {
		$('#link_paquete').on('click', function(){
			$('#lista_ciudades').toggle();
		});
	} else {
		$('#lista_ciudades').hide();
		$('#link_paquete').on('mouseover', function(){
			$('#lista_ciudades_desktop').fadeIn('fast');
		});
		$('#lista_ciudades_desktop').on('mouseleave', function(){
			$('#lista_ciudades_desktop').fadeOut('fast');
		});
	}
});