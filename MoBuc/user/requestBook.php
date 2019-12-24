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
    <link rel="stylesheet" href="css/requestBook.css">
    <link rel="stylesheet" type="text/css" href="css/contac.css">
    <title>MoBuc</title>
</head>

<body>
    <div class="ContenedorPrincipal">
        <?php $isbn = $_POST['isbn'];?>
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
        <div class="cont">
            <div class="formulario">
                <h2>Datos de Pedido</h2>
                <h4>Ingresa los siguientes datos.</h4>
                <form action="php/confirmarCorreo.php" class="enviar" method="post" autocomplete="off">
                    <div class="data">
                        <label for="nombre">Nombre(s):</label>
                        <div class="barra">
                            <input class="form-control" type="text" name="nombres" id="nombre" placeholder="Ingresa Nombre(s)" required>
                        </div>
                    </div>
                    <div class="data">
                        <label for="paterno">Apellido Paterno:</label>
                        <div class="barra">
                            <input class="form-control" type="text" name="aPaterno" id="paterno" placeholder="Ingresa Apellido Paterno" required>
                        </div>
                    </div>
                    <div class="data">
                        <label for="materno">Aperllido Materno:</label>
                        <div class="barra">
                            <input class="form-control" type="text" name="aMaterno" id="materno" placeholder="Ingresa Apellido Materno" required>
                        </div>
                    </div>
                    <div class="data">
                        <label for="email">Correo Ucol:</label>
                        <div class="barra">
                            <input class="form-control" type="email" name="emailUcol" id="email" placeholder="Ingresa Correo Ucol" required>
                        </div>
                    </div>
                    <div class="data">
                        <label for="cuenta">No. Cuenta:</label>
                        <div class="barra">
                            <input class="form-control" type="number" name="noCuenta" id="cuenta" placeholder="Ingresa no.cuenta" required>
                        </div>
                    </div>
                    <div class="data">
                        <label for="fechaSolicitud">Fecha de Solicitud: </label>
                        <div class="barra">
                            <input class="form-control" type="date" name="date" id="fechaSolicitud" required>
                        </div>
                    </div>
                    <input class="Boton1" id="prestamo" type="submit" value="Solicitar Libro">
                    <input type="text" id="isbn" name="isbn" value='<?php echo $isbn ?>' hidden>
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
            <div id="vl">
            </div>
            <div id="inflibro">
                <h2>Informacion del Libro</h2>
                <div id="inflibro1">
                    <div id="portadaLibro">
                        <!--img src="img/libros/c.jpg" alt="Programacion"-->
                    </div>
                    <div id="infopedido">
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
                                    <!--td>El Lenguaje de Programacion C</td-->
                                </tr>
                                <tr id="autor">
                                    <th scope="row">Autor</th>
                                    <!--td>Brian W. Kernighan</td-->
                                </tr>
                                <!--tr>
                                    <th scope="row">Clasificacion</th>
                                    <td>QA76.73.C3 K4718 1991</td>
                                </tr-->
                                <tr id="editorial">
                                    <th scope="row">Editorial</th>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <div class="contenido">
            <div class="sideLeft">
                <h3 style="text-align: center">Datos de Pedido</h3>
                <hr>
                <form action="messageRequest.html" id="formulario" autocomplete="off">
                    <fieldset>
                        <legend style="text-align: center">Ingrese los siguientes datos.</legend>

                        <label for="nombre">Nombre(s): </label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        <input type="text" name="nombres" id="nombre" placeholder="&nbsp;Ingresa nombre(s)" required> <br>

                        <label for="paterno">Apellido Paterno: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="aPaterno" id="paterno" placeholder="&nbsp;Ingresa apellido paterno" required> <br>

                        <label for="materno">Apellido Materno: </label> &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="aMaterno" id="materno" placeholder="&nbsp;Ingresa apellido materno" required> <br>

                        <label for="email">Correo Ucol: </label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                        <input type="email" name="emailUcol" id="email" placeholder="&nbsp;Ingresa correo ucol" required> <br>

                        <label for="cuenta">No. Cuenta:</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                        <input type="number" name="noCuenta" id="cuenta" placeholder="&nbsp;Ingresa no.cuenta" required> <br>

                        <label for="fechaSolicitud">Fecha de Solicitud: </label> &nbsp;&nbsp;
                        <input type="date" name="date" id="fechaSolicitud" required><br>

                        <input id="prestamo" type="submit" value="Solicitar Libro">
                    </fieldset>
                </form>
            </div>

            <div class="vl"></div>
            <div class="sideRight">
                <h3 style="text-align:center">Informacion del Libro</h3>
                <hr>

                <img src="img/libros/c.jpg" alt="Imagen del libro"> <br>

                <div class="informacionLibro">
                    <label for="" class="texto">Nombre de material: </label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                    <label for="" class="datos">Lorem ipsum dolor sit amet. </label> <br>

                    <label for="" class="texto">Autor de material: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                    <label for="" class="datos">Lorem ipsum dolor sit amet. </label> <br>

                    <label for="" class="texto">Año de publicacion: </label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="" class="datos">Lorem ipsum dolor sit amet. </label> <br>

                    <label for="" class="texto">Tematica de material: </label> &nbsp;&nbsp;&nbsp;
                    <label for="" class="datos">Lorem ipsum dolor sit amet. </label> <br>

                    <label for="" class="texto">Editorial de material: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="" class="datos">Lorem ipsum dolor sit amet. </label> <br>

                    <label for="" class="texto">Codigo de material: </label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="" class="datos">Lorem ipsum dolor sit amet. </label> <br>
                </div>
            </div>
        </div>
    -->
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
    <script src="js/popup.js"></script>
    <script src="js/main1.js"></script>
</body>

</html>