<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<title>.:: Ltravel ::.</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<script src="../js/prefixfree.js"></script>
</head>
<body>
	<?php include("header.php"); ?>
	<section class="contenido contenido_acercade">
		<figure>
		<?php if ($nombre_archivo == 'index.php'){ ?>
			<img src="img/Turismo-en-Venezuela.png">
		<?php } else { ?>
			<img src="../img/Turismo-en-Venezuela.png">
		<?php } ?>
		</figure>
		<p>
			<?php echo $acercade; ?>
		</p>
	</section>
	<?php include("footer.php"); ?>
</body>
</html>