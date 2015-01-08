<?php
	require_once ('funciones.php');
?>
<header>
	<figure id="logo_header">
	<?php if ($nombre_archivo == 'index.php'){ ?>
		<a href="./index.php"><img src="img/Logo.png"></a>
	<?php } else { ?>
		<a href="./index.php"><img src="../img/Logo.png"></a>
	<?php } ?>
	</figure>
	<div>
		<h1><?php echo '"'.$eslogan.'".'; ?></h1>
		<nav>
			<ul>
				<?php
					$nav = unserialize($navegacion);
					foreach ($nav as $pagina => $titulo) {
						echo '<li><a href="'.$pagina.'">'.$titulo.'</a></li>';
					}
				?>
			</ul>
		</nav>
	</div>
</header>
