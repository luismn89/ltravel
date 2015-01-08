<?php

	$dir = $_SERVER['SCRIPT_NAME'];
	$aux = explode('/',$dir);
	$nombre_archivo = array_pop($aux);

	// index.php
	if ($nombre_archivo == 'index.php'){
		define('NAVEGACION_PO', serialize( array('index.php'=>'Praias do Caribe','includes/contacto.php'=>'Reservas','includes/acercade.php'=>'Sobre Nós') ));
	} else {
		define('NAVEGACION_PO', serialize( array('../index.php'=>'Praias do Caribe','contacto.php'=>'Reservas','acercade.php'=>'Sobre Nós') ));
	}

	define('TITULO_PRESENTACION_PO', 'Desfrute de 7 dias com tudo incluído na Ilha de Margarita');
	define('SUBTITULO_CRONOGRAMA_PO', 'Programação do pacote');
	define('ACTIVIDADES_PO', 'Atividades');
	define('PIE_PAGINA_PO', 'Produto criado pela');
	define('BOTON_RESERVAR_PO', 'Reserva');
	define('ESLOGAN_PO', 'Com Ltravels, sempre querem voltar');

	// contacto.php
	define('LABEL_PAGO_PO', 'Faça o seu pagamento via PayPal com segurança.');
	define('PREVIO_FORMULARIO_PO', 'Se você tem alguma dúvida sobre nossos pacotes ou programações de viagens, por favor envie um e-mail e assim melhorar os nossos serviços para o usuário!');
	define('POST_FORMULARIO_PO', 'Você também pode entrar em contato conosco através de nossas redes sociais.');
	define('FORMULARIO_PO', serialize( array('nombre'=>'Nome','email'=>'E-mail','asunto'=>'Assunto','motivo'=>'Motivo','boton'=>'Enviar') ));

	// popup
	define('POPUP_ES', serialize( array('titulo_ok'=>'Parabéns!','texto_ok'=>'Sua pergunta foi enviada com sucesso para o administrador do site.',
										'titulo_error'=>'Lamentamos!','texto_error'=>'Seu pedido de informação não pôde ser enviada ao administrador, por favor tente novamente mais tarde.','boton'=>'Aceitar') ));

	// acercade.php
	define('ACERCA_DE_PO', 'Nós somos uma organizaçao do turismo de luxo Venezuela, buscamos promover nossos atrativos naturais com o conforto, segurança e assitência de que necessitam os nossos clientes, convidando-os a apreciar os lugares mais remotos e paradisíacas
							e também regional e cozinha internacional. Junte-se a nós para desfrutar de nossas praias cintilantes, e relaxar com estilo nas principais instalações de 5 estrelas que temos para oferecer.<br><br>365 dias por ano, 24 horas por dia
							você pode entrar em contato conosco.<br><br>Nós garantimos a disponibilidade em tempo real.<br>Melhor preço.<br>Pague com segurança on-line.<br>Ofertas exclusivas.<br><br><br>Com Ltravels, sempre querem voltar.');

	// Info de BD
	// index.php
	define('TITULOS_DIAS_PO', serialize( array('Dia 1'=>'Chegada na cidade de Puerto Ordaz',
											'Dia 2'=>'Vôo para Ilha de Margarita',
											'Dia 3'=>'Passeio de Catamarã para Isla de Coche',
											'Dia 4'=>'Tour em Safari 4x4',
											'Dia 5'=>'Dia da Compras',
											'Dia 6'=>'Dia Livre',
											'Dia 7'=>'Vôo de regresso à cidade de Puerto Ordaz') ));
	define('CRONOGRAMA_X_DIA_PO', serialize( array('Dia 1'=> array('Alojamento em Pousada Boutique.','Ande na Cidade.', 'Shooping.'),
												'Dia 2'=> array('A entrada para o Hotel de 5 Estrelas com tudo incluído.','Praia.','Piscina','Atividades recreativas e desportivas, incluindo permitidas pelo hotel.'),
												'Dia 3'=> array('Viagem de catamarã para a Ihla de Coche.','Bebidas e Licores nacionais.','Inclui almoço no Hotel Coche Paradise.'),
												'Dia 4'=> array('Caminhe pelas principais atraçoes de Ilha de Margarita. A partir de 08:00 - 18:00.','Almoço na Praia.','Inclui refrigerantes e licores nacionais.'),
												'Dia 5'=> array('Caminhe ao redor da cidade de Porlamar e malls.'),
												'Dia 6'=> array('Desfrute de atividades individuais, dentro ou fora do hotel.','Inclui buffet no dia.','Praia.','Piscina.','Atividades recreativas e desportivas, incluindo permitidas pelo hotel.'),
												'Dia 7'=> array('Passeio de Catamarã pelos Rios Caroni.','Bebidas e Licores Nacionais.','Shooping day.','Buffet (Dentro do Alojamento).')) ));

?>