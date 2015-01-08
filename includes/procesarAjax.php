<?php
	require_once('funciones.php');

	// Variables
	$jsondata = array();
	$datos_formulario = array();
	$popup = unserialize($pop_up);

	if( isset($_POST['nombre']) && $_POST['email'] && $_POST['asunto'] && $_POST['motivo']) {
		$email_destino = 'Ltravelsve@gmail.com';
		$email_asunto = $_POST['asunto'];
		$email_cliente = $_POST['email'];

		$email_mensaje = "Detalles del formulario de contacto:\n\n";
		$email_mensaje .= "Nombre: ".$_POST['nombre']."\n";
		$email_mensaje .= "Email: ".$_POST['email']."\n";
		$email_mensaje .= "Asunto: ".$email_asunto."\n";
		$email_mensaje .= "Motivo: ".$_POST['motivo']."\n";

		$headers = "From: ".$email_cliente."\r\nReply-to: ".$email_cliente."\r\nX-Mailer: PHP/".phpversion();
		mail($email_destino, $email_asunto, utf8_decode($email_mensaje), $headers);

		$jsondata['estado'] = 'ok';
		$jsondata['titulo'] = $popup['titulo_ok'];
		$jsondata['mensaje'] = $popup['texto_ok'];
		$jsondata['boton'] = $popup['boton'];

	} else{
		$jsondata['estado'] = 'error';
		$jsondata['titulo'] = $popup['titulo_error'];
		$jsondata['mensaje'] = $popup['texto_error'];
		$jsondata['boton'] = $popup['boton'];
		die();
	}
	header('Content-type: application/json; charset=utf-8');
	echo json_encode($jsondata);
	exit();
?>