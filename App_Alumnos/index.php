<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="index.php" method="post">
                <input type="text" name="usuario" placeholder="Nombre de usuario" required/>
                <input type="password" name="contrasena" placeholder="Contraseña" required/>
                <button>Iniciar sesión</button>
                <p class="message">¿No tienes una cuenta? <a href="registro.php">Crea una</a></p>
                <p id="error"></p>
            </form>
        </div>
    </div>
</body>
</html>

<?php
require_once "conexion.php";

session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: perfil.php");
}
else{
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
            header('Location: perfil.php');
        } else {
            // El usuario y/o la contraseña son incorrectos, mostrar un mensaje de error
            echo "<script>
                    error.style.color = 'red'
                    error.innerHTML = 'Usuario o contraseña incorrectos'
                </script>";
        }
    }
}

$conn->close();
?>
