<?php
session_start();
require_once "conexion.php";

// Verificar si el usuario tiene la sesión iniciada
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $situacion = $_POST['situacion'];
    $enlace = $_POST['cv'];
    // Verificar si el enlace no comienza con "http://" o "https://"
    if (!preg_match("~^(?:f|ht)tps?://~i", $enlace)) {
        $cv = "https://" . $enlace;
    } else $cv = $enlace;

    // Realizar la consulta para obtener la información del usuario
    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono', direccion='$direccion', curriculum='$cv', situacion_laboral='$situacion' WHERE nickName='$usuario'";
    
    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo "Datos actualizados exitosamente.";
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conn);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
    header("Location: perfil.php");
}
else echo 'Se ha perdido la sesion'
?>