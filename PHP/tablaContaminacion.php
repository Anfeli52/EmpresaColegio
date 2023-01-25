<?php

session_start();
include 'conexion.php';

$user = $_SESSION['correo'];
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


$columns = ['correoContaminacion','codigoAgua', 'nombreAgua', 'cuerpoAgua', 'nivelContaminante'];


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
    //$where = "SELECT * FROM `contaminacion` WHERE `correoContaminacion` = '$correo' AND codigoAgua LIKE '%".$campo."%' OR nivelContaminante LIKE '%".$campo."%' OR nombreAgua LIKE '%".$campo."%' AND cuerpoAgua LIKE '%".$campo."%';";
}


//SELECT * FROM `contaminacion` WHERE ('venusayurialmeida.99@gmail.com' = correoContaminacion AND codigoAgua LIKE '%R1%' OR 'venusayurialmeida.99@gmail.com' = correoContaminacion AND nivelContaminante LIKE '%R1%' OR 'venusayurialmeida.99@gmail.com' = correoContaminacion AND nombreAgua LIKE '%R1%' OR 'venusayurialmeida.99@gmail.com' = correoContaminacion AND cuerpoAgua LIKE '%R1%')
//SELECT * FROM `contaminacion` WHERE ('venusayurialmeida.99@gmail.com' = correoContaminacion AND codigoAgua LIKE '%R15%' OR 'venusayurialmeida.99@gmail.com' = correoContaminacion AND nivelContaminante LIKE '%R15%' OR 'venusayurialmeida.99@gmail.com' = correoContaminacion AND nombreAgua LIKE '%R15%' OR 'venusayurialmeida.99@gmail.com' = correoContaminacion AND cuerpoAgua LIKE '%R15%');


//SELECT * FROM `contaminacion` WHERE correoContaminacion = 'venusayurialmeida.99@gmail.com' AND codigoAgua LIKE '%R%' OR correoContaminacion = 'venusayurialmeida.99@gmail.com' AND nivelContaminante LIKE '%R%' OR correoContaminacion = 'venusayurialmeida.99@gmail.com' AND nombreAgua LIKE '%R%' OR correoContaminacion = 'venusayurialmeida.99@gmail.com' AND cuerpoAgua LIKE '%R%';



//SELECT * FROM `contaminacion` WHERE `correoContaminacion` = 'anfeli201111@gmail.com' AND `codigoAgua` LIKE '%R%' OR `nivelContaminante` LIKE '%R%' OR `nombreAgua` LIKE '%R%' OR `cuerpoAgua` LIKE '%R%'
//SELECT * FROM `contaminacion` WHERE `correoContaminacion` = 'anfeli201111@gmail.com' AND codigoAgua LIKE '%R%' OR nivelContaminante LIKE '%R%' AND nombreAgua LIKE '%R%' AND cuerpoAgua LIKE '%R%';

/*if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 1; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}*/

$sql = "SELECT * FROM contaminacion $where";
//$sql = "SELECT " . implode(", ", $columns) . " FROM $table $where"; // AND correo = '$correo';
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['codigoAgua'] . '</td>';
        $html .= '<td>' . $row['nombreAgua'] . '</td>';
        $html .= '<td>' . $row['cuerpoAgua'] . '</td>';
        $html .= '<td>' . $row['nivelContaminante'] . '</td>';
        $html .= '<td><a href="#" onclick="editar()">Editar</a></td>';
        $html .= '<td><a href="#" onclick="eliminar()">Eliminar</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="6">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);