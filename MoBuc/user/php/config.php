<?php
    $host = '127.0.0.1';
    $user = 'postgres';
    $password = 'DeveloperFer0405';
    $db= 'prueba_DB';

    // Hacerlo con postgres
    $conn = pg_connect('host = localhost dbname = mobuc user = fernando password = DeveloperFer0405')
        or die('No se pude conectar');