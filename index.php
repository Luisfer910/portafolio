<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Portafolio</title>
</head>
<body>
    <section class="nav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#">Luis Meneses</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#portafolio">Portafolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#acerca-de">Acerca de Mí</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#contacto">Contacto</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <section class="encabezado">
        <div class="encabezado-card">
            <img class="img-card" src="img/istockphoto-1142192548-612x612.jpg" alt="...">
            <div>
              <h1>Luis Meneses</h1>
              <p>Desarrollador Web.</p>
            </div>
        </div>
    </section>
  
    <?php include 'portafolio.php'; ?> <!-- Incluye la sección de portafolio desde un archivo externo para mejorar la organización del código.-->

    <section class="acerca-de" id="acerca-de">
        <h2 class="titulo">Acerca De Mí</h2>
          <hr class="hr">
        <div class="container">
          <p class="lead text-muted">
          "Soy un desarrollador web con más de 5 años de experiencia creando interfaces intuitivas y atractivas para aplicaciones móviles y sitios web. He trabajado en equipos multidisciplinarios para desarrollar soluciones digitales innovadoras que mejoran la experiencia del usuario."</p>
      </div>
    </section>

    <?php include 'contacto.php'; ?> <!-- Incluye la sección de contacto desde un archivo externo para mantener el archivo principal más limpio.-->

    <section class="Footer" id="Footer">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 ">
                <h5>Dirección</h5>
                <p>av. de Mayo 255</p>
                <p class="parrafo">C1084AAA CABA</p>
              </div>
              <div class="col-sm-6">
                <h5>En las Redes Sociales</h5>
                <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://x.com" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.youtube.com" target="_blank"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="final">
            <div class="row">
              <div class="col-sm-12">
                <h6>Copyright 2025</h6>
              </div>
            </div>
          </div>
    </section>
    
    <script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>