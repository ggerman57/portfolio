<?php

$pg = "inicio";

?>

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
        <?php include_once("menu.php"); ?>
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
        <?php include_once("footer.php"); ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>