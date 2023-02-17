<?php

include '../conexion.php';

$correo = $_POST['usuarioCorreo'];
$nombre = $_POST['usuarioNombre'];
$apellido = $_POST['usuarioApellido'];
$username = $_POST['usuarioUsername'];
$telefono = $_POST['usuarioTelefono'];
$tipoUsuario = $_POST['usuarioTipoUsuario'];

$select = "SELECT * FROM usuario";
$result = $conexion->query($select);

?>