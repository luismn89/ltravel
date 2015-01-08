<?php

	$dir = $_SERVER['SCRIPT_NAME'];
	$aux = explode('/',$dir);
	$nombre_archivo = array_pop($aux);

	// index.php
	if ($nombre_archivo == 'index.php'){
		define('NAVEGACION_EN', serialize( array('index.php'=>'Caribbean Beaches','includes/contacto.php'=>'Reservations','includes/acercade.php'=>'About Us') ));
	} else {
		define('NAVEGACION_EN', serialize( array('../index.php'=>'Caribbean Beaches','contacto.php'=>'Reservations','acercade.php'=>'About Us') ));
	}

	define('TITULO_PRESENTACION_EN', 'Enjoy 7 days all inclusive Island Margarita');
	define('SUBTITULO_CRONOGRAMA_EN', 'Schedule package');
	define('ACTIVIDADES_EN', 'Activities');
	define('PIE_PAGINA_EN', 'Product created by');
	define('BOTON_RESERVAR_EN', 'Reserve');
	define('ESLOGAN_EN', 'With Ltravels, always want to return');

	// contacto.php
	define('LABEL_PAGO_EN', 'Make your payment throught PayPal safely.');
	define('PREVIO_FORMULARIO_EN', 'If you have any questions about our packages or travel schedules, please inform us to improve our services to you!');
	define('POST_FORMULARIO_EN', 'You can also contact us through our social networks.');
	define('FORMULARIO_EN', serialize( array('nombre'=>'Name','email'=>'E-mail','asunto'=>'Subject','motivo'=>'Motive','boton'=>'Send') ));

	// popup
	define('POPUP_EN', serialize( array('titulo_ok'=>'Congratulations!','texto_ok'=>'Your query has been successfully sent to the administrator of the web site.',
										'titulo_error'=>'Sorry!','texto_error'=>'Your query could not be sent to the administrator, please try again later.','boton'=>'Accept') ));

	// acercade.php
	define('ACERCA_DE_EN', 'We are an organization for luxury tourism in Venezuela, we seek to promote our natural attractions with the comfort, security and assistance they need our customers,
							inviting them to enjoy the most remote and wonderful places and also regional and international cuisine. Join us to enjoy our sparkling beaches, and relax in style in the main 5 star facilities we have to offer.
							<br><br>365 days a year, 24 hours a day you can contact us.<br><br>We guarantee availability in real time.<br>Best Price.<br>Pay securely online.<br>Exclusive offers.<br><br><br>With Ltravels, always want to return.');

	// Info de BD
	// index.php
	define('TITULOS_DIAS_EN', serialize( array('Day 1'=>'Arrival in the city of Puerto Ordaz',
											'Day 2'=>'Flight to Margarita Island',
											'Day 3'=>'Catamaran ride to Isla de Coche',
											'Day 4'=>'4x4 Safari Tour',
											'Day 5'=>'Shooping day',
											'Day 6'=>'Free day',
											'Day 7'=>'Return flight to the city of Puerto Ordaz') ));
	define('CRONOGRAMA_X_DIA_EN', serialize( array('Day 1'=> array('Accomomdation in Boutique Inn.','Ride in the city.', 'Shooping.'),
												'Day 2'=> array('Entrance to the Hotel 5 star all inclusive.','Beach.','Swimming Pool','Recreational and sports activities, including permitted by the hotel.'),
												'Day 3'=> array('Catamaran trip to the Isla de Coche.','Drinks and National Liquors.','Include lunch at the Hotel Coche Paradise.'),
												'Day 4'=> array('Walk through the main attractions of the island of Margarita. From 8 AM to 6 PM.','Lunch on the beach.','Include refreshing drinks and national liquors.'),
												'Day 5'=> array('Walk around the city of Porlamar and Malls.'),
												'Day 6'=> array('Enjoy individual activities within or outside the hotel.','Includes buffet the day.','Beach.','Swimming Pool.','Recreational and sports activities, including permitted by the hotel.'),
												'Day 7'=> array('Catamaran ride for Rivers Caroni.','Drinks and National Liquors.','Shooping day.','Food buffet (Within the hosting).')) ));
	define('IMAGENES_EN', serialize( array('Day 1'=> 'img/guayana_dia1.jpg',
										'Day 2'=> 'img/margarita_dia2.jpg',
										'Day 3'=> 'img/paseo_catamaran_dia3.jpg',
										'Day 4'=> 'img/safari_dia4.png',
										'Day 5'=> 'img/shopping_dia5.jpg',
										'Day 6'=> 'img/dia_libre_dia6.jpg',
										'Day 7'=> 'img/paseo_dia7.jpg') ));
?>