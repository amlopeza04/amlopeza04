<?php
    //Script abrir conexion BD y proporcionar variable $conexion para realizar accciones
    $servidor = "localhost:3306";
    $usuario = "root";
    $clave = "";
    $basedatos = "Banco";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $basedatos);
    if (!$conexion) {
        die ("Conexion fallida: " . mysqli_connect_error());
    }
?>