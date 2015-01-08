<?php
	require_once ('funciones.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<title>.:: Ltravel ::.</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<script src="../js/prefixfree.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="../js/scripts.js"></script>
</head>
<body>
	<?php include("header.php"); ?>
	<section class="contenido contenido_contacto">
		<section id="seccion_formulario">
			<div class="seccion_pago">
				<label>Realice su pago vía PayPal de forma segura.</label>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="87A6NW2Z59T3C">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			<?php
				echo '<p>'.$prev_form.'</p>';

				$form = unserialize($formulario);
			?>
			<form id="formulario" action="procesarAjax.php" method="post">
				<input id="id_nombre" type="text" name="nombre" placeholder="<?php echo $form['nombre']; ?>" required>
				<input id="id_mail" type="email" name="email" placeholder="<?php echo $form['email']; ?>" required>
				<input id="id_asunto" type="text" name="asunto" placeholder="<?php echo $form['asunto']; ?>" required>
				<textarea name="motivo" id="id_motivo" cols="30" rows="6" placeholder="<?php echo $form['motivo']; ?>" required></textarea>
				<input type="submit" value="<?php echo $form['boton']; ?>">
			</form>
		</section>
		<section id="complemento_contacto">
			<figure>
			<?php if ($nombre_archivo == 'index.php'){ ?>
				<img src="img/img_contacto.jpg">
			<?php } else { ?>
				<img src="../img/img_contacto.jpg">
			<?php } ?>
			</figure>
			<p><?php echo $post_form; ?></p>
			<ul>
			<?php if ($nombre_archivo == 'index.php'){ ?>
				<li><a href="#"><img src="img/boton_instagram.png"> @ltravel</a></li>
				<li><a href="https://www.facebook.com/PraiasDoCaribe" target="_blank"><img src="img/boton_facebook.png"> ltravel</a></li>
			<?php } else { ?>
				<li><a href="#"><img src="../img/boton_instagram.png"> @ltravel</a></li>
				<li><a href="https://www.facebook.com/PraiasDoCaribe" target="_blank"><img src="../img/boton_facebook.png"> ltravel</a></li>
			<?php } ?>
			</ul>
		</section>
	</section>
	<div class="popup_correo">
		<figure id="logo_popup">
			<img src="../img/Logo.png"/>
		</figure>
		<h3 class="titulo_msg"></h3>
		<p></p>
		<div class="botones_popup">
			<button id="boton_aceptar_popup" class="boton"></button>
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>