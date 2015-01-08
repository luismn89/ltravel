<?php
	$idioma_nav_default = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
	$idioma = substr($idioma_nav_default[0], 0, 2);

	if ($idioma != 'es' && $idioma != 'pt' && $idioma != 'en') {
		$idioma = 'en';
	}

	define('IMAGENES', serialize( array('Dia 1'=> './img/guayana_dia1.jpg',
										'Dia 2'=> './img/margarita_dia2.jpg',
										'Dia 3'=> './img/paseo_catamaran_dia3.jpg',
										'Dia 4'=> './img/safari_dia4.png',
										'Dia 5'=> './img/shopping_dia5.png',
										'Dia 6'=> './img/dia_libre_dia6.jpg',
										'Dia 7'=> './img/paseo_dia7.jpg') ));

	$dir = $_SERVER['SCRIPT_NAME'];
	$aux = explode('/',$dir);
	$nombre_archivo = array_pop($aux);

	if ($idioma == 'es'){
		if ($nombre_archivo == 'index.php'){
			require_once ('idiomas/espanol.php');
		} else {
			require_once ('../idiomas/espanol.php');
		}

		$navegacion = NAVEGACION_ES;
		$titulo_presentacion = TITULO_PRESENTACION_ES;
		$sub_cronograma = SUBTITULO_CRONOGRAMA_ES;
		$actividades_tit = ACTIVIDADES_ES;
		$pie_pagina = PIE_PAGINA_ES;
		$acercade = ACERCA_DE_ES;
		$boton_reserva = BOTON_RESERVAR_ES;
		$eslogan = ESLOGAN_ES;

		$label_pago = LABEL_PAGO_ES;
		$prev_form = PREVIO_FORMULARIO_ES;
		$post_form = POST_FORMULARIO_ES;
		$formulario = FORMULARIO_ES;
		$pop_up = POPUP_ES;

		$titulos = TITULOS_DIAS_ES;
		$cronograma_dia = CRONOGRAMA_X_DIA_ES;
		$imagenes_dia = IMAGENES;

	} elseif ($idioma == 'pt'){
		if ($nombre_archivo == 'index.php'){
			require_once ('idiomas/portugues.php');
		} else {
			require_once ('../idiomas/portugues.php');
		}

		$navegacion = NAVEGACION_PO;
		$titulo_presentacion = TITULO_PRESENTACION_PO;
		$sub_cronograma = SUBTITULO_CRONOGRAMA_PO;
		$actividades_tit = ACTIVIDADES_PO;
		$pie_pagina = PIE_PAGINA_PO;
		$acercade = ACERCA_DE_PO;
		$boton_reserva = BOTON_RESERVAR_PO;
		$eslogan = ESLOGAN_PO;

		$label_pago = LABEL_PAGO_PO;
		$prev_form = PREVIO_FORMULARIO_PO;
		$post_form = POST_FORMULARIO_PO;
		$formulario = FORMULARIO_PO;
		$pop_up = POPUP_PO;

		$titulos = TITULOS_DIAS_PO;
		$cronograma_dia = CRONOGRAMA_X_DIA_PO;
		$imagenes_dia = IMAGENES;

	} elseif ($idioma == 'en'){
		if ($nombre_archivo == 'index.php'){
			require_once ('idiomas/ingles.php');
		} else {
			require_once ('../idiomas/ingles.php');
		}

		$navegacion = NAVEGACION_EN;
		$titulo_presentacion = TITULO_PRESENTACION_EN;
		$sub_cronograma = SUBTITULO_CRONOGRAMA_EN;
		$actividades_tit = ACTIVIDADES_EN;
		$pie_pagina = PIE_PAGINA_EN;
		$acercade = ACERCA_DE_EN;
		$boton_reserva = BOTON_RESERVAR_EN;
		$eslogan = ESLOGAN_EN;

		$label_pago = LABEL_PAGO_EN;
		$prev_form = PREVIO_FORMULARIO_EN;
		$post_form = POST_FORMULARIO_EN;
		$formulario = FORMULARIO_EN;
		$pop_up = POPUP_EN;

		$titulos = TITULOS_DIAS_EN;
		$cronograma_dia = CRONOGRAMA_X_DIA_EN;
		$imagenes_dia = IMAGENES_EN;
	}
?>