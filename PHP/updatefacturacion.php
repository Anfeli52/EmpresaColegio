<?php
include 'conexion.php';
session_start();
$correo = $_SESSION['email'];

$nombre = $_POST['editnombreFactura'];
$apellido = $_POST['editapellidoFactura'];
$direccion1 = $_POST['editdireccion1'];
$direccion2 = $_POST['editdireccion2'];
$ciudad = $_POST['editciudadFactura'];
$codepostal = $_POST['editcodepostal'];
$pais = $_POST['editpaisFactura'];
$estado = $_POST['editestadoFactura'];

$update = "UPDATE datosfacturacion SET nombreFactura = '$nombre', apellidoFactura = '$apellido', direccion1 = '$direccion1', direccion2 = '$direccion2', ciudadFactura = '$ciudad', codepostal = '$codepostal', paisFactura = '$pais', estadoFactura = '$estado' WHERE correoUsuario = '$correo'";
$query = mysqli_query($conexion, $update);
header('location:User/actualizarPagoUser.php');
?>