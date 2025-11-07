<?php

    //Crear conexion con base de datos
    require "db.php";

    //Recuperar los datos insertados por el usuario
    $banco = $_POST["banco"];
    $nombre = $_POST["nombre"];
    $cuenta_bancaria = $_POST["cuenta_bancaria"];
    $deudas = $_POST["deudas"];
    $usuario = $_POST["usuario"];

    //Para recuperar datos almacenados en la B
    $sql = "INSERT INTO elementos (banco, nombre, cuenta_bancaria, deudas) VALUES ('$banco', '$nombre', '$cuenta_bancaria', '$deudas')";
    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        header("Location: ./lectura.php?nombre=$usuario");
    }else{
        header("Location: ./crear.php?error=insercion");
    }

    //Cerrar conexion BD
    mysqli_close($conexion);
?>
