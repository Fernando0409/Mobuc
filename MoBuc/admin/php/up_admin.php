<?php

    require_once 'config.php';

    // Datos del administrador
    $email = $_POST['email_up'];
    $pass_ac = $_POST['pass_ac'];
    $pass_up = $_POST['pass_up'];

    // Verifico que el correo a actualizar sea UCOL
    $longitudCorreo = strlen($email);
    $dominio = substr($email, $longitudCorreo - 8, $longitudCorreo);

    if($dominio == "@ucol.mx"){
        // Consulta para ver si no existen resultado de que existe ese correo
        //$query = "SELECT * FROM informacion.admin WHERE admin.email = '".$email."'";
        $query = "SELECT * FROM informacion.admin WHERE admin.email = '{$email}' AND admin.pass = '{$pass_ac}'";
        $result = pg_query($conn, $query);

        // Momento de verificar si se excontraron resultados 
        // y actualizacion de datos
        if($result){
            $query = "UPDATE informacion.admin SET pass = '{$pass_up}' WHERE admin.email = '{$email}'";
            $result = pg_query($conn, $query);

            if($result){
                echo "<script> alert('Actualizacion de los datos exitosamente!');</script>";
                //header('Location: ../menu.html');

            } else{
                echo "<script> alert('Ha ocurrido un error, reintenta mas tarde');</script>";
                //header('Location: ../menu.html');
            }
        }else
            echo "<script> alert('No existen administradores con esos datos, verificalos');</script>";
    } else
        echo "<script> alert('El correo proporcionado es invalido');</script>";
    
    header('Location: ../menu.html');
