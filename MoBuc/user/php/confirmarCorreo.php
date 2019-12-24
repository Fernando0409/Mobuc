<?php
    require_once 'Email.php';
    require_once 'config.php';

    $nombre = $_POST['nombres'];
    $apellidoP = $_POST['aPaterno'];
    $apellidoM = $_POST['aMaterno'];
    $email = $_POST['emailUcol'];
    $cuenta = $_POST['noCuenta'];
    $estatus = 1;

    $isbn = $_POST['isbn'];
    $dateReserva = date('m/d/Y');
    echo "<h1>$dateReserva</h1>";

    /* Apartado para enviar el correo al email */
    $subject = "Confirmacion de solicitud - Biblioteca Ciencias del Mar";

    $longitudCorreo = strlen($email);
    $dominio = substr($email, $longitudCorreo - 8, $longitudCorreo);


    if( $dominio == "@ucol.mx" && strlen($cuenta) == 8){
        
        echo "<script> alert('Acceso Autorizado'); </script>";

        $codigo = random_int(1000, 9999);

        $msg = "Estimado usuario, para completar la solicitud de material haga click en".
            "el siguiente enlace: http://localhost/project/Mobuc_ultima/Mobuc.html \n".
            "¡Busca, Aparta y Aprende!\r\n";

        $msg = wordwrap($msg, 70, "\r\n");

        $correo = new Email();

        $correo->setEmail($email);
        $correo->setSubject($subject);
        $correo->setBody($msg);
        $correo->sendEmail();


        // Agregar a la Db, primero se hacer verificacion de que el alumno
        // no exista
        $query = "SELECT * FROM user WHERE 'user.email' = '{$email}' AND 'user.no_cuenta' = '{$cuenta}'";
        $result = pg_query($conn, $query);
       
        if($result){
            $rows = pg_num_rows($result);
            if($rows == 0){
                // Se agrega el alumno a la tabla de alumnos
                $query = "INSERT INTO informacion.user (nombre, apellido_paterno, apellido_materno, email, no_cuenta, estatus) 
                                                VALUES ('{$nombre}','{$apellidoP}','{$apellidoM}','{$email}','{$cuenta}','{$estatus}')";
                $result = pg_query($conn, $query);
                if($result){
                    echo "<script> alert('Alumno agregado exitosamente!'); </script>";
                }
                else
                    echo "<script> alert('Error al intentar agregar al alumno, reintente mas tarde.'); </script>";

            } else
                echo "<script> alert('Error al intentar agregar al alumno, duplicación'); </script>";
            
                // Generar la reservacion del libro en la tabla reservaciones
        $queryReservaciones = "INSERT INTO material.reservacion (no_cuenta, isbn, fecha_reserva) VALUES('{$cuenta}', '{$isbn}', '{$dateReserva}'";
        $result = pg_query($conn, $query);
        if($result){
            echo "<script> alert('Reservacion exitosa') </script>";
            header('Location: ../index.html');
        }
        else
            echo "<script> alert(Reservacion rechazada) </script>";

        } else
            echo "<script> alert('Ocurrio un error con el servidor, reintente mas tarde'); </script>";
    }else
        echo "<script> alert('Acceso Denegado'); </script>";

    

