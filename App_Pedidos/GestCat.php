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
    <title>Gestion de categorias</title>
</head>
<body>
   <?php
    require 'CabeceraAdmin.php';
    echo "<h1>Gestion de categorias</h1>";
    $categorias=CargarCategorias();
    
    if ($categorias) {

            echo "<table><tr>
            <th>Codigo de categoria </th>
            <th>Nombre</th>"; 
             echo "</tr> ";      
    foreach($categorias as $categoria) {
	$urlMod="ModCat.php?CodCat=".$categoria['CodCat'];
	$urlBaja="BajaCat.php?CodCat=".$categoria['CodCat'];
        echo "<tr>
                <td>".$categoria['CodCat']."</td>
                <td>".$categoria['Nombre']."</td>
                <td> <a href=".$urlMod."> Modificar</a></td>
                <td> <a href=".$urlBaja."> Eliminar</a></td>
            </tr>\n";
        
    }

    echo "</table>";
    echo "<a href='AltaCat.php'> Añadir</a>";
    
    }else{
        echo "no se pudo cargar";
    }

    

?> 
</body>
</html>