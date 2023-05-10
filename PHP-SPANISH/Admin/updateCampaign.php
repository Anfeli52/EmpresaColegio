<?php

include '../conexion.php';
session_start();

if (isset($_POST['btn-updateCampaign'])) {
    $codigoCampaña = $_GET['updatedCampignId'];
    $tituloCampaña = $_POST['nombrecampaña'];
    $descripcionCampaña = $_POST['descripcioncampaña'];
    $linkCampaña = $_POST['linkcampaña'];

    $fotoCampaña = $_FILES['imagencampana'];
    $fotoName = $_FILES['imagencampana']['name'];
    $tmp_foto = $_FILES['imagencampana']['tmp_name'];

    $carpeta = "../../IMG/FotosCampanas";
    $ruta = $carpeta . '/' . $fotoName;
    move_uploaded_file($tmp_foto, $carpeta . '/' . $fotoName);

    $comparacion = "SELECT * FROM campaña WHERE CodigoCampaña = '$codigoCampaña'";
    $busqueda = mysqli_query($conexion, $comparacion);

    $datos = mysqli_fetch_assoc($busqueda);

    $comparacion = "SELECT * FROM campaña WHERE NombreCampaña = '$tituloCampaña'";
    $busqueda = mysqli_query($conexion, $comparacion);

    if(mysqli_num_rows($busqueda)>0){
        $datosCampañaAnterior = mysqli_fetch_assoc($busqueda);
        $codigoCampañaAnterior = $datosCampañaAnterior['CodigoCampaña'];

        if($codigoCampañaAnterior===$codigoCampaña){
            $return = 1;
        }else{
            $return = 0;
        }
    }else{
        $return = 1;
    }

    if($return===1){
        if ($ruta === "../../IMG/FotosCampanas/" && $tituloCampaña!="" && $descripcionCampaña!="" && $linkCampaña !="") {
            $update = "UPDATE campaña SET NombreCampaña = '" . $tituloCampaña . "', DescripcionCampaña = '" . $descripcionCampaña . "', DetallesLink = '" . $linkCampaña . "' WHERE CodigoCampaña = '" . $codigoCampaña . "'";
        } else {
            if ($ruta != $datos['ImagenCampaña'] && $tituloCampaña!="" && $descripcionCampaña!="" && $linkCampaña !="") {
                $update = "UPDATE campaña SET NombreCampaña = '" . $tituloCampaña . "', DescripcionCampaña = '" . $descripcionCampaña . "', DetallesLink = '" . $linkCampaña . "', ImagenCampaña = '" . $ruta . "' WHERE CodigoCampaña = '" . $codigoCampaña . "'";
            }else{
                header('location:campanasAdminPage.php');
            }
        }
        mysqli_query($conexion, $update);
        header('location:campanasAdminPage.php');
    }else{
        header('location:campanasAdminPage.php');
    }
} else {
    header('location:campanasAdminPage.php');
}
?>