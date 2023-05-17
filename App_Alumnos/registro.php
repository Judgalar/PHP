<!DOCTYPE html>
<html>

<head>
    <title>Alumnos</title>
    <link rel="stylesheet" type="text/css" href="css/perfil.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Registro</h1>
        </div>
    </header>
    <main>
    <div class="container"
        <?php
        require_once "conexion.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (
                isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) &&
                isset($_POST['telefono']) && isset($_POST['direccion']) && isset($_POST['cv']) &&
                isset($_POST['situacion'])
            ) {
                $nickName = $_POST['nickName'];
                $contrasena = $_POST['contrasena'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];
                $telefono = $_POST['telefono'];
                $direccion = $_POST['direccion'];
                $enlace = $_POST['cv'];
                $situacion = $_POST['situacion'];
                // Verificar si el enlace no comienza con "http://" o "https://"
                if (!preg_match("~^(?:f|ht)tps?://~i", $enlace)) {
                    $cv = "https://" . $enlace;
                } else $cv = $enlace;

                $sql = "INSERT INTO usuarios (nickName, contrasena, nombre, apellido, correo, telefono, direccion, curriculum, situacion_laboral) VALUES ('$nickName', '$contrasena', '$nombre', '$apellido', '$correo', '$telefono', '$direccion', '$cv', '$situacion')";
                // Ejecutar la consulta
                if (mysqli_query($conn, $sql)) {
                    echo '<script>alert("Registrado Correctamente")</script>';
                    mysqli_close($conn);
                    header("Location: index.php");
                } else {
                    echo "Error al registrar los datos: " . mysqli_error($conn);
                }
            }
            else{
                if (isset($_POST['nickName']) && isset($_POST['contrasena']) && isset($_POST['contrasena2'])) {

                    if ($_POST['contrasena'] == $_POST['contrasena2']) {
                        $nickName = $_POST['nickName'];
                        $contrasena = $_POST['contrasena'];

                        $sql = "SELECT * FROM usuarios WHERE nickName = '$nickName'";
                        $result = mysqli_query($conn, $sql);
                        if ($result->num_rows > 0) {
                            ?>
                            <div id="info">
                                <form class="datos" method="POST" action="registro.php">
                                    <input type="text" name="nickName" placeholder="Nombre de Usuario" required />
                                    <?php echo '<span style="color: red;">El nombre de usuario ya existe</span>' ?>
                                    <br>
                                    <input type="password" name="contrasena" placeholder="Contraseña" required />
                                    <input type="password" name="contrasena2" placeholder="Repite la contraseña" required />
                                    <br>
                                    <input type="submit" class="btn" />
                                </form>
                            </div>
                            <?php
                        }
                        else {
                            ?>
                            <div id="info">
                                <form class="datos" method="POST" action="registro.php">
                                    <input type="text" name="nickName" value="<?php echo $nickName; ?>" style="display:none" />
                                    <input type="password" name="contrasena" value="<?php echo $contrasena; ?>" style="display:none" />
                                    <input type="text" name="nombre" placeholder="Nombre" required />
                                    <input type="text" name="apellido" placeholder="Apellido" required />
                                    <input type="email" name="correo" placeholder="E-mail" required />
                                    <input type="tel" name="telefono" placeholder="Teléfono" required />
                                    <input type="text" name="direccion" placeholder="Dirección" required />
                                    <input type="text" name="cv" placeholder="Link Currículum" required />
                                    <input type="text" name="situacion" placeholder="Situación" required />
                                    <input type="submit" class="btn" />
                                </form>
                            </div>
                            <?php
                        }
                    } 
                    else {
                        ?>
                        <div id="info">
                            <form class="datos" method="POST" action="registro.php">
                                <input type="text" name="nickName" placeholder="Nombre de Usuario" required />
                                <br>
                                <input type="password" name="contrasena" placeholder="Contraseña" required />
                                <input type="password" name="contrasena2" placeholder="Repite la contraseña" required />
                                <?php echo '<span style="color: red;">Las contraseñas no coinciden</span>' ?>
                                <br>
                                <input type="submit" class="btn" />
                            </form>
                        </div>
                        <?php
                    }
                } else {
                    echo '<script>alert("Las contraseñas no se han leido")</script>'
                    ?>
                    <div id="info">
                        <form class="datos" method="POST" action="registro.php">
                            <input type="text" name="nickName" placeholder="Nombre de Usuario" required />
                            <br>
                            <input type="password" name="contrasena" placeholder="Contraseña" required />
                            <input type="password" name="contrasena2" placeholder="Repite la contraseña" required />
                            <br>
                            <input type="submit" class="btn" />
                        </form>
                    </div>
                    <?php
                }
            }
            

        } else {
            ?>
            <div id="info">
                <form class="datos" method="POST" action="registro.php">
                    <input type="text" name="nickName" placeholder="Nombre de Usuario" required />
                    <br>
                    <input type="password" name="contrasena" placeholder="Contraseña" required />
                    <input type="password" name="contrasena2" placeholder="Repite la contraseña" required />
                    <br>
                    <input type="submit" class="btn" />
                </form>
            </div>
            <?php
        }
        ?>
    </div>
    </main>
    <a href="index.php"><button type="button" class="btn">Volver</button></a>
</body>

</html>