<?php

$pg = "contacto";

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
    <title>Contacto</title>
</head>

<body id="contacto">
    <header class="container">
        <?php include_once("menu.php"); ?>
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
        <?php include_once("footer.php"); ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>