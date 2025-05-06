<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detalle del Registro</title>
	<link rel="stylesheet" href="/src/Views/Record/RecordStyles/styles.css">
</head>
<body>

	<header>
		<h1>Detalle del Registro</h1>
	</header>

	<main class="detalle-contenido">
		<article class="noticia-detalle">

			<h2 class="titulo-noticia"><?php echo $data["record"]->user(); ?></h2>

			<?php if (!empty($data["record"]->id())) { ?>
				<img src="<?php echo $data["record"]->id(); ?>" alt="Imagen de la noticia" class="imagen-noticia">
			<?php } ?>

			<p><strong>ID:</strong> <?php echo $data["record"]->id(); ?></p>
			<p><strong>Categoría:</strong> <?php echo $data["record"]->categoria(); ?></p>
			<p class="descripcion-noticia"><?php echo $data["record"]->descripcion(); ?></p>

			<a class="boton-volver" href="/records">← Volver al listado</a>
		</article>
	</main>

	<footer>
		<p>&copy; 2025 Blog Noticias</p>
	</footer>

</body>
</html>
