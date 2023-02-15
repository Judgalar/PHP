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
    <title>Alta Categoría</title>
</head>
<body>
    <?php
        require 'CabeceraAdmin.php';
    ?>
    <form action="GuardarAltaCat.php" method = "POST">
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="Nombre">
        <br>
        <label for="descripcion">Descripción:</label>
        <br>
        <textarea name="" id="" cols="30" rows="10" name="Descripcion"></textarea>
        <br>
        <br>
        <input type="submit" value="confirmar">
    </form>
</body>
</html>