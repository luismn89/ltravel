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
		<section id="presentacion">
			<figure class="imagen_presentacion">
				<img src="img/img_principal_home.png">
			</figure>
			<h1 class="titulo_presentacion">Disfruta de 7 dias todo incluido en la isla de margarita</h1>
			<a href="#" class="boton_presentacion">Ver Paquetes</a>
		</section>
		<section id="paquetes_home">
			<p>Echa un vistazo a nuestros ultimos paquetes de viaje</p>
			<article class="item">
				<a href="#" class="enlace_item">
					<figure class="imagen_item">
						<img src="img/img_articulos_home.png">
					</figure>
					<h4 class="titulo_item">Aventura en 4 ruedas - Descubre la isla</h4>
					<p class="descripcion_item">Isla de Margarita, Venezuela</p>
				</a>
			</article>
			<article class="item">
				<a href="#" class="enlace_item">
					<figure class="imagen_item">
						<img src="img/img_articulos_home.png">
					</figure>
					<h4 class="titulo_item">Aventura en 4 ruedas - Descubre la isla</h4>
					<p class="descripcion_item">Isla de Margarita, Venezuela</p>
				</a>
			</article>
			<article class="item">
				<a href="#" class="enlace_item">
					<figure class="imagen_item">
						<img src="img/img_articulos_home.png">
					</figure>
					<h4 class="titulo_item">Aventura en 4 ruedas - Descubre la isla</h4>
					<p class="descripcion_item">Isla de Margarita, Venezuela</p>
				</a>
			</article>
		</section>
		<section id="atributos">
			<p>¡Conoce un poco de venezuela!</p>
			<article class="item_atributo">
				<figure class="imagen_atributo_item">
					<img src="img/img_description_vzla.png">
				</figure>
				<div class="descripcion">
					<h2 class="titulo_atributo_item">Los Bravos de Margarita</h2>
					<p class="subtitulo_atributo_item">Since 1991</p>
					<p class="resena_atributo_item">
						BRAVOS DE MARGARITA
						Una historia que nace en tierra firme y se consolida en la más hermosa isla del Caribe.
						Es el actual equipo de Beisbol autoctono del Estado Nueva Esparta que hace vida en la Liga Venezolana de Beisbol Profesional.
					</p>
				</div>
			</article>
			<article class="item_atributo">
				<figure class="imagen_atributo_item">
					<img src="img/img_description_vzla.png">
				</figure>
				<div class="descripcion">
					<h2 class="titulo_atributo_item">Los Bravos de Margarita</h2>
					<p class="subtitulo_atributo_item">Since 1991</p>
					<p class="resena_atributo_item">
						BRAVOS DE MARGARITA
						Una historia que nace en tierra firme y se consolida en la más hermosa isla del Caribe.
						Es el actual equipo de Beisbol autoctono del Estado Nueva Esparta que hace vida en la Liga Venezolana de Beisbol Profesional.
					</p>
				</div>
			</article>
			<article class="item_atributo">
				<figure class="imagen_atributo_item">
					<img src="img/img_description_vzla.png">
				</figure>
				<div class="descripcion">
					<h2 class="titulo_atributo_item">Los Bravos de Margarita</h2>
					<p class="subtitulo_atributo_item">Since 1991</p>
					<p class="resena_atributo_item">
						BRAVOS DE MARGARITA
						Una historia que nace en tierra firme y se consolida en la más hermosa isla del Caribe.
						Es el actual equipo de Beisbol autoctono del Estado Nueva Esparta que hace vida en la Liga Venezolana de Beisbol Profesional.
					</p>
				</div>
			</article>
		</section>
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