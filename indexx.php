<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css.css">
        <link rel="icon" href="logo.ico" type="image/png" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


        <title>Sistemas IDRA - Integrador</title>
    </head>

    <body>

        <div class="fondo">
            <div class="container-fluid">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!-- <h1 class="titulo">Sistema Integrador IDRA Capacitaciones</h1><br><br><br><br> -->
                                <center>
                                    <img class="logo2" src="Sin título-3 (1).png">
                                </center>
                                <br><br>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md">
                                <center>
                                    <div>
                                        <img class="icono" src="envios.jpg" width="100%" height="100%" alt="">
                                    </div>
                                </center>
                                <h1 class="subtitulo">Envios</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <a href="https://envios.idra.pe/formulario.php" target="_blank"><i class="fas fa-sign-out-alt"></i></a>
                                        </center>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md">
                                <center>
                                    <div>
                                        <img class="icono" src="ingresos.jpg" width="100%" height="100%" alt="">

                                    </div>
                                </center>
                                <h1 class="subtitulo">Egresos</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <i class="fas fa-sign-out-alt"></i>
                                        </center>

                                    </div>

                                </div>
                            </div>
                            <div class="col-sm">
                                <center>
                                    <div>
                                        <img class="icono" src="egresos.jpg" width="100%" height="60%" alt="">

                                    </div>
                                </center>
                                <h1 class="subtitulo">Ingresos</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <a href="https://idra.pe/flujo/users/ingreso/index.php" target="_blank"><i class="fas fa-sign-out-alt"></i></a>

                                        </center>

                                    </div>

                                </div>
                            </div>
                            <div class="col-sm">
                                <center>
                                    <div>
                                        <img class="icono" src="dash.jpg" width="100%" height="60%" alt="">

                                    </div>
                                </center>
                                <h1 class="subtitulo">Dashboard</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <a href="https://idra.pe/flujo/users/dashboard/index.php" target="_blank"><i class="fas fa-sign-out-alt"></i></a>

                                        </center>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <center>
                                    <div>
                                        <img class="icono" src="aula.jpg" width="100%" height="60%" alt="">

                                    </div>
                                </center>
                                <h1 class="subtitulo">Aula Virtual</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <a href="https://aula.idra.pe/login/index.php" target="_blank"><i class="fas fa-sign-out-alt"></i></a>

                                        </center>

                                    </div>

                                </div>
                            </div>
                            <div class="col-sm">
                                <center>
                                    <div>
                                        <img class="icono" src="inhouse.jpg" width="100%" height="60%" alt="">

                                    </div>
                                </center>
                                <h1 class="subtitulo">Aula Inhouse</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <a href="https://idra.pe/inhouse/login/index.php" target="_blank"><i class="fas fa-sign-out-alt"></i></a>

                                        </center>

                                    </div>

                                </div>
                            </div>
                            <div class="col-sm">
                                <center>
                                    <div>
                                        <img class="icono" src="certi.jpg" width="100%" height="60%" alt="">

                                    </div>
                                </center>
                                <h1 class="subtitulo">Certificados</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <a href="#" target="_blank"><i class="fas fa-sign-out-alt"></i></a>

                                        </center>

                                    </div>

                                </div>
                            </div>
                            <div class="col-sm">
                                <center>
                                    <div>
                                        <img class="icono" src="biblio.jpg" width="100%" height="60%" alt="">

                                    </div>
                                </center>
                                <h1 class="subtitulo">Biblioteca Virtual</h1>
                                <div class="row">
                                    <div class="col">
                                        <center class="subtitulo">
                                            <i class="fas fa-info-circle"></i>
                                            <i class="fas fa-file"></i>
                                            <a href="#" target="_blank"><i class="fas fa-sign-out-alt"></i></a>

                                        </center>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>



    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </html>