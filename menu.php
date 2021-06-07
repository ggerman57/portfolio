<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 text-center">
                        <li class="nav-item">
                            <a class="nav-link px-3 <?php echo ($pg == "inicio")? "active" : "" ?> " href="index.php">Inicio</a> <!-- active muestra que es el boton seleccionado en el menu-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 <?php echo ($pg == "sobre-mi")? "active" : "" ?> " href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 <?php echo ($pg == "proyectos")? "active" : "" ?> " href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 <?php echo ($pg == "contacto")? "active" : "" ?> " href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div>
                        <a href="files/CV ING GERMAN.pdf" download="GermanGutierrez-CV" class="btn btn-azul">Descargar mi CV <i
                                class="fas fa-download"></i></a> 
                    </div>
                </div>
            </div>
        </nav>