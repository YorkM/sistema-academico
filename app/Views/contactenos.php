<?php

        $nombre="";
        $correo="";
        $comentario="";

    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $comentario = $_POST['comi'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/misestilos.css">
    <title>Contactenos</title>
</head>
<body>
    <div class="container">
            <!-- barra navegacion -->
         <nav class="navbar navbar-expand-lg  bg-dark mt-3 mb-3 border">
                <div class="container-fluid">
                    <img src="../public/assets/images/libro.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    <a class="navbar-brand inicio" href="../Home/">INICIO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link ancla active" aria-current="page" href="#">Somos</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link ancla" href="#">Estudiantes</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link ancla" href="#">Docentes</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link ancla" href="#">Matriculas</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link ancla" href="#">Eventos</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link ancla" href="<?php base_url() ?>contactenos">Contactenos<a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
        <!-- barra navegacion -->

        <!-- banner -->
        <div id="img border">
            <img src="../public/assets/images/banner.png" class="img border" alt="">
        </div>
        <!-- banner -->

         <!-- formulario -->
        <div class="row  justify-content-center mt-2">
            <div class="col-md-7">
                <form action="" method="post">
                    <div class="mb-2">
                        <input type="text" id="nombre" name="nombre" class="form-control border" placeholder="Nombre"> 
                    </div>
                    <div class="mb-2">
                        <input type="text" id="correo" name="correo" class="form-control border" placeholder="Correo Electronico">  
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="comi" name="comi"></textarea>
                        <label for="floatingTextarea">Comentarios</label>
                    </div>  
                    <div>
                        <input type="submit" id="enviar" name="enviar" value="ENVIAR" class="enviar btn btn-warning btn-block">
                    </div> 
                </form>  
             </div>
        </div>
      
      <?php
          /*  echo "nombre ". $nombre;
            echo "<br/>";
            echo "correo ". $correo;
            echo "<br/>";
            echo "comentario ". $comentario;*/
       ?>
        <!-- formulario -->
    </div>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>