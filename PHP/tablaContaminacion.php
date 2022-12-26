<?php

require('conexion.php');



$columns = ['codigoAgua', 'nombreAgua', 'cuerpoAgua', 'nivelContaminativo'];


$table = "contaminacion";

$campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;


$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . " FROM $table $where "; 
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['codigoAgua'] . '</td>';
        $html .= '<td>' . $row['nombreAgua'] . '</td>';
        $html .= '<td>' . $row['cuerpoAgua'] . '</td>';
        $html .= '<td>' . $row['nivelContaminativo'] . '</td>';
        $html .= '<td><a href="">Editar</a></td>';
        $html .= '<td><a href="">Eliminar</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="6">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);