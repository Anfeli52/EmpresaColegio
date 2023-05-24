<?php

include 'conexion.php';
session_start();

$correo = $_SESSION['email'];
$sql = "SELECT * FROM usuario WHERE correo = '$correo'";
$resultado = mysqli_query($conexion, $sql);

while($data=mysqli_fetch_assoc($resultado)){
    $nombre = $data['nombre'];
    $apellido = $data['apellido'];
    $email = $data['correo'];
}
?>