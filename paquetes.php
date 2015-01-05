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
	<!-- <?php include("header.php"); ?> -->
	<header>
		<figure id="logo_header">
			<img src="img/Logo.png">
		</figure>
		<nav>
			<ul>
				<li><a href="index.php">Playas del Caribe</a></li>
				<li><a href="turismo.php">Turismo</a></li>
				<li><a id="link_paquete" href="#">Paquetes</a>
					<ul id="lista_ciudades_desktop" class="lista_ciudades">
						<li><a href="paquetes.php">Isla de Margarita</a></li>
						<li><a href="paquetes.php">Los Roques</a></li>
						<li><a href="paquetes.php">Isla de Margarita</a></li>
						<li><a href="paquetes.php">Los Roques</a></li>
					</ul>
				</li>
				<li><a href="pagos.php">Pago</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="acercade.php">Acerca de</a></li>
			</ul>
		</nav>
	</header>
	<ul id="lista_ciudades" class="lista_ciudades">
		<li><a href="paquetes.php">Isla de Margarita</a></li>
		<li><a href="paquetes.php">Los Roques</a></li>
		<li><a href="paquetes.php">Isla de Margarita</a></li>
		<li><a href="paquetes.php">Los Roques</a></li>
	</ul>
	<section class="contenido">
		<article class="paquete">
			<figure class="imagen_paquete">
				<img src="img/img_paquete.jpg">
			</figure>
			<div class="texto_paquete">
				<h4 class="titulo_paquete">Tour por la Isla</h4>
				<p class="descripcion_paquete">Recorrido por las mejores playas de la isla.</p>
			</div>
			<div class="botones_paquete">
				<a href="detalle_paquete.php" class="btn_detalle icon-vista"></a>
				<button class="btn_face">Me Gusta</button>
			</div>
		</article>
		<article class="paquete">
			<figure class="imagen_paquete">
				<img src="img/img_paquete.jpg">
			</figure>
			<div class="texto_paquete">
				<h4 class="titulo_paquete">Tour por la Isla</h4>
				<p class="descripcion_paquete">Recorrido por las mejores playas de la isla.</p>
			</div>
			<div class="botones_paquete">
				<a href="detalle_paquete.php" class="btn_detalle icon-vista"></a>
				<button class="btn_face">Me Gusta</button>
			</div>
		</article>
		<article class="paquete">
			<figure class="imagen_paquete">
				<img src="img/img_paquete.jpg">
			</figure>
			<div class="texto_paquete">
				<h4 class="titulo_paquete">Tour por la Isla</h4>
				<p class="descripcion_paquete">Recorrido por las mejores playas de la isla.</p>
			</div>
			<div class="botones_paquete">
				<a href="detalle_paquete.php" class="btn_detalle icon-vista"></a>
				<button class="btn_face">Me Gusta</button>
			</div>
		</article>
	</section>
	<!-- <?php include("footer.php"); ?> -->
	<footer>
		<figure class="logo_footer">
			<img src="img/Logo.png">
		</figure>
		<p class="derechos_autor"><strong>&copy; 2015 by ltravel</strong><br>Producto creado por @luismn89</p>
		<ul id="redes_sociales">
			<li><a href="#" class="icon-twitter"></a></li>
			<li><a href="#" class="icon-facebook"></a></li>
		</ul>
	</footer>
</body>
</html>