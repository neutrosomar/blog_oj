<?php
$nombre = "Omar Lozano";
$edad = 25;
$ciudad = "Chimbote";
$carrera = "Ingeniería de Sistemas e Informática";
$universidad = "Universidad Nacional del Santa";
$platillo = "Cebiche";
$hobby = "Ajedrez";
$anio = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $nombre; ?> - Blog personal</title>
  <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

  <header>
    <h1><?php echo $nombre; ?></h1>
    <p><?php echo $ciudad; ?> · Perú</p>
  </header>

  <nav>
    <a href="#sobre-mi">Sobre mí</a>
    <a href="#estudios">Estudios</a>
    <a href="#pasiones">Pasiones</a>
  </nav>

  <main>

    <section id="sobre-mi">
      <h2>Sobre mí</h2>
      <img src="assets/perfil.jpg" alt="Foto de <?php echo $nombre; ?>" class="foto">
      <p>Hola, soy <strong><?php echo $nombre; ?></strong>.</p>
      <p>Tengo <?php echo $edad; ?> años y soy de <?php echo $ciudad; ?>.</p>
      <p>Este es mi blog personal.</p>

      <ul class="datos">
        <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
        <li><strong>Edad:</strong> <?php echo $edad; ?> años</li>
        <li><strong>Ciudad:</strong> <?php echo $ciudad; ?></li>
        <li><strong>Universidad:</strong> <?php echo $universidad; ?></li>
      </ul>
    </section>

    <section id="estudios">
      <h2>Estudios</h2>
      <p>Estudio la carrera de <strong><?php echo $carrera; ?></strong>.</p>
      <p>Estudio en la <strong><?php echo $universidad; ?></strong> (UNS).</p>
    </section>

    <section id="pasiones">
      <h2>Pasiones</h2>
      <p><strong>Platillo favorito:</strong> <?php echo $platillo; ?></p>
      <p>Me gusta el cebiche porque es fresco y tiene el sabor del mar de mi ciudad.</p>
      <p><strong>Hobby:</strong> <?php echo $hobby; ?></p>
      <p>Me gusta jugar ajedrez porque enseña estrategia y paciencia.</p>
    </section>

  </main>

  <footer>
    <p>&copy; <?php echo $anio; ?> <?php echo $nombre; ?> · Blog personal</p>
    <p><?php echo $universidad; ?></p>
  </footer>

</body>
</html>
