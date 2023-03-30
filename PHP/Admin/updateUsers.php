<?php

include '../conexion.php';
session_start();

$correo = $_POST['usuarioCorreo'];
$nombre = $_POST['usuarioNombre'];
$apellido = $_POST['usuarioApellido'];
$username = $_POST['usuarioUsername'];
$telefono = $_POST['usuarioTelefono'];
$tipoUsuario = $_POST['usuarioTipoUsuario'];

$select = "SELECT * FROM usuario";
$result = $conexion->query($select);

$update = "UPDATE usuario SET correo = '$correo', nombre = '$nombre', apellido = '$apellido', username = '$username', telefono = '$telefono', tipoUsuario = '$tipoUsuario' WHERE correo = '$correo'";
$query = mysqli_query($conexion, $update);
header('location: usersAdminPage.php');
?>