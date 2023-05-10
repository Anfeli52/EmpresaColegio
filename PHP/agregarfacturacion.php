<?php
include 'conexion.php';
session_start();
$correo = $_SESSION['email'];

$nombre = $_POST['nombreFactura'];
$apellido = $_POST['apellidoFactura'];
$direccion1 = $_POST['direccion1'];
$direccion2 = $_POST['direccion2'];
$ciudad = $_POST['ciudadFactura'];
$codepostal = $_POST['codepostal'];
$pais = $_POST['paisFactura'];
$estado = $_POST['estadoFactura'];

$insert = "INSERT INTO datosfacturacion(nombreFactura, apellidoFactura, direccion1, direccion2, ciudadFactura, codepostal, paisFactura, estadoFactura, correoUsuario) VALUES ('$nombre', '$apellido', '$direccion1', '$direccion2', '$ciudad', '$codepostal', '$pais', '$estado', '$correo')";
mysqli_query($conexion, $insert);
header('location:User/actualizarPagoUser.php');
?>