<?php

include '../conexion.php';
session_start();

if(isset($_POST['btnDeleteContaminationField'])){
    $id = $_GET['contaminatedDeletedId'];
    $delete = "DELETE FROM contaminacion WHERE codigoAgua = '$id'";
    mysqli_query($conexion, $delete);
    header('location: contaminacionAdminPage.php?delete="true"');
}else{
    header('location: contaminacionAdminPage.php');
}

?>