<?php

include '../conexion.php';
session_start();

if(isset($_POST['btnActualizarUsuarios'])){
    $correoCampo = $_GET['idUserEmail'];
    $correo = $_POST['usuarioCorreo'];
    $nombre = $_POST['usuarioNombre'];
    $apellido = $_POST['usuarioApellido'];
    $username = $_POST['usuarioUsername'];
    $telefono = $_POST['usuarioTelefono'];
    $tipoUsuario = $_POST['usuarioTipoUsuario'];

    $select = "SELECT * FROM usuario WHERE correo = '$correoCampo'";
    $result = $conexion->query($select);

    $update = "UPDATE usuario SET correo = '$correo', nombre = '$nombre', apellido = '$apellido', username = '$username', telefono = '$telefono', tipoUsuario = '$tipoUsuario' WHERE correo = '$correoCampo'";
    $query = mysqli_query($conexion, $update);
    header('location: usersAdminPage.php');
}else{
    header('location: usersAdminPage.php');
}
?>