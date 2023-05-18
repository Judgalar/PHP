<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener el ID del usuario enviado como parámetro
    $nickName = $_GET['nickName'];

    // Realizar la lógica para obtener los detalles del usuario según el ID proporcionado
    $query = "SELECT * FROM Usuarios WHERE nickName = '$nickName' AND es_administrador = 0";
	$result = $conn->query($query);
    $row = $result->fetch_assoc();

    $infoUsuario = [
        'nickName' => $row['nickName'],
        'nombre' => $row['nombre'],
        'apellido' => $row['apellido'],
        'correo' => $row['correo'],
        'telefono' => $row['telefono'],
        'direccion' => $row['direccion'],
        'curriculum' => $row['curriculum'],
        'situacion_laboral' => $row['situacion_laboral']
    ];

    // Devolver los detalles del usuario en formato JSON
    header('Content-Type: application/json');
    echo json_encode($infoUsuario);
}
?>