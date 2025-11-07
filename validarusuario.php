<?php
    //Crea conexion con nuestra base de datos
    require "db.php";

    //Recuperar datos introducidos por el usuario
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];

    //Recuperar datos almacenados en la base datos
    $sql = "SELECT * FROM usuario WHERE nombre='".$nombre."'";
    $resultado = mysqli_query($conexion, $sql);
    if(mysqli_num_rows($resultado)> 0){
        //Existe el usuario
        $usuario = mysqli_fetch_assoc($resultado);
        if($clave == $usuario["clave"]){
            header("Location: ./lectura.php?nombre=$nombre");
        }else{
            header("Location: ./login.php?error=clave");
        }
    }else{
        //No existe el usuario
        header("Location: ./login.php?error=nombre");
    }

    //Cerra conexion BD
    mysqli_close($conexion);
?>