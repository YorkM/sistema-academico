<?php

        $matricula="";
       
    if(isset($_POST['calcular'])){
        $matricula = $_POST['matricula'];
    }

    
    //echo gettype($matricula);

    settype($matricula, "integer");
    //var_dump($matricula);

    //echo gettype($matricula); 

    $descuento = $matricula * 10 / 100;
   // var_dump($descuento);

    $total = $matricula - $descuento;
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/misestilos.css">
    <title>Matricula</title>
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
        <h1 class="text-center mt-5">Liquidar Matricula</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="" method="post">
                    <input type="number" id="matricula" name="matricula" class="form-control border" placeholder="Ingrese el Valor del Programa"> 
                    <div>
                        <input type="submit" id="calcular" name="calcular" value="Calcular Matricula" class="calcular btn btn-warning btn-block">
                    </div> 
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="alert alert-dark bg-dark" role="alert">
                    <h5 class="alert"><?php echo "El Valor de la Matricula es.............$". $matricula ?></h5>
                    <h5 class="alert"><?php echo "El Descuento es................................$". $descuento ?></h5>
                    <h5 class="alert"><?php echo "El Total a Pagar es............................$". $total ?></h5>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>