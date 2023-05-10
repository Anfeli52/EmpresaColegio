<?php

session_start();
include 'conexion.php';

$correo = $_SESSION['email'];
$sql = "SELECT username FROM usuarios WHERE correo = '".$correo."'";
$resultado = $conexion->query($sql);

while($data=$resultado->fetch_assoc()){
    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $email = $data['correo'];
}
?>