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
            <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/icon.css" />
            <link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/materialize.css" />
            <link rel="shortcut icon" href="/favicon.ico" />
            <script src="<?php echo URL; ?>Views/template/js/js/jquery-3.1.0.min.js"></script>
            <script src="<?php echo URL; ?>Views/template/js/materialize.js"></script>
            <style>
                body {
                    display: flex;
                    min-height: 100vh;
                    flex-direction: column;
                  }

                  main {
                    flex: 1 0 auto;
                  }
            </style>
            </head>

            <body>
                <header>
                    <ul id="dropdown1" class="dropdown-content">
                      <li><a class="btn-floating red" href="#!"><i class="material-icons">insert_chart</i></a></li>
                      <li><a class="btn-floating red" href="#!"><i class="material-icons">insert_chart</i></a></li>
                      <li><a class="btn-floating red" href="#!"><i class="material-icons">insert_chart</i></a></li>
                    </ul>
                    <nav>
                        <div class="nav-wrapper">
                            <a href="#!" class="brand-logo"><i class="material-icons">polymer</i>Getta Framework</a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="https://www.facebook.com/eldelaguila77"><i class="material-icons left">perm_identity</i>Eldelaguila77</a></li>
                            </ul>
                        </div>
                      </nav>
                </header>
            
            <?php
        }
        
        public function __destruct() {
            ?>
                <footer class="page-footer">

                  <div class="footer-copyright">
                    <div class="container">
                    © 2016 Copyright Getta Framework
                    <a class="grey-text text-lighten-4 right" href="https://github.com/eldelaguila77/gettaframework">Project in GitHub</a>
                    </div>
                    </div>
                </footer>
            </body>
            </html>
            <?php
        }
    }
?>

