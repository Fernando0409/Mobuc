<?php    
    require_once 'config.php';

    // Datos del usuario
    $name = $_POST["name_add"];
    $last = $_POST["last_name"];
    $email = $_POST["email_add"];
    $pass = "biblioteca123";

    $pass_m1 = $_POST["pass_m1"];

    // Verifico que el correo a eliminar sea UCOL
    $longitudCorreo = strlen($email);
    $dominio = substr($email, $longitudCorreo - 8, $longitudCorreo);

    if($dominio == "@ucol.mx"){
        // Consulta para ver si no existen resultado de
        // que existe ese correo
        //$query = "SELECT * FROM informacion.admin WHERE admin.email = '".$email."'";
        $query = "SELECT * FROM informacion.admin WHERE admin.email = '{$email}'";
        $result = pg_query($conn, $query);

        if($result){
            $rows = pg_num_rows($result);
            echo $rows;

            // Si el resultado es exitoso, no exiten cuentas, proceso a eliminarlo 
            if($rows == 0){

                /* Momento de verificar si la contraseña del master administrador es la correcta */
                $query = "SELECT * FROM informacion.admin WHERE admin.pass = '{$pass_m1}' AND admin.id = 1";
                $result = pg_query($conn, $query);

                if($result){
                    //$query = "INSERT INTO informacion.admin (name, last_name, email, email) VALUES ('".$name."','".$last."', '".$email."')";
                    $query = "INSERT INTO informacion.admin (nombre, apellido, email, pass) VALUES ('{$name}','{$last}', '{$email}', '{$pass}')";
                    $result = pg_query($conn, $query);
                
                    if($result){
                        echo "<script> alert('Administrador agregado exitosamente!'); </script>";
                        //header('../menu.html');
                    } else{
                        echo "<script> alert('Error al intentar agregar al administrador, reintente mas tarde.'); </script>";
                        //header('../menu.html');
                    }
                } else
                    echo "<script> alert('Contraseña del Master Administrador invalida'); </script>";
            } else
                echo "<script> alert('No se permite duplicidad de cuentas.'); </script>";
        } else
            echo "<script> alert('Ocurrio un error con el servidor, reintente mas tarde'); </script>";
    } else
        echo "<script> alert('El correo propocionado es invalido.'); </script>";
        
    header('Location: ../menu.html');

