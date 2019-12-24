<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="css/infolibro.css">
        <link rel="stylesheet" type="text/css" href="css/contac.css">

        <title>MoBuc</title>

    </head>
    <body>
        <?php $isbn = $_POST['isbn'];?>
        <div class="ContenedorPrincipal">
            <header>
                <div class="logo">
                    <img src="img/ucol.png" alt="" width="250px"> 
                </div>
                <nav>
                    <a class="qi" href="MoBuc.html">Inicio</a>
                    <a class="qi" target="_blank" href="docs/Reglamento_de_la_Biblioteca.pdf">Reglamento</a>
                    <button class="qo" id="btn-abrir-popup">Contactanos</button>
                    <a class="qi" href="Acercade.html">Acerca de</a>
                </nav>
            </header>

            <div id="cont">
                <div id="informacionGeneral">
                    <form action="requestBook.php" method="post">
                        <input type="text" id="isbn" name="isbn" value="<?php echo $isbn ?>" hidden>
                        <div id="portada"></div>
                        <!--img src="img/libros/c.jpg" alt="Programacion"--> 
                        <button type="submit" id="reservar"><a>Reservar</a></button>
                    </form>
                </div>
                <div class="overlay" id="overlay">
                    <div class="popup" id="popup">
                        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                        <em><h2>CONTACTO</h2></em>
                        <em><h4>Rellenar los siguientes campos</h4></em>
                        <form class="formulario" id="contacto" action="php/enviarEmail.php" method="post">
                            <fieldset>
                                <label for="email">Email Ucol: </label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Ingresa correo ucol" autocomplete="off" required>
                                <br>

                                <label for="asunto">Asunto: </label>
                                <input class="form-control" type="text" id="asunto" name="asunto" placeholder="Ingresa asunto" autocomplete="off" required>
                                <br>

                                <textarea class="form-control" id="msg" name="msg" rows="15" cols="70" placeholder="Ingresa tus comentarios aqui" autocomplete="off" required></textarea>
                                <br>

                                <input class="Boton1" id="prestamo" type="submit" value="Enviar Mensaje">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div id="informacionDetallada">

                    <!--h1>El Lenguaje de Programacion C</h1-->
                    <h3>Sintesis</h3>
                    <!--p>El libro lenguaje de programacion C podras encontrar una gran diversidad de temas y/o contenido para mejorar tus habilidades de este lenguaje. Podras aprender desde 0; desde como ingresar datos hasta realizar funciones relacionadas con
                        el manejo de la memoria.</p-->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Detalles</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="title">
                                <th scope="row">Titulo</th>
                            </tr>
                            <tr id="autor">
                                <th scope="row">Autor</th>
                            </tr>
                            <!--tr id="isbn">
                                <th scope="row">ISBN</th>
                            </tr-->
                            <tr id="editorial">
                                <th scope="row">Editorial</th>
                            </tr>
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer>
                <div id="logos">
                    <a href="https://www.facebook.com/Biblioteca-de-Ciencias-del-Mar-160360921103339/"><img src="img/logos/fblogo.png" id="fb" alt=""></a>
                    <a href="http://127.0.0.1:5500/contactanos.html"><img src="img/logos/email.png" id="gmail" alt=""></a>
                </div>
                <div id="copyright">
                    &copy;Derechos Reservados 2018-2021 Universidad de Colima
                </div>
                <div id="mapsite">
                    <a href="#"><img src="img/logos/mapsite.png" id="ms" alt=""></a>
                </div>
            </footer>
        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/popup.js"></script>
    </body>
</html>