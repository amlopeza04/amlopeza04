<?php
    require "db.php";

    $nombre = $_GET["nombre"];
    $cuenta_bancaria = $_GET["cuenta_bancaria"];

    $sql = "DELETE FROM elementos WHERE cuenta_bancaria='$cuenta_bancaria'";
    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        header("Location: ./lectura.php?nombre=$nombre");
    }else{
        header("Location: ./lectura.php?error=borrar");
    }

    mysqli_close($conexion);

?>