<?php
include 'conexion.php';
session_start();
$correo = $_SESSION['email'];

if(isset($_POST['btn-addCampaign'])){
    $file = $_FILES['imagencampana'];
    $nombreImagen = $_FILES['imagencampana']['name'];
    $temporal = $_FILES['imagencampana']['tmp_name'];

    $carpeta = '../IMG/FotosCampanas';
    $ruta = $carpeta . '/' .$nombreImagen;
    move_uploaded_file($temporal, $carpeta .'/'.$nombreImagen);
    $carpeta = '../../IMG/FotosCampanas';
    $ruta = $carpeta . '/' .$nombreImagen;

    $campana = $_POST['nombrecampaña'];
    $descrip = $_POST['descripcioncampaña'];
    $link = $_POST['linkcampaña'];

    $select = "SELECT * FROM campaña WHERE NombreCampaña = '$campana'";
    $query = mysqli_query($conexion, $select);
    if(mysqli_num_rows($query)>0){
        header('location:Admin/campanasAdminPage.php');
    }else{
        $insert = "INSERT INTO campaña(ImagenCampaña, NombreCampaña, DescripcionCampaña, DetallesLink, correoUsuario) VALUES ('$ruta', '$campana', '$descrip', '$link', '$correo')";
        mysqli_query($conexion, $insert);
        header('location:Admin/campanasAdminPage.php');
    }
}else{
    header('location:Admin/campanasAdminPage.php');
}


?>