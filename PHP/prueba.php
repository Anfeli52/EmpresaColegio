<?php

include 'conexion.php';

$correo="anfeli201111@gmail.com";
$nombre = "SELECT username FROM usuarios WHERE correo = 'anfeli201111@gmail.com';";
$resultado = mysqli_query($conexion, $nombre);
$row = mysqli_fetch_assoc($resultado);

while($$row=$resultado->fetch_assoc()){
    echo $row['username']."<br>";
}

?>