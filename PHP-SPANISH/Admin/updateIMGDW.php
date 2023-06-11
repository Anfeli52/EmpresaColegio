<?php

    include '../conexion.php';

    $foto = $_FILES['imgProducto'];
    $foto_name = $_FILES['imgProducto']['name'];
    $foto_tmp = $_FILES['imgProducto']['tmp_name'];

    $carpeta = "../../IMG";
    $ruta = $carpeta.'/'.$foto_name;

    move_uploaded_file($foto_tmp, $carpeta.'/'.$foto_name);

    if($ruta != "../../IMG/"){
        $update = "UPDATE dw23 SET imgProducto = '$ruta'";
        mysqli_query($conexion, $update);
    } 
    header('location: dw-23.php');

?>