<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
    require_once 'BD_Admin.php';
	comprobar_sesion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de productos</title>
</head>
<body>
   <?php
    require 'CabeceraAdmin.php';
    echo "<h1>Gestion de productos</h1>";
    $productos=CargarProductos();
    
    if ($productos) {

            echo "<table><tr>
            <th>Codigo del producto</th>
            <th>Nombre</th>"; 
             echo "</tr> ";      
    foreach($productos as $producto) {
	$urlMod="ModProd.php?CodProd=".$producto['CodProd'];
	$urlBaja="BajaProd.php?CodProd=".$producto['CodProd'];
        echo "<tr>
                <td>".$producto['CodProd']."</td>
                <td>".$producto['Nombre']."</td>
                <td> <a href=".$urlMod."> Modificar</a></td>
                <td> <a href=".$urlBaja."> Eliminar</a></td>
            </tr>\n";
        
    }

    echo "</table>";
    echo "<a href='AltaProd.php'> Añadir</a>";
    
    }else{
        echo "no se pudo cargar";
    }

    

?> 
</body>
</html>

