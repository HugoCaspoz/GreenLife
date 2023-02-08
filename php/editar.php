<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="../assets/css/register.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/registrocss.css" rel="stylesheet">
</head>
<body>

    <div class="logo me-auto">
      <a href="../index.php"><img src="../assets/img/greenlife.png" alt="" class="img-fluid"></a>
    </div>
    <center>
    </br></br></br></br>
    <h3 class="card-title">Editar Perfil</h3> 
    </br>                  
    <form action="../index.php" method="post">
        <label for="fullname" class="form-label">Nombre y Apellidos: </label>
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre y Apellidos"/>
        </br> 
        <label for="user" class="form-label">Nombre de Usuario: </label>
        <input type="text" class="form-control" id="user" name="user" placeholder="Nombre Usuario"/>
        </br>                   
        <label for="email" class="form-label">Correo Electrónico: </label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electrónico"/>
        </br>
        <label for="pass" class="form-label">Contraseña: </label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña"/>
        </br> 
        <label for="weight" class="form-label">Peso: </label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="$peso" min="30" max="200"/>
        </br>
        <label for="birthday" class="form-label">Fecha de Nacimiento: </label>
        <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Fecha nacimiento"/>
        </br>   
        <label for="height" class="form-label">Estatura en cm: </label>
        <input type="number" class="form-control" id="height" name="height" placeholder="$estatura" min="80" max="250"/>
        </br>

        <label for="activities" class="form-label">Actividades favoritas: </label>
        <select name='activities' class='form-select' id='activities'>
            <option value='Correr'>Correr</option>
            <option value='Senderismo'>Senderismo</option>
            <option value='Bicicleta montaña'>Bicicleta montaña</option>
            <option value='Bicicleta carretera'>Bicicleta carretera</option>
            <option value='Mochilear'>Mochilear</option>
            <option value='Otros'>Otros</option>
        </select>
        </br>
        <input type="submit" class="btn btn-success" value="Guardar" id="guardar" name="guardar" />
        <input type="reset" class="btn btn-danger"  value="Cancelar" id="cancelar" name="cancelar" />
        </br></br>
    </form>
    </center>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/editar.js"></script>

</body>
</html>