<?php

include '../conexion.php';
session_start();

if(isset($_POST['btnDeleteField'])){
    $correo = $_GET['deletedId'];
    $delete = "DELETE FROM usuario WHERE correo = '$correo'";
    mysqli_query($conexion, $delete);
    header('location: usersAdminPage.php');
}else{
    header('location: usersAdminPage.php');
}

?>