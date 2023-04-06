<?php

include '../conexion.php';
session_start();

if(isset($_POST['btn-deleteCampaign'])){
    $nombreCampaña = $_GET['campaignCode'];
    $delete = "DELETE FROM campaña WHERE CodigoCampaña = '$nombreCampaña'";
    mysqli_query($conexion, $delete);
    header('location:campanasAdminPage.php');
}else{
    header('location:campanasAdminPage.php');
}

?>