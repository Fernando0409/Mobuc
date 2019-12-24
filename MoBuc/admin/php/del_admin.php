<?php

    require_once 'config.php';

    $email_del = $_POST["email_del"];
    $pass_m2 = $_POST["pass_m2"];

    // Verifico que el correo a eliminar sea UCOL
    $longitudCorreo = strlen($email_del);
    $dominio = substr($email_del, $longitudCorreo - 8, $longitudCorreo);

    if($dominio == "@ucol.mx"){
        // Consulta para ver si existen resultado de
        // que existe ese correo
        
        //$query = "SELECT * FROM informacion.admin WHERE admin.email = '".$email_del."'";
        
        $query = "SELECT * FROM informacion.admin WHERE admin.email = '{$email_del}'";
        $result = pg_query($conn, $query);
        
        if($result){
            $rows = pg_num_rows($result);
            echo $rows;

            // Si el resultado es exitoso,existe la cuenta, proceso a eliminarlo 
            if($rows == 1){
                echo "Si existe la cuenta";
                
                /* Momento de verificar si la contraseña del master administrador es correcta */
                $query = "SELECT * FROM informacion.admin WHERE admin.pass = '{$pass_m1}' AND admin.id = 1";
                $result = pg_query($conn, $query);

                if($result){    
                    //$query = "DELETE FROM informacion.admin WHERE admin.email = '".$email_del."'";
                    $query = "DELETE FROM informacion.admin WHERE admin.email = '{$email_del}'";
                    $result = pg_query($conn, $query);

                    if($result)
                        echo "<script> alert('Administrador eliminado exitosamente'); </script>";
                    else
                        echo "<script> alert('No se pudo eliminar al administrador, \nreintente mas tarde'); </script>";
                } else
                    echo "<script> alert('Contraseña del Master Administrador invalida'); </script>";
      
            } else
                echo "<script> alert('No existe esa cuenta, verifique el correo'); </script>";
        } else
            echo "<script> alert('Ocurrio un error con el servidor, reintente mas tarde'); </script>";
    } else
        echo "<script> alert('El correo propocionado es invalido.'); </script>";
    
    header('Location: ../menu.html');   // Se va a esta pagina

