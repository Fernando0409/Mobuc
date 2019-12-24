<!DOCTYPE html>
<html lang="en">

<head>
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

    <title>MoBuc</title>
</head>

<body>
<div class="ContenedorPrincipal">

<?php
    $titulo_libro = $_POST['titulo_libro'];

    $conn = pg_connect('host = localhost dbname = mobuc user = fernando password=DeveloperFer0405') or die('No se pude conectar');


    $query = "SELECT * FROM analisis.fichas WHERE fichas.titulo LIKE '%{$titulo_libro}%'";
    $datos = pg_query($conn, $query);

    echo "
            <table class='table' border='1'>
                <thead class='thead-dark'>
                    <th scope='col'>ID</th>
                    <th scope='col'>Titulo</th>
                    <th scope='col'>Autor</th>
                    <th scope='col'>Editorial</th>
                </thead>
                <tbody>
          ";
    
    while($material = pg_fetch_array($datos)){
        echo "<tr>".
                "<td scope='row'>".$material['clasificacion']."</td>".
                "<td scope='row'>".$material['titulo']."</td>".
                "<td scope='row'>".$material['autor']."</td>".
                "<td scope='row'>".$material['editorial']."</td>".
            "</tr>";

    }
    ?>
