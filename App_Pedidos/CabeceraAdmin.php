<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabeceraAdmin</title>
    <link rel="stylesheet" type="text/css" href="./css/cabeceraAdmin.css">
</head>

<body class="body_cabeceraAdmin">

    <header>
        Usuario: <?php echo $_SESSION['usuario']['Correo']?>
        <a class="botones" href="GestRest.php">Restaurantes</a>
        <a class="botones" href="GestCat.php">Categorías</a>
        <a class="botones" href="GestProd.php">Productos</a>  
        <a class="botones" href="logout.php">Cerrar sesión</a>
    </header>
    <hr>
</body>
</html>