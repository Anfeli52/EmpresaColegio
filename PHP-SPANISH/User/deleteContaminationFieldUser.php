<?php

include '../conexion.php';
session_start();

if(isset($_POST['btnDeleteContaminationFieldUser'])){
    $id = $_GET['contaminatedDeletedIdUser'];
    $delete = "DELETE FROM contaminacion WHERE codigoAgua = '$id'";
    mysqli_query($conexion, $delete);
    header('location: contaminacionUserPage.php?delete="true"');
}else{
    header('location: contaminacionUserPage.php');
}

?>