<?php
// Conexión a la base de datos MySQL
// $host = 'localhost';
// $db = 'yaxja';
// $user = 'root';
// $password = '';
// $connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);

// // Consulta para obtener la foto
// $query = "SELECT imagen FROM contaminacion WHERE codigoAgua = :id";
// $id = "R256"; // ID de la foto que deseas mostrar
// $statement = $connection->prepare($query);
// $statement->bindParam(':id', $id);
// $statement->execute();

// // Mostrar la foto
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// if ($result) {
//     $photo = $result['imagen'];
//     header('Content-type: image/jpeg, image/jpg, image/png, image/webp');
//     echo $photo;
// } else {
//     echo 'Foto no encontrada.';
// }


// include 'PHP/conexion.php';
// session_start();

// $query = "SELECT imagen FROM contaminacion WHERE codigoAgua = 'R9360'";
// $statement = mysqli_query($conexion, $query);

// $result = mysqli_fetch_assoc($statement);
// if($result){
//     $photo = $result['imagen'];
//     header('Content-type: image/jpeg, image/jpg, image/png, image/webp');
//     echo $photo;
// }else{
//     echo 'Foto no encontrada';
// }

// $query = "SELECT imagen FROM contaminacion WHERE codigoAgua = 'R9360'";
// $result = mysqli_query($conexion, $query);

// // Obtener los datos de la foto
// if ($result && mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     $photoData = $row['imagen'];

//     // Mostrar la foto en el div
//     echo '<div><img src="data:image/jpeg;base64,' . base64_encode($photoData) . '"></div>';
// } else {
//     echo 'Foto no encontrada.';
// }

// Consulta para obtener los datos de la tabla principal
// $query = "SELECT * FROM contaminacion";
// $resultado = $conexion->query($query);
// $html = '';
// if ($resultado->num_rows > 0) {
//     while ($row = $resultado->fetch_assoc()) {
//         $html .= '<tr>';
//         $html .= '<td>';

//         // Consulta para obtener la imagen de la tabla "contaminacion" usando el códigoAgua actual
//         $codigoAgua = $row['codigoAgua'];
//         $query_imagen = "SELECT imagen FROM contaminacion WHERE codigoAgua = '$codigoAgua'";
//         $resultado_imagen = $conexion->query($query_imagen);

//         if ($resultado_imagen->num_rows > 0) {
//             $row_imagen = $resultado_imagen->fetch_assoc();
//             $imagen = $row_imagen['imagen'];

//             // Mostrar la imagen en el div
//             $html .= '><img src="data:image/jpeg;base64,' . base64_encode($imagen) . '">';
//         } else {
//             $html .= 'Imagen no encontrada';
//         }

//         $html .= '</td>';
//         $html .= '<td>' . $row['codigoAgua'] . '</td>';
//         $html .= '<td>' . $row['nombreAgua'] . '</td>';
//         $html .= '<td>' . $row['cuerpoAgua'] . '</td>';
//         $html .= '<td>' . $row['nivelContaminante'] . '</td>';
//         $html .= '<td>' . $row['nivelTurbidad'] . '</td>';
//         $html .= '<td>' . $row['fechaMuestra'] . '</td>';
//         $html .= '<td class="edit-table"><a href="contaminacionAdminPage.php?contaminationEditedField=' . $row['codigoAgua'] . '" name="editarCampo"> Editar </a></td>';
//         $html .= '<td class="eliminate-table"><a href="contaminacionAdminPage.php?contaminationDeteledField=' . $row['codigoAgua'] . '" name="eliminarCampo"> Eliminar </a></td>';
//         $html .= '</tr>';
//     }
// } else {
//     $html .= '<tr>';
//     $html .= '<td colspan="10">Sin resultados</td>';
//     $html .= '</tr>';
// }

// echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>