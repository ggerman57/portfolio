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
    <title>Contacto</title>
</head>

<body id="contacto">
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
                            <a class="nav-link px-3" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-3" href="contacto.php">Contacto</a>
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
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-4">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p class="shadow bg-white p-2">Te invito a que te contactes enviándome un mensaje o via whatsapp.</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="POST">
                    <div class="mb-3 mt-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadows border-white">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadows border-white">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono/Whatsapp" placeholder="Teléfono/Whatsapp"
                            class="form-control shadows border-white">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <button id="btnEnviar" name="btnEnviar" class="btn px-4">
                            ENVIAR
                        </button>
                    </div>
                </form>
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
                    Directed <a href="https://germangutierrez.com.ar" target="_blank" title="GERMAN GUTIERREZ">German
                        Gutierrez</a>
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