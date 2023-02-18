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
		<title>ModProd</title>
	</head>
	<body>
		<?php 
            require 'CabeceraAdmin.php';
            require_once 'BD_Admin.php';
            require_once 'bd.php';
            //require 'GestCat.php';

            echo '<h1>Modificar Categorías</h1>';
        
            error_reporting(0);

            // Obtengo las variables
            $CodCat = $_REQUEST['CodCat'];
            

            $categoria= CargarCategoria($CodCat);

      echo '<form action = "GuardarModCat.php" method = "POST">';
            echo '<table>'; //abrir la tabla
            echo '<tr><th colspan="2">Modificar Categoría</th></tr>';
            echo '<tr><td>Código</td>';
            echo '<td><input readonly name="CodCat" type="text" value="'.$categoria["CodCat"].'"></td></tr>';
            echo '<tr><td>Nombre</td>';
            echo '<td><input name="Nombre" type="text" value="'.$categoria["Nombre"].'"></td></tr>';
            echo '<tr><td>Descripcion</td>';
            echo '<td><input name="Descripcion" type="text" value="'.$categoria["Descripcion"].'"></td></tr>';
            echo '<tr><td colspan = "2">';
            echo "<input type = 'submit' name='enviar' value='Modificar'></td></tr></table>";
      echo '</form>'
                
		?>
    
	</body>
</html>