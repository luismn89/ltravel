<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<title>.:: Ltravel ::.</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/prefixfree.js"></script>
</head>
<body>
	<?php include("header.php"); ?>
	<section class="contenido contenido_contacto">
		<section id="seccion_formulario">
			<p>
				Si usted presenta alguna duda con respecto a nuestros paquetes o cronogramas por favor
				comuniquenoslo, para asi mejorar nuestros servicios!
			</p>
			<form id="formulario" action="" method="post">
				<input type="text" name="nombre" placeholder="Nombre" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="asunto" placeholder="Asunto" required>
				<textarea name="motivo" id="input_motivo" cols="30" rows="6" placeholder="Motivo" required></textarea>
				<input type="submit" value="Enviar">
			</form>
		</section>
		<section id="complemento_contacto">
			<figure>
				<img src="img/img_contacto.jpg">
			</figure>
			<p>También puede contactarse con nosotros a traves de nuestras redes sociales.</p>
			<ul>
				<li><a href="#" class="icon-twitter"> @ltravel</a></li>
				<li><a href="#" class="icon-facebook"> ltravel</a></li>
			</ul>
		</section>
	</section>
	<footer>
		<?php include("footer.php"); ?>
	</footer>
</body>
</html>