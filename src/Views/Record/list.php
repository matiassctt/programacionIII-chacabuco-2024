<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Noticias</title>
  <link rel="stylesheet" href="/src/Views/Record/RecordStyles/styles.css">
</head>
<body>

  <header>
    <h1>Blog Noticias</h1>
    <nav class="menu-categorias">
      <?php foreach (["Tecnología", "Salud", "Viajes", "Deportes"] as $categoria) { ?>
        <a class="card-menu" href="#"><?php echo $categoria; ?></a>
      <?php } ?>
    </nav>
  </header>

  <main>
    <section class="noticia-principal">
      <h2>Noticia Principal</h2>
      <p>Esta es la noticia destacada del día, con información principal y relevante para los lectores.</p>
    </section>

    <section class="contenedor-noticias">
      <?php foreach ($data["records"] as $domain) { ?>
        <a class="card-noticia" href="/records/<?php echo $domain->id() ?>">
          <h3><?php echo $domain->user() ?></h3>
          <p>ID: <?php echo $domain->id() ?></p>
        </a>
      <?php } ?>
    </section>

  </main>

  <footer>
    <p>&copy; 2025 Blog Noticias. Todos los derechos reservados.</p>
  </footer>

</body>
</html>
