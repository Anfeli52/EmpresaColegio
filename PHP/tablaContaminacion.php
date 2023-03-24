<?php

session_start();
include 'conexion.php';

$user = $_SESSION['email'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '".$user."';";
$result = $conexion->query($select);
while($datos=$result->fetch_assoc()){
    $tipoUsuario = $datos['tipoUsuario'];
}

if($user==null || $user==""){
    header('location:../HTML/login.html');
}else{
    $sql = "SELECT * FROM usuario WHERE correo = '".$user."';";
    $resultado = $conexion->query($sql);

    while($data=$resultado->fetch_assoc()){
        $correo=$data['correo'];
    }
}

$columns = ['correoContaminacion','codigoAgua', 'nombreAgua', 'cuerpoAgua', 'nivelContaminante', 'nivelTurbidad', 'fechaMuestra'];
$table = "contaminacion";
$campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

$where = "WHERE correoContaminacion = '$correo'";

if($campo != null){
    $cont = count($columns);
    $where = "WHERE (";
    for($i = 1; $i < $cont; $i++){
        $where .=  "'$correo' = correoContaminacion AND " .$columns[$i]. " LIKE '%".$campo."%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT * FROM contaminacion $where";
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
            $html .= '<td> <img src="'.$row['fotoAgua'].'" alt=""> </td>';
//          $html .= '<td>' . $row['fotoAgua'] . '</td>'; //ESTE CAMPO NO SE MUESTRA EN LA BASE DE DATOS, ES POR ESO QUE SE QUITA (POR AHORA) PARA QUE SE MUESTREN LOS DATOS
            $html .= '<td>' . $row['codigoAgua'] . '</td>';
            $html .= '<td>' . $row['nombreAgua'] . '</td>';
            $html .= '<td>' . $row['cuerpoAgua'] . '</td>';
            $html .= '<td>' . $row['nivelContaminante'] . '</td>';
            $html .= '<td>' . $row['nivelTurbidad'] . '</td>';
            $html .= '<td>' . $row['fechaMuestra'] . '</td>';
            $html .= '<td class="edit-table"><a href="#" onclick="editar()">Modify</a></td>';
            $html .= '<td  class="eliminate-table"><a href="#" onclick="eliminar()">Remove</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="10">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>