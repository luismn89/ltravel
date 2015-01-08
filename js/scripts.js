$(document).ready(function() {
	$('.item:not(:last-child)').on('click', function(event){
		event.preventDefault();
		var item = $(this);
		ocultarDetalle($(this).prevAll('.item'));
		ocultarDetalle($(this).nextAll('.item'));
		if($(this).find('.texto_item').is(':visible'))
		{
			mostrarDetalle(item);
		} else {
			ocultarDetalle(item);
		}
	});

	$('#formulario').on('submit', function(event){
		event.preventDefault();
		procesarFormulario();
		$('#formulario')[0].reset();
	});

	$('#boton_aceptar_popup').on('click', function() {
		$('header, .contenido, footer').css('opacity', '1');
		$('.popup_correo').fadeOut(1000);
	});
});
function mostrarDetalle(obj){
	obj.find('.texto_item').slideUp('fast');
	setTimeout(function(){
		obj.removeClass('item_noSeleccionado');
		obj.addClass('item_seleccionado');
		obj.find('.actividades').slideDown('fast');
	}, 50);
}
function ocultarDetalle(obj){
	obj.find('.actividades').slideUp('fast');
	setTimeout(function(){
		obj.removeClass('item_seleccionado');
		obj.addClass('item_noSeleccionado');
		$('.item:last-child').removeClass('item_noSeleccionado');
		obj.find('.texto_item').slideDown('fast');
	}, 100);
}

function procesarFormulario(){

	var datajson = {
		nombre : $('#id_nombre').val(),
		email  : $('#id_mail').val(),
		asunto : $('#id_asunto').val(),
		motivo : $('#id_motivo').val()
	};

	enviarAjax('procesarAjax.php', datajson);
}

function enviarAjax(url, datajson){
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'json',
		data: datajson,
		success: function(response){
			$('header, .contenido, footer').css('opacity', '0.2');
			if (response.estado == 'ok'){
				$('.popup_correo h3').text(response.titulo);
				$('.popup_correo p').text(response.mensaje);
				$('.popup_correo button').text(response.boton);
			} else if (response.estado == 'error'){
				$('.popup_correo h3').text(response.titulo);
				$('.popup_correo p').text(response.mensaje);
				$('.popup_correo button').text(response.boton);
			}
			$('.popup_correo').fadeIn(1000);
		},
		error: function(mensaje){
			console.log('error');
			console.log(mensaje.statusText);
		}
	});

}

