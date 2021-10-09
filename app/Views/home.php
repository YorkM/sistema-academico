<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php base_url() ?>public/assets/css/misestilos.css">
    <title>Home</title>
</head>
<body>
      <div class="container">

        <!-- barra navegacion -->
        <nav class="navbar navbar-expand-lg  bg-dark mt-3 mb-3">
                <div class="container-fluid">
                    <img src="public/assets/images/libro.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    <a class="navbar-brand inicio" href="#">INICIO</a>
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
                        </ul>
                    </div>
                </div>
        </nav>

               <!-- barra navegacion -->

               <!-- carrusel -->
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://st2.depositphotos.com/3662505/6878/i/600/depositphotos_68789187-stock-photo-students.jpg" height="400px" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i2.wp.com/hipertextual.com/wp-content/uploads/2014/09/estudiantes-clase1024.jpg?fit=1024%2C682&ssl=1" height="400px" class="d-block w-100" alt="...">
                        </div>
                             <div class="carousel-item">
                        <img src="https://blogs.unitec.mx/content/dam/blogs/imagenes/corp_samara/tips-de-estudio-de-alumnos-de-ingenieria-para-estudiantes-de-ingenieria-1-compressor.jpg" height="400px"  class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <!-- fin carrusel -->

                <!-- imagenes -->
                <div class="row row-cols-4 gap-1 d-flex justify-content-around">
                <?php 
           
                for($i = 0; $i < 6; $i++){?>
                            <div class="card col my-3 carda">
                                <img src="https://cdn.aarp.net/content/dam/aarp/politics/events-and-history/2016/07/1140-are-you-smarter-than-8th-grader-quiz-esp.imgcache.rev.web.900.513.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Estudiate</h5>
                                </div>
                            </div>   
                <?php } ?>
            </div>
            <!-- fin imagenes -->

            <!-- texto imagen -->
            
        <div class="row">
            <div class="col-6"><iframe width="560" height="315" src="https://www.youtube.com/embed/jMzx-LIEFZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-6">
                <P>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga provident eum nemo quisquam. Tempora fuga excepturi maxime, debitis ad doloremque cum reprehenderit officia ducimus illo odit assumenda laudantium, vero magnam!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, ratione? Omnis quidem ducimus necessitatibus recusandae molestias, a quis quaerat non fuga mollitia obcaecati voluptate eaque aut magnam quia impedit consequuntur!
                </P>
            </div>
        </div>

         <!-- fin texto imagen -->
  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>