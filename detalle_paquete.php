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
		<div class="seccion_cronograma">
			<h2 class="titulo_paquete_detalle">
				Tour por la isla.
			</h2>
			<label>Cronograma de Viaje:</label>
			<figure id="cronograma">
				<img src="img/img_description_vzla.png">
			</figure>
			<p class="descripcion_paquete_detalle">
				Recorrido por mar y tierra de la isla de margarita por todos sus zonas turisticas.
			</p>
		</div>
		<div class="seccion_fechas">
			<label>Fechas disponibles para el viaje:</label>
			<ul class="fechas_paquete">
				<li>Del 12 al 18 de Enero.</li>
				<li>Del 23 al 29 de Enero</li>
				<li>Del 04 al 19 de Febrero</li>
			</ul>
			<label>Costo del paquete:</label>
			<p class="costo_paquete">
				50.000 BsF. / 1.000 $.
			</p>
			<a href="pagos.php" class="link_pago">Comprar</a>
		</div>
		<div class="galeria">
			<figure><img src="img/gal_1.jpg"></figure>
			<figure><img src="img/gal_2.jpg"></figure>
			<figure><img src="img/gal_3.jpg"></figure>
		</div>
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