<?php
    $server = "localhost";
    $nombreBD = "keramika";
    $usuario = "root";
    $pass = "";

    $conexion = new mysqli($server, $usuario, $pass, $nombreBD);

    if ($conexion->connect_error) {
        die("No se pudo conectar al servidor de la BD");
    }
?>