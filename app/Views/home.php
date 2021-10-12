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
        <nav class="navbar navbar-expand-lg bg-dark mt-3 mb-3 border">
                <div class="container-fluid">
                    <img src="public/assets/images/libro.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    <a class="navbar-brand inicio" href="">INICIO</a>
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

               <!-- carrusel -->
               <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img src="https://st2.depositphotos.com/3662505/6878/i/600/depositphotos_68789187-stock-photo-students.jpg" height="400px" class="d-block w-100 border" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i2.wp.com/hipertextual.com/wp-content/uploads/2014/09/estudiantes-clase1024.jpg?fit=1024%2C682&ssl=1" height="400px" class="d-block w-100 border" alt="...">
                        </div>
                             <div class="carousel-item">
                        <img src="https://blogs.unitec.mx/content/dam/blogs/imagenes/corp_samara/tips-de-estudio-de-alumnos-de-ingenieria-para-estudiantes-de-ingenieria-1-compressor.jpg" height="400px"  class="d-block w-100 border" alt="...">
                        </div>
                    </div>
                </div>
                <!-- fin carrusel -->

                <!-- imagenes -->
                <!-- iterando las imagenes -->
                <?php
                    $images=array(
                    "imagen1"=>array("https://cdn.aarp.net/content/dam/aarp/politics/events-and-history/2016/07/1140-are-you-smarter-than-8th-grader-quiz-esp.imgcache.rev.web.900.513.jpg","Estudiantes"),
                    "imagen2"=>array("https://cdn.devocionalescristianos.org/wp-content/uploads/2009/07/1500-dinamicas-cristianas-grupo.jpg","Actividades Ludicas"),
                    "imagen3"=>array("https://www.elpais.com.co/files/article_main/uploads/2019/07/11/5d279b0f21422.jpeg","Cultura"),
                    "imagen4"=>array("https://www.lifeder.com/wp-content/uploads/2019/11/28682034472_9b8cd6e3fa_c-1.jpg","Deporte"),
                    "imagen5"=>array("https://www.masquerp.com/fabricaweb/wp-content/uploads//Esparcimiento-infantil.jpg","Esparcimiento"),
                    "imagen6"=>array("https://www.mintic.gov.co/portal/715/articles-4654_imagen_1.jpg","Tecnologia"));
                ?>

                <div class="row row-cols-4 gap-1 d-flex justify-content-around">
                          
                 <?php foreach($images as $image): ?>
                            <div class="card col my-3 carda">
                                <img src="<?php echo $image[0] ?>"class="card-img-top imagen" height="200px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title h"><?php echo $image[1]?></h5>
                                </div>
                            </div>   
                <?php endforeach ?>
            </div>
            <!-- fin imagenes -->

            <!-- texto video -->
            
        <div class="row mt-3">
            <div class="col-5"><iframe class="border" width="500" height="450" src="https://www.youtube.com/embed/jMzx-LIEFZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-7 texto">
                <h2>!!!Estudiante no te rindas ahora¡¡¡</h2>
                <P>
                    Selectividad, exámenes de instituto o de la carrera... los estudiantes afrontan una temporada complicada pero uno de ellos ha conseguido redactar un texto motivacional que corre como la pólvora y los está cargando las pilas. 

                    Perder la motivación después de toda una trayectoria de duro trabajo, sacrificio o estudio y, especialmente, cuando el final está tan cerca pero a la vez tan lejos, es el pan de cada día de millones de estudiantes de todo el mundo.

                    

                    El hecho de dedicar gran parte de nuestro día a día a prepararnos para enfrentar una oposición, un examen de fin de carrera, de acceso a la universidad o de fin de proyecto, hacen que acciones tan cotidianas como salir a dar un paseo, charlar con los amigos o disfrutar con la familia se conviertan en preciados bienes de lujo; mientras que la motivación va mermando poco a poco, cada día, y el mal humor, la angustia, el estrés se apoderan de nosotros.

                    

                    Esto es, en esencia, lo que el autor detrás de la página de Facebook 'Dinamita en los ojos' quiso transmitir con uno de los textos motivacionales que mayor éxito están teniendo estos días en Facebook desde que se compartiera en la red social el pasado viernes.
                </P>
            </div>
        </div>

         <!-- fin texto video -->
  
    </div>
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>