<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url() ?>public/assets/css/misestilos.css">
    <title>Contactenos</title>
</head>
<body>
    <div class="container">
            <!-- barra navegacion -->
         <nav class="navbar navbar-expand-lg  bg-dark mt-3 mb-3 border">
                <div class="container-fluid">
                    <img src="public/assets/images/libro.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    <a class="navbar-brand inicio" href="<?php base_url() ?>Home">INICIO</a>
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
                                 <a class="nav-link ancla" href="<?php base_url() ?>Home/contactenos">Contactenos<a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
        <!-- barra navegacion -->

         <!-- formulario -->
        <div class="row  justify-content-center">
            <div class="col-md-5">
                <div class="mb-2">
                     <input type="text" id="" class="form-control" placeholder="Nombre"> 
                </div>
                <div class="mb-2">
                     <input type="text" id="" class="form-control" placeholder="Correo Electronico">  
                </div>
                 <div class="form-floating">
                     <textarea class="form-control" id=""></textarea>
                     <label for="floatingTextarea">Comentarios</label>
                </div>     
            </div>
        </div>
       
        <!-- formulario -->
    </div>
   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>