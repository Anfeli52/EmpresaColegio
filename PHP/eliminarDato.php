<?php

session_start();
include 'conexion.php';

$correo = $_SESSION['correo'];
$sql = "SELECT * FROM contaminacion WHERE correoContaminacion = '".$correo."';";
$resultado = $conexion->query($sql);

while($data=$resultado->fetch_assoc()){
    $codigoAgua = $data['codigoAgua'];
    $nivelContaminante = $data['nombreAgua'];
    $nombreAgua = $data['nombreAgua'];
    $cuerpoAgua = $data['cuerpoAgua'];
    $correoContaminacion = $data['correoContaminacion'];
}

$delete = "DELETE FROM contaminacion WHERE codigoAgua = '$codigoAgua' AND correoContaminacion = '$correo'";
echo '<script>
        window.history.go(-1);
    </script>';
?>