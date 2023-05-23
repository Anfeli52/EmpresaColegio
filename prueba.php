<?php
// Conexión a la base de datos MySQL
$host = 'localhost';
$db = 'java';
$user = 'root';
$password = '';
$connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);

// Consulta para obtener la foto
$query = "SELECT photo FROM photos WHERE id = :id";
$id = 2; // ID de la foto que deseas mostrar
$statement = $connection->prepare($query);
$statement->bindParam(':id', $id);
$statement->execute();

// Mostrar la foto
$result = $statement->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $photo = $result['photo'];
    header('Content-type: image/jpeg');
    echo $photo;
} else {
    echo 'Foto no encontrada.';
}
?>