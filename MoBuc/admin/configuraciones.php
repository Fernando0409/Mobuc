<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--Estilos de Fuentes--->
        <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/contac.css">
        <link rel="stylesheet" href="css/style_admin.css">

        <script type="text/javascript" src="js/main.js"></script>
        <title>Mobuc - Administrador</title>
    </head>
    <body>
        <div class="ContenedorPrincipal">
            <header>
                <div class="logo">
                    <img src="img/ucol.png" alt="" width="250px">
                </div>
                <nav>
                    <a class="qi" href="index.php">Inicio</a>
                    <a class="qi" href="reservaciones.php">Reservaciones</a>
                    <!--a class="qi" href="renovaciones.php">Renovaciones</a-->
                    <a class="qi" href="configuraciones.php">Configuraciones</a>
                </nav>
            </header>

            <!-- Aqui ira la informacion del administrador-->
            <div class="contenidoPrincipal">
                <div class="operaciones">
                    
                    <br>
                    <h3>Agregar administrador</h3>
                    <div class="Form" id="agregar">
                        <form action="php/add_admin.php" method="post">
                            <label for="name_add">Nombre de nuevo administrador: </label>
                            <input type="text" name="name_add" id="name_add" placeholder="Ingresa nombre " required>
                            <br>
                            <label for="last_name">Apellido de nuevo Administrador: </label>
                            <input type="text" name="last_name" id="last_name" placeholder="Ingresa apellidos" required>
                            <br>
                            <label for="email">Correo electronico: </label>
                            <input type="email" name="email_add" id="email" placeholder="Ingresa correo electronico" required>
                            <br>
                            
                            <label for="pass_m1">Contraseña master: </label>
                            <input type="password" name="pass_m1" id="pass_m1" placeholder="Contraseña master administrador" required>
                            <br>
                            <button type="submit">Agregar Administrador</button>
                        </form>
                    </div>
                    
                    <br>
                    <h3>Eliminar administrador</h3>
                    <div class="Form" id="eliminar">
                        <form action="php/del_admin.php" method="post">
                            <label for="email_del">Correo electronico: </label>
                            <input type="email" name="email_del" id="email_del" placeholder="Ingresa correo electronico" required>
                            <br>
                            <label for="pass_m2">Contraseña master: </label>
                            <input type="password" name="pass_m2" id="pass_m2" placeholder="Contraseña master administrador" required>
                            <br>
                            <button type="submit">Eliminar Administrador</button>
                        </form>
                    </div>
                    
                    <br>
                    <h3>Cambiar contraseña</h3>
                    <div class="Form" id="actualizar">
                        <form action="php/up_admin.php" method="post">
                            <label for="email_up">Correo electronico: </label>
                            <input type="email" name="email_up" id="email_up" placeholder="Ingresa correo electronico" required>
                            <br>
                            <label for="pass_ac">Contraseña actual: </label>
                            <input type="password" name="pass_ac" id="pass_ac" placeholder="Ingresa contraseña actual" required>
                            <br>
                            <label for="pass_up">Nueva contraseña: </label>
                            <input type="password" name="pass_up" id="pass_up" placeholder="Contraseña master administrador" required>
                            
                            <br>
                            <button type="submit">Actualizar</button>
                            <br>
                        </form>
                    </div>

                </div>
            </div>
            <!-- Aqui termina la informacion del administrador-->
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
    </body>
</html>