<?php

	$dir = $_SERVER['SCRIPT_NAME'];
	$aux = explode('/',$dir);
	$nombre_archivo = array_pop($aux);

	// index.php
	if ($nombre_archivo == 'index.php'){
		define('NAVEGACION_ES', serialize( array('index.php'=>'Playas del Caribe','includes/contacto.php'=>'Reservaciones','includes/acercade.php'=>'Acerca de Nosotros') ));
	} else {
		define('NAVEGACION_ES', serialize( array('../index.php'=>'Playas del Caribe','contacto.php'=>'Reservaciones','acercade.php'=>'Acerca de Nosotros') ));
	}
	define('TITULO_PRESENTACION_ES', 'Disfruta de 7 dias todo incluido en la isla de margarita');
	define('SUBTITULO_CRONOGRAMA_ES', 'Cronograma del paquete');
	define('ACTIVIDADES_ES', 'Actividades');
	define('PIE_PAGINA_ES', 'Producto creado por');
	define('BOTON_RESERVAR_ES', 'Reservar');
	define('ESLOGAN_ES', 'Con Ltravels, siempre querrás regresar');

	// contacto.php
	define('LABEL_PAGO_ES', 'Realice su pago vía PayPal de forma segura.');
	define('PREVIO_FORMULARIO_ES', 'Si usted presenta alguna duda con respecto a nuestros paquetes o cronogramas de viajes, por favor comuniquenoslo para asi mejorar nuestros servicios al público!');
	define('POST_FORMULARIO_ES', 'También puede contactarse con nosotros a traves de nuestras redes sociales.');
	define('FORMULARIO_ES', serialize( array('nombre'=>'Nombre','email'=>'Correo Electrónico','asunto'=>'Asunto','motivo'=>'Motivo','boton'=>'Enviar') ));

	// popup
	define('POPUP_ES', serialize( array('titulo_ok'=>'Felicitaciones!','texto_ok'=>'Tu consulta ha sido enviada exitosamente al administrador de la web site.',
										'titulo_error'=>'Lo sentimos!','texto_error'=>'Su consulta no ha podido ser enviado al administrador, por favor intente nuevamente más tarde.','boton'=>'Aceptar') ));

	// acercade.php
	define('ACERCA_DE_ES', 'Somos una organización a favor del turismo de lujo dentro de Venezuela, buscamos promover nuestros atractivos naturales con la comodidad, seguridad y asistencia que necesiten nuestros clientes, invitándolos a disfrutar de los lugares más remotos y paradisíacos
							así como también de nuestra gastronomía local e internacional. Acompáñanos a disfrutar de nuestras resplandecientes playas, y relájate con estilo en las principales instalaciones 5 estrellas que tenemos para ofrecerte.<br><br>Los 365 días del año, las 24 horas del día
							podrás contactarnos.<br><br>Te garantizamos disponibilidad en tiempo real.<br>Mejor precio.<br>Pago online de forma segura.<br>Ofertas exclusivas.<br><br><br>Con Ltravels, siempre querrás regresar.');

	// Info de BD
	// index.php
	define('TITULOS_DIAS_ES', serialize( array('Dia 1'=>'Llegada a la Ciudad de Puerto Ordaz',
											'Dia 2'=>'Vuelo a la Isla de Margarita',
											'Dia 3'=>'Paseo en Catamarán a la Isla de Coche',
											'Dia 4'=>'Tour en Safari 4x4',
											'Dia 5'=>'Dia de Compras',
											'Dia 6'=>'Dia Libre',
											'Dia 7'=>'Vuelo de retorno a la Ciudad de Puerto Ordaz') ));
	define('CRONOGRAMA_X_DIA_ES', serialize( array('Dia 1'=> array('Hospedaje en Posada Boutique.','Paseo en la Ciudad.', 'Shooping.'),
												'Dia 2'=> array('Ingreso a las instalaciones del Hotel 5 Estrellas con todo incluido.','Playa.','Piscina','Actividades recreacionales, deportivas, entre otras permitidas por el hotel.'),
												'Dia 3'=> array('Viaje en catamarán hacia la isla de Coche.','Bebidas y Licores nacionales.','Incluye almuerzo en las instalaciones del Hotel Coche Paradise.'),
												'Dia 4'=> array('Paseo por los atractivos principales de la Isla de Margarita. Desde las 8 AM hasta las 6 PM.','Almuerzo en la Playa.','Incluye bebidas refrescantes y licores nacionales.'),
												'Dia 5'=> array('Paseo por la Ciudad de Porlamar y sus Centros Comerciales.'),
												'Dia 6'=> array('Disfrute de actividades individuales dentro o fuera del hotel.','Incluye buffet del dia.','Playa.','Piscina.','Actividades recreacionales, deportivas, entre otras permitidas por el hotel.'),
												'Dia 7'=> array('Paseo en Catamarán por los Ríos del Caroní.','Bebidas y Licores Nacionales.','Shooping day.','Comida buffet (dentro del Hospedaje).')) ));
?>