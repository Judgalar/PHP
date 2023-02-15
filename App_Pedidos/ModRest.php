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
		<title>ModRest</title>
	</head>
	<body>
		<?php 
            require 'CabeceraAdmin.php';
            require_once 'BD_Admin.php';
            require_once 'bd.php';
            //require 'GestRest.php';

            echo '<h1>Modificar Restaurante</h1>';
        
            error_reporting(0);

            // Obtengo las variables
            $CodRes = $_REQUEST['CodRes'];
            

            $restaurante = CargarRestaurante($CodRes);

      echo '<form action = "GuardarModRest.php" method = "POST">';
            echo '<table>'; //abrir la tabla
            echo '<tr><th colspan="2">Modificar Restaurante</th></tr>';
            echo '<tr><td>Código</td>';
            echo '<td><input readonly name="CodRest" type="text" value="'.$restaurante["CodRes"].'"></td></tr>';
            echo '<tr><td>Correo</td>';
            echo '<td><input  name="Correo" type="text" value="'.$restaurante["Correo"].'"></td></tr>';
            echo '<tr><td>Clave</td>';
            echo '<td><input name="Clave" type="text" value="'.$restaurante["Clave"].'"></td></tr>';
            echo '<tr><td>País</td>';
            echo '<td><input name="Pais" type="text" value="'.$restaurante["Pais"].'"></td></tr>';
            echo '<tr><td>CP</td>';
            echo '<td><input name="CP" type="number" value="'.$restaurante["CP"].'"></td></tr>';
            echo '<tr><td>Ciudad</td>';
            echo '<td><input name="Ciudad" type="text" value="'.$restaurante["Ciudad"].'"></td></tr>';
            echo '<tr><td>Direccion</td>';
            echo '<td><input name="Direccion" type="text" value="'.$restaurante["Direccion"].'"></td></tr>';
            echo '<tr><td>Admin?</td>';
            echo '<td><input name="EsAdmin" type="boolean" value="'.$restaurante["EsAdmin"].'"></td></tr>';
            echo '<tr><td colspan = "2">';
            echo "<input type = 'submit' name='enviar' value='Modificar'></td></tr></table>";
      echo '</form>'
                
		?>
    
	</body>
</html>