<?php
require_once "conexion.php";

// Obtener el término de búsqueda enviado por AJAX
$query = $_POST['query'];

// Realizar la consulta utilizando una declaración preparada para evitar inyección de SQL
$stmt = $conn->prepare('SELECT * FROM Usuarios WHERE (nickName LIKE ? OR nombre LIKE ? OR apellido LIKE ?) AND es_administrador = 0');
$stmt->bind_param('sss', $queryParam1, $queryParam2, $queryParam3);
$queryParam1 = '%' . $query . '%';
$queryParam2 = '%' . $query . '%';
$queryParam3 = '%' . $query . '%';
$stmt->execute();

$resultados = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

// Generar el HTML con los resultados de la búsqueda
$html = '';
foreach ($resultados as $result) {
  $html .= '<div class="user-card" data-nickName="'.$result['nickName'].'">
                <img src="https://via.placeholder.com/100" alt="Foto de perfil de '.$result['nickName'].'">
                <div class="user-info" id="user-info">
                    <h3>'.$result['nickName'].'</h3>
                    <p>'.$result['nombre'].' '.$result['apellido'].'</p>
                </div>
            </div>';
}

// Enviar la respuesta al cliente
echo $html;

// Cerrar la conexión a la base de datos
$stmt->close();
$conn->close();
?>
