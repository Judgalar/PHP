<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>GestAdmin</title>		
	</head>
	<body>
    <?php require 'CabeceraAdmin.php';?>
    <h1>Menú de gestión del Administrador</h1>
        <ul>
            <li>Restaurantes: Nos lleva al archivo GestRest.php para poder
                 añadir, modificar o eliminar restaurantes</li><br>
            <li>Categorías: Nos lleva al archivo GestCat.php para poder
                 añadir, modificar o eliminar categorías</li><br>
            <li>Productos: Nos lleva al archivo GestProd.php para poder
                 añadir, modificar o eliminar productos</li><br>
            <li> Cerrar sesión: Nos lleva a logout.php para cerrar sesión</li>
        </ul>
    </body>
</html>

