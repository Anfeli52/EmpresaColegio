<?php

include '../conexion.php';
session_start();
    // $host = 'localhost';
    // $db = 'yaxja';
    // $user = 'root';
    // $password = '';
    // $connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);

if(isset($_POST['actualizarContaminacion'])){
    $user = $_SESSION['email'];
    $codigoAgua = $_GET['editedField'];
    $nombreCuerpo = $_POST['nombreCuerpo'];
    $cuerpoAgua = $_POST['cuerpoAgua'];
    $fotoAgua = $_FILES['fotoCuerpo'];
    $fotoName = $_FILES['fotoCuerpo']['name'];
    $tmp_foto = $_FILES['fotoCuerpo']['tmp_name'];

    // Leer el contenido del archivo
    $photoData = file_get_contents($tmp_foto);

    // Escapar caracteres especiales en los datos de la foto
    $escapedPhotoData = mysqli_real_escape_string($conexion, $photoData);

    $carpeta = "../../IMG/FotosCuerpos";

    $ruta = $carpeta . '/' . $fotoName;
    move_uploaded_file($tmp_foto, $carpeta . '/' . $fotoName);

    if($ruta === "../../IMG/FotosCuerpos/" && $nombreCuerpo !="" && $cuerpoAgua !=""){
        $update = "UPDATE contaminacion SET imagen = '$escapedPhotoData', nombreAgua = '$nombreCuerpo', cuerpoAgua = '$cuerpoAgua' WHERE codigoAgua = '$codigoAgua'";
    }elseif($ruta != "../../IMG/FotosCuerpos/" && $nombreCuerpo !="" && $cuerpoAgua !=""){
        $update = "UPDATE contaminacion SET imagen = '$escapedPhotoData', nombreAgua = '$nombreCuerpo', cuerpoAgua = '$cuerpoAgua', fotoAgua = '$ruta' WHERE codigoAgua = '$codigoAgua'";
    }else{
        header('location:contaminacionAdminPage.php');
    }
    mysqli_query($conexion, $update);
    header('location:contaminacionAdminPage.php');

// // Verificar que se haya enviado un archivo
// if (isset($tmp_foto) && !empty($tmp_foto)) {
    

//     // Actualizar la foto en la base de datos
//     $query = "UPDATE contaminacion SET imagen = '$escapedPhotoData' WHERE codigoAgua = '$codigoAgua'";
//     $result = mysqli_query($conexion, $query);

//     if ($result) {
//         echo "Foto actualizada correctamente en la base de datos.";
//     } else {
//         echo "Error al actualizar la foto en la base de datos: " . mysqli_error($connection);
//     }
// } else {
//     echo "No se seleccionó ninguna foto.";
// }


    //CONVERTIR A BLOB
    
    // if (isset($tmp_foto) && !empty($tmp_foto)) {
    //     // Leer el contenido del archivo
    //     $photoData = file_get_contents($tmp_foto);
    
    //     // Escapar caracteres especiales en los datos de la foto
    //     $escapedPhotoData = mysqli_real_escape_string($conexion, $photoData);

    //     // Actualizar la foto en la base de datos
    //     $query = "UPDATE contaminacion SET imagen = $escapedPhotoData WHERE codigoAgua = '$codigoAgua'";
    //     $result = mysqli_query($conexion, $query);
    
    //     echo "Foto actualizada correctamente en la base de datos.";
    // } else {
    //     echo "No se seleccionó ninguna foto.";
    // }



    
    // Conexión a la base de datos MySQL
    
    // $photoId = 'R256';

    // $query = "UPDATE contaminacion SET imagen = :photo WHERE codigoAgua = :id";
    // $statement = $connection->prepare($query);
    // $statement->bindParam(':photo', $photoData, PDO::PARAM_LOB);
    // $statement->bindParam(':id', $photoId, PDO::PARAM_INT);
    // $statement->execute();

    // echo "Foto actualizada correctamente en la base de datos.";


    
    /*$carpeta = "../../IMG/FotosCuerpos";

    $ruta = $carpeta . '/' . $fotoName;
    move_uploaded_file($tmp_foto, $carpeta . '/' . $fotoName);

    $select = "SELECT * FROM contaminacion WHERE codigoAgua = '$codigoAgua'";
    $query = mysqli_query($conexion, $select);

    if($ruta === "../../IMG/FotosCuerpos/" && $nombreCuerpo !="" && $cuerpoAgua !=""){
        $update = "UPDATE contaminacion SET imagen = '$photoData', nombreAgua = '$nombreCuerpo', cuerpoAgua = '$cuerpoAgua' WHERE codigoAgua = '$codigoAgua'";
    }elseif($ruta != "../../IMG/FotosCuerpos/" && $nombreCuerpo !="" && $cuerpoAgua !=""){
        $update = "UPDATE contaminacion SET imagen = '$photoData', nombreAgua = '$nombreCuerpo', cuerpoAgua = '$cuerpoAgua', fotoAgua = '$ruta' WHERE codigoAgua = '$codigoAgua'";
    }else{
        header('location:contaminacionAdminPage.php');
    }
    mysqli_query($conexion, $update);
    header('location:contaminacionAdminPage.php');
    */
}else{
    header('location:contaminacionAdminPage.php');
}

?>