<?php
    require 'sesiones.php';
    require_once 'bd.php';
    comprobar_sesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Restaurante</title>
</head>
<body>
    <?php
        require 'CabeceraAdmin.php';
    ?>
    <form action="GuardarAltaRest.php" method = "POST">
        <label for="correo">Correo:</label>
        <br>
        <input type="email" name="Correo">
        <br>
        <label for="clave">clave:</label>
        <br>
        <input type="password" name="Clave">
        <br>
        <label for="pais">Pais:</label>
        <br>
        <input type="text" name="Pais">
        <br>
        <label for="cp">CP:</label>
        <br>
        <input type="number" name="CP">
        <br>
        <label for="ciudad">Ciudad:</label>
        <br>
        <input type="text" name="Ciudad">
        <br>
        <label for="direccion">Dirección:</label>
        <br>
        <input cols="30" rows="10" name="Direccion">
        <br>
        <label for="EsAdmin">¿Es Administrador?</label>
        <br>
        <input type="boolean" name="EsAdmin">
        <br>
        <br>
        <input type="submit" value="confirmar" name="enviar">
        <input type="reset" value="borrar" name="borrar">
    </form>
</body>
</html>