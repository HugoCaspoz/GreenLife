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
  <link href="assets/css/rutas.css" rel="stylesheet">

  <!-- <style>
   
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    body {
      margin: 30px;
    }

    h1 {
      font-size: 2em;
    }

    label {
      font-size: 18px;
    }


    /*** custom checkboxes ***/

    input[type=checkbox] {
      display: none;
    }

    /* to hide the checkbox itself */
    input[type=checkbox]+label:before {
      font-family: FontAwesome;
      display: inline-block;
    }

    input[type=checkbox]+label:before {
      content: "\f096";
    }

    /* space between checkbox and label */

    input[type=checkbox]:checked+label:before {
      content: "\f046";
    }
  
  </style>  -->
    <style>
      table{
        border: 2px solid black;
        align-items: center;
      }

    </style>
  <!-- Header -->
  <?php
  include('encabezados/header.php')
  ?>

<body>
  </br></br></br></br>
  <center>
    <div class="input-group">
      <input type="search" class="form-control rounded" placeholder="Nombre de la ruta..." aria-label="Search" aria-describedby="search-addon" id="buscarNombreboton" />
      <button type="button" class="btn btn-outline-success">Buscar</button>
    </br>
    </div>
    </br></br>
    <div class="container">
      <div class="row">
        <div class="input-group mb-3 input-group-sm col">
          <span class="input-group-text">Distancia Mínima</span>
          <input type="number" class="form-control" id="distanciaMinima">
          <button type="button" class="btn btn-outline-success" id="distanciaMinimaboton">Buscar</button>
        </div>
        <div class="input-group mb-3 input-group-sm col">
          <span class="input-group-text">Distancia Máxima</span>
          <input type="number" class="form-control" id="distanciaMaxima" >
          <button type="button" class="btn btn-outline-success" id="distanciaMaximaboton">Buscar</button>
        </div>
        
        
      </div>
    </div>
  </center>
  </br>
  <!-- <div class="container">
    <div class="row">

      <div class="col-lg-3">
        <h1>Ciudades:</h1>
        <input id="madrid" type="checkbox" />
        <label for="madrid">Madrid</label></br>
        <input id="barcelona" type="checkbox" />
        <label for="barcelona">Barcelona</label></br>
        <input id="Sevilla" type="checkbox" />
        <label for="Sevilla">Sevilla</label></br>
        <input id="malaga" type="checkbox" />
        <label for="malaga">Málaga</label></br>
        <input id="Coruña" type="checkbox" />
        <label for="Coruña">Coruña</label></br>
      </div>

      <div class="col-lg-3">
        <h1>Actividades:</h1>
        <input id="senderismo" type="checkbox" />
        <label for="senderismo">Senderismo</label></br>
        <input id="correr" type="checkbox" />
        <label for="correr">Correr</label></br>
        <input id="bicicleta-montaña" type="checkbox" />
        <label for="bicicleta-montaña">Bicicleta Montaña</label></br>
        <input id="bicicleta-carretera" type="checkbox" />
        <label for="bicicleta-carretera">Bicicleta Carretera</label></br>
      </div>

      <div class="col-lg-3">
        <h1>Dificultad:</h1>
        <input id="facil" type="checkbox" />
        <label for="facil">Facil</label></br>
        <input id="moderada" type="checkbox" />
        <label for="moderada">Moderado</label></br>
        <input id="dificil" type="checkbox" />
        <label for="dificil">Dificil</label></br>
        <input id="extremo" type="checkbox" />
        <label for="extremo">Extremo</label></br>
      </div>

    </div>
  </div> -->


  <div id='rutas'></div>



</body>

<!-- Footer -->
<?php
include('encabezados/footer.php')
?>

<!-- JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/rutas.js"></script>


</html>