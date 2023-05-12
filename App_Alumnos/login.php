<?php
session_start();

// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Alumnos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se produjo un error en la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar los valores de usuario y contraseña enviados desde el formulario
if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar si el usuario y la contraseña son válidos
    $sql = "SELECT * FROM Usuarios WHERE nickname = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // El usuario y la contraseña son válidos, crear una sesión
        $_SESSION['usuario'] = $usuario;
        header('Location: usuarios.php');
    } else {
        // El usuario y/o la contraseña son incorrectos, mostrar un mensaje de error
        echo "Nombre de usuario y/o contraseña incorrectos";
    }
}

$conn->close();
?>
