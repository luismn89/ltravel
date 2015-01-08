<?php
	require_once ('includes/funciones.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<title>.:: Ltravel ::.</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="js/prefixfree.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
	<?php include("includes/header.php"); ?>
	<section class="contenido">
		<section id="presentacion">
			<figure class="imagen_presentacion">
				<img src="img/img_principal_home.png">
			</figure>
			<h1 class="titulo_presentacion"><?php echo $titulo_presentacion; ?></h1>
		</section>
		<section class="cronograma">
			<a href="img/cronograma1.png">
				<figure class="img_cronograma">
					<img src="img/cronograma1.png">
				</figure>
			</a>
		</section>
		<label> <?php echo $sub_cronograma; ?>.</label>
		<section id="paquetes_home">

			<?php
				$articulos = unserialize($titulos);
				$actividades = unserialize($cronograma_dia);
				$imagenes = unserialize($imagenes_dia);

				foreach ($articulos as $dias_art => $descripcion) {
					$cadena =	'<article class="item item_noSeleccionado">'.
									'<a href="#" class="enlace_item">'.
										'<figure class="imagen_item">'.
											'<img src="'.$imagenes[$dias_art].'">'.
										'</figure>'.
										'<div class="texto_item">'.
											'<h4 class="titulo_item">'.$dias_art.'.</h4>'.
											'<p class="descripcion_item">'.$descripcion.'.</p>'.
										'</div>'.
										'<div class="actividades">'.
											'<label>'.$actividades_tit.':</label>'.
											'<ul>';
					foreach ($actividades[$dias_art] as $act) {
						$cadena .= '<li>'.$act.'</li>';
					}
					$cadena .=				'</ul>'.
										'</div>'.
									'</a>'.
								'</article>';
					echo $cadena;
				}
			?>
			<article class="item">
				<section class="botones_adicionales botones_pc">
					<a href="includes/contacto.php">Reservar</a>
					<iframe id="btn_like" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FPraiasDoCaribe&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
				</section>
			</article>
		</section>
		<section class="botones_adicionales botones_cel">
			<a href="includes/contacto.php">Reservar</a>
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FPraiasDoCaribe&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
		</section>
	</section>
	<?php include("includes/footer.php"); ?>
</body>
</html>