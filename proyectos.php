<?php

$pg = "proyectos";

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
    <title>Mis Proyectos</title>
</head>

<body id="proyectos">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-4">
                <h1>Mis Proyectos</h1>
            </div>
            <div class="row">
                <div class="col-12 mt-4 mb-4">
                    <p class="shadow bg-white p-2">Los siguientes son algunos de los trabajos que he realizado:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-12 p-3">
                    <div class="row border card mt-3">
                        <img src="images/abmclientes.png" alt="" class="img-fluid px-0">
                        <div class="col-12 color-gradiente px-0 pt-2">
                            <h2>ABM CLIENTES</h2>
                        </div>
                        <div class="col-12 pt-3 ps-3">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore ut, eum dolores quidem
                                ipsa laborum eius error, atque ullam animi quibusdam perferendis eaque architecto, vitae
                                doloremque! Tempora ratione aperiam commodi?</p>
                        </div>
                        <div class="row  pb-4 ps-5">
                            <div class="col-6">
                                <a href="https://www.linkedin.com/in/ggermangutierrez/" class="btn"> Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://www.linkedin.com/in/ggermangutierrez/" class="link-azul">Codigo
                                    Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-3">
                    <div class="row border card mt-3">
                        <img src="images/abmventas.png" alt="" class="img-fluid px-0">
                        <div class="col-12 color-gradiente px-0 pt-2">
                            <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                        </div>
                        <div class="col-12 pt-3 ps-3">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia repellat, sequi
                                tempore illo earum dolores dignissimos labore cumque beatae enim hic nihil voluptatem
                                veniam eius libero optio consequuntur doloremque rem!</p>
                        </div>
                        <div class="row  pb-4 ps-5">
                            <div class="col-6">
                                <a href="https://www.linkedin.com/in/ggermangutierrez/" class="btn">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://www.linkedin.com/in/ggermangutierrez/" class="link-azul">Codigo
                                    Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-3">
                    <div class="row border card mt-3">
                        <img src="images/sistema-admin.png" alt="" class="img-fluid px-0">
                        <div class="col-12 color-gradiente px-0 pt-2">
                            <h2>PROYECTO INTEGRADOR</h2>
                        </div>
                        <div class="col-12 pt-3 ps-3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempora similique, incidunt
                                excepturi ut minus dicta in eius, quidem illum id laboriosam unde recusandae a delectus
                                et assumenda nemo ipsum!</p>
                        </div>
                        <div class="row pb-4 ps-5">
                            <div class="col-6">
                                <a href="https://www.linkedin.com/in/ggermangutierrez/" class="btn">Ver online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://www.linkedin.com/in/ggermangutierrez/" class="link-azul">Codigo
                                    Fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
        <?php include_once("footer.php"); ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>