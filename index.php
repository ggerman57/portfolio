<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>

<body id="inicio"> <!-- id es un identificador para usar en css-->
    <header class="container">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link px-3 active" href="index.php">Inicio</a> <!-- active muestra que es el boton seleccionado en el menu-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div>
                        <a href="files/CV ING GERMAN.pdf" class="btn btn-azul">Descargar mi CV <i
                                class="fas fa-download"></i></a> 
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mt-4 text-center mb-5">
                    <a href="proyectos.php"><img src="images/civil.png" class="ingcivil"></a>
                </div>
                <div class="col-sm-6 mt-4 text-center mb-5">
                    <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 text-center offset-sm-3">
                    <div>
                        <p class="shadow bienvenidos">Bienvenid@s a mi sitio web sobre Ingeniería civil y sistemas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.php" class="btn shadow">Conoce todos mis proyectos</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-3 col-sm-1 text-center text-sm-star">
                    <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                </div>
                <div class="col-3 col-sm-1 text-center text-sm-star">
                    <a href="https://www.linkedin.com/in/ggermangutierrez/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-3 text-center text-sm-star">
                    Directed <a href="https://germangutierrez.com.ar" target="_blank" title="GERMAN GUTIERREZ">Germán
                        Gutiérrez</a>
                </div>
                <div class="col-12 col-sm-3 text-center text-sm-star">
                    <a href="mailto:german.gutierrez57@yahoo.com">german.gutierrez57@yahoo.com</a>
                </div>
                <div class="fixed-bottom whatsapp">
                    <a href="https://api.whatsapp.com/send?phone=541150041988" title="Whatsapp"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>