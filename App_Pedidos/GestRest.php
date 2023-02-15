<!-- @utor RuleTeMata -->

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
    <title>Gestion de restaurantes</title>
</head>
<body>
   <?php
    require 'CabeceraAdmin.php';
    echo "<h1>Gestion de restaurantes</h1>";
    $restaurantes=CargarRestaurantes();
    
    if ($restaurantes) {

            echo "<table><tr>
            <th>Codigo del restaurante</th>
            <th>Nombre</th>"; 
             echo "</tr> ";      
    foreach($restaurantes as $restaurante) {
	$urlMod="ModRest.php?CodRes=".$restaurante['CodRes'];
	$urlBaja="BajaRest.php?CodRes=".$restaurante['CodRes'];
        echo "<tr>
                <td>".$restaurante['CodRes']."</td>
                <td>".$restaurante['Correo']."</td>
                <td> <a href=".$urlMod."> Modificar</a></td>
                <td> <a href=".$urlBaja."> Eliminar</a></td>
            </tr>\n";
        
    }

    echo "</table>";
    echo "<a href='AltaRest.php'> Añadir</a>";
    
    }else{
        echo "no se pudo cargar";
    }

    

?> 
</body>
</html>