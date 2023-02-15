<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera</title>
    <link href=".//css/cabecera.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<body class="body-completo">

    <header>
    
        <h3> Usuario: <?php echo $_SESSION['usuario']['Correo']?></h3> 
        <a class="botones" href="categorias.php">Home</a>
        <a class="botones" href="carrito.php">Ver carrito</a> 
        <a class="botones" href="logout.php">Cerrar sesión</a>

   </header>
   <hr>
    
</body>
</html>
