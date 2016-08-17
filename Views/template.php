<?php namespace Views;

    $template= new Template();
    
    class Template{
        public function __construct() {
            ?>
            <!DOCTYPE html>
 
            <html lang="es">

            <head>
            <title>Administración de Estudiantes</title>
            <meta charset="utf-8" />
            <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css" />
            <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css" />
            <link rel="shortcut icon" href="/favicon.ico" />
            </head>

            <body>
                <header>
                    <nav class="navbar navbar-inverse navbar-fixed-top">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#bs-example-nav">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Administración de Estudiantes</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo URL; ?>">Inicio</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo URL; ?>estudiantes">Listado</a></li>
                                            <li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones</a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo URL; ?>secciones">Listado</a></li>
                                            <li><a href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="facebook.com/eldelaguila77">Eldelaguila77</a></li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </header>
            
            <?php
        }
        
        public function __destruct() {
            ?>
                <footer class="navbar-fixed-buttom">
                    Creado por mi el 2016 | Eldelaguila77
                </footer>
                <script src="<?php echo URL; ?>Views/template/js/jquery-2.2.3.min.js"></script>
                <script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
            </body>
            </html>
            <?php
        }
    }
?>

