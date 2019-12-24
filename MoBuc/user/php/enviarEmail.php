<?php
    require_once 'Email.php';

    // Elementos del form
    $remitente = $_POST["email"];
    $asunto = $_POST["asunto"];
    $cuerpo = $_POST["msg"];

    $longitudCorreo = strlen($remitente);
    $dominio = substr($remitente, $longitudCorreo - 8, $longitudCorreo);

    if($dominio == "@ucol.mx") {

        $correo = new Email();

        // MOBUC.UCOL@GMAIL.COM
        // Mobuc.IS3D
        $correo->setEmail("mobuc.ucol@gmail.com");
        $correo->setSubject($asunto);
        $correo->setBody($cuerpo);
        $correo->sendEmail($remitente);
    }else
        echo "<script> alert('Acceso Denegado'); </script>";
    header('Location: ../index.html');
   