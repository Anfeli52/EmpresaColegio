<?php

session_start();
include 'conexion.php';

$user = $_SESSION['email'];
$select = "SELECT tipoUsuario FROM usuario WHERE correo = '" . $user . "';";
$result = $conexion->query($select);
while ($datos = $result->fetch_assoc()) {
    $tipoUsuario = $datos['tipoUsuario'];
}

if ($user == null || $user == "") {
    header('location:../HTML/login.php');
} else {
    $sql = "SELECT * FROM usuario WHERE correo = '" . $user . "';";
    $resultado = $conexion->query($sql);

    while ($data = $resultado->fetch_assoc()) {
        $correo = $data['correo'];
    }

    $columns = ['correoContaminacion', 'codigoAgua', 'nombreAgua', 'cuerpoAgua', 'nivelContaminante', 'nivelTurbidad', 'fechaMuestra'];
    $table = "contaminacion";
    $campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

    $where = "WHERE correoContaminacion = '$correo'";

    if ($campo != null) {
        $cont = count($columns);
        $where = "WHERE (";
        for ($i = 1; $i < $cont; $i++) {
            $where .=  "'$correo' = correoContaminacion AND " . $columns[$i] . " LIKE '%" . $campo . "%' OR ";
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
            $html .= '<td>';

            // Consulta para obtener la imagen de la tabla "contaminacion" usando el códigoAgua actual
            $codigoAgua = $row['codigoAgua'];
            $query_imagen = "SELECT imagen FROM contaminacion WHERE codigoAgua = '$codigoAgua'";
            $resultado_imagen = $conexion->query($query_imagen);

            if ($resultado_imagen->num_rows > 0) {
                $row_imagen = $resultado_imagen->fetch_assoc();
                $imagen = $row_imagen['imagen'];

                // Mostrar la imagen en el div
                $html .= '<img src="data:image/jpeg;base64,' . base64_encode($imagen) . '">';
            } else {
                $html .= 'Imagen no encontrada';
            }

            $html .= '</td>';
            $html .= '<td>' . $row['codigoAgua'] . '</td>';
            $html .= '<td>' . $row['nombreAgua'] . '</td>';
            $html .= '<td>' . $row['cuerpoAgua'] . '</td>';
            $html .= '<td>' . $row['nivelContaminante'] . '</td>';
            $html .= '<td>' . $row['nivelTurbidad'] . '</td>';
            $html .= '<td>' . $row['fechaMuestra'] . '</td>';
            $html .= '<td class="edit-table"><a href="contaminacionAdminPage.php?contaminationEditedField=' . $row['codigoAgua'] . '" name="editarCampo"> Editar </a></td>';
            $html .= '<td class="eliminate-table"><a href="contaminacionAdminPage.php?contaminationDeteledField=' . $row['codigoAgua'] . '" name="eliminarCampo"> Eliminar </a></td>';
            $html .= '</tr>';
        }
    } else {
        $html .= '<tr>';
        $html .= '<td colspan="10">Sin resultados</td>';
        $html .= '</tr>';
    }

    echo json_encode($html, JSON_UNESCAPED_UNICODE);
}
?>