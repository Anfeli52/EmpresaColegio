<?php

session_start();
include '../conexion.php';

if(isset($_POST['actualizarContaminacionUser'])){
    $codigoAgua = $_GET['editedField'];
    $nombreCuerpo = $_POST['nombreCuerpo'];
    $cuerpoAgua = $_POST['cuerpoAgua'];
    $fotoAgua = $_FILES['fotoCuerpo'];
    $fotoName = $_FILES['fotoCuerpo']['name'];
    $tmp_foto = $_FILES['fotoCuerpo']['tmp_name'];

    $carpeta = "../../IMG/FotosCuerpos";

    $ruta = $carpeta . '/' . $fotoName;
    move_uploaded_file($tmp_foto, $carpeta . '/' . $fotoName);

    $select = "SELECT * FROM contaminacion WHERE codigoAgua = '$codigoAgua'";
    $query = mysqli_query($conexion, $select);

    if($ruta === "../../IMG/FotosCuerpos/" && $nombreCuerpo !="" && $cuerpoAgua !=""){
        $update = "UPDATE contaminacion SET nombreAgua = '$nombreCuerpo', cuerpoAgua = '$cuerpoAgua' WHERE codigoAgua = '$codigoAgua'";
    }elseif($ruta != "../../IMG/FotosCuerpos/" && $nombreCuerpo !="" && $cuerpoAgua !=""){
        $update = "UPDATE contaminacion SET nombreAgua = '$nombreCuerpo', cuerpoAgua = '$cuerpoAgua', fotoAgua = '$ruta' WHERE codigoAgua = '$codigoAgua'";
    }else{
        header('location:contaminacionUserPage.php');
    }
    mysqli_query($conexion, $update);
    header('location:contaminacionUserPage.php');
}else{
    header('location:contaminacionUserPage.php');
}

?>