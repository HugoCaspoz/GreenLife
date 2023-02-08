<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/css/logincss.css" rel="stylesheet"  type="text/css">

</head>
<body>

    <div class="logo me-auto">
      <a href="../index.php"><img src="../assets/img/greenlife.png" alt="" class="img-fluid"></a>
    </div>
    <center>
</br></br></br></br></br>
    <h3 class="card-title">Iniciar Sesión</h3> 
    </br>                  
    <form action="../index.php" method="post" id='formulario'>
                            
        <label for="user" class="user">Usuario: </label>
        <input type="text" class="form-control" id="user" name="user" placeholder="Nombre de usuario"/>
        </br>
        <label for="pass" class="">Contraseña: </label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña"/>
        </br>        
        <input type="submit" class="btn btn-success" value="Iniciar Sesión" id="iniciar-sesion" name="iniciar-sesion" />
        <input type="reset" class="btn btn-danger"  value="Cancelar" id="cancelar" name="cancelar" />
     
    </form>
    </center>
    
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/login.js"></script>

</body>
</html>