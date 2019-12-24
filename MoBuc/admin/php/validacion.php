<?php
    require_once 'config.php';

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM informacion.admin WHERE admin.email = '".$email."' AND admin.pass = '".$pass."'";
    $result = pg_query($conn, $query);

    $rows = pg_num_rows($result);
    echo $rows;

    if($rows == 1) {
        echo "Se encontro un resultado existoso";
        session_start();
        $_SESSION['user'] = $email;
        header("Location: ../reservaciones.php");
    }
    else
        echo "No se encontraron resultados";


