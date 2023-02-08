<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GreenLife</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- Header -->
  <?php
  include('encabezados/header.php')
  ?>

  <!-- Hero Section -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Bienvenido a <span>GreenLife</span></h1>
      <h2>Disfruta de las mejores rutas del mundo</h2>
      <a href="#rutas" class="btn-get-started scrollto">Rutas</a>
    </div>
  </section>

  <main id="main">
    <!-- Sección Ciudades -->
    <section id="ciudades" class="ciudades section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Ciudades</h2>
          <p>¿Qué ciudad te gustaría descubrir hoy?</p>
        </div>

        <div class="ciudades-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <!-- Ciudad -->
            <div class="swiper-slide">
              <div class="ciudad-item">
                <img src="assets/img/ciudades/barcelona.jpg" class="ciudad-img" alt="">
                <a href="barcelona.php">
                  <h3>Barcelona</h3>
                </a>
                <p>En cuanto a la comida, te costará encontrar algún lugar mejor que Barcelona: es un hub</p>
              </div>
            </div>

            <!-- Ciudad -->
            <div class="swiper-slide">
              <div class="ciudad-item">
                <img src="assets/img/ciudades/madrid.jpg" class="ciudad-img" alt="">
                <a href="madrid.php">
                  <h3>Madrid</h3>
                </a>
                <p>Desde la cuna a Madrid, y desde Madrid al Cielo</p>
              </div>
            </div>

            <!-- Ciudad -->
            <div class="swiper-slide">
              <div class="ciudad-item">
                <img src="assets/img/ciudades/sevilla.jpg" class="ciudad-img" alt="">
                <a href="sevilla.php">
                  <h3>Sevilla</h3>
                </a>
                <p>Lo malo no es que los sevillanos piensen que tienen la ciudad más bonita del mundo...Lo peor es que pueda que tengan razón.</p>
              </div>
            </div>

            <!-- Ciudad -->
            <div class="swiper-slide">
              <div class="ciudad-item">
                <img src="assets/img/ciudades/malaga.jpg" class="ciudad-img" alt="">
                <a href="malaga.php">
                  <h3>Málaga</h3>
                </a>
                <p>Málaga se ha ganado el cariño tanto de sus residentes como de sus visitantes, gracias a sus calles blancas, sus amplias playas y su gente alegre.</p>
              </div>
            </div>

            <!-- Ciudad -->
            <div class="swiper-slide">
              <div class="ciudad-item">
                <img src="assets/img/ciudades/coruña.jpg" class="ciudad-img" alt="">
                <a href="coruna.php">
                  <h3>Coruna</h3>
                </a>
                <p>"Vivir na Coruña que bonito é, andar de parranda e dormir de pé"</p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <!-- Sección Actividades  -->
    <section id="actividades" class="actividades">
      <div class="container">

        <div class="section-title">
          <h2>Actividades</h2>
          <p>Busqueda por actividades</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="actividad">
              <img src="assets/img/actividades/correr.jpg" alt="">
              <a href="correr.html">
                <h4>Correr</h4>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="actividad">
              <img src="assets/img/actividades/senderismo.jpg" alt="">
              <a href="senderismo.html">
                <h4>Senderismo</h4>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="actividad">
              <img src="assets/img/actividades/bicicleta montaña.jpg" alt="">
              <a href="bicicleta.html">
                <h4>Bicicleta</h4>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php
  include('encabezados/footer.php')
  ?>

  <!-- JS -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>