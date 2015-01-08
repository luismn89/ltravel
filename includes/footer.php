<?php
	require_once ('funciones.php');
?>
<footer>
	<figure class="logo_footer">
	<?php if ($nombre_archivo == 'index.php'){ ?>
		<img src="img/Logo.png">
	<?php } else { ?>
		<img src="../img/Logo.png">
	<?php } ?>
	</figure>
	<p class="derechos_autor"><strong>&copy; 2015 ltravel</strong><br><?php echo $pie_pagina; ?> <a href="https://twitter.com/luismn89" target="_blank">@luismn89</a></p>
	<ul id="redes_sociales">
	<?php if ($nombre_archivo == 'index.php'){ ?>
		<li><a href="https://www.facebook.com/PraiasDoCaribe" target="_blank"><img src="img/boton_facebook.png"></a></li>
		<li><a href="#" target="_blank"><img src="img/boton_instagram.png"></a></li>
	<?php } else { ?>
		<li><a href="https://www.facebook.com/PraiasDoCaribe" target="_blank"><img src="../img/boton_facebook.png"></a></li>
		<li><a href="#" target="_blank"><img src="../img/boton_instagram.png"></a></li>
	<?php } ?>
	</ul>
</footer>