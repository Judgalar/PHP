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
        //require 'GestProd.php';

        echo '<h1>Modificar producto</h1>';
    
		error_reporting(0);

		// Obtengo las variables
		$CodProd = $_REQUEST['CodProd'];
		

			$producto = cargarProducto($CodProd);
		echo '<form action = "GuardarModProd.php" method = "POST">';
			echo '<table>'; //abrir la tabla
			echo '<tr><th colspan="2">Modificar Producto</th></tr>';
			echo '<tr><td>Código</td>';
			echo '<td><input readonly name="CodProd" type="text" value="'.$producto["CodProd"].'"></td></tr>';
			echo '<tr><td>Nombre</td>';
			echo '<td><input  name="Nombre" type="text" value="'.$producto["Nombre"].'"></td></tr>';
			echo '<tr><td>Descripcion</td>';
			echo '<td><input name="Descripcion" type="text" value="'.$producto["Descripcion"].'"></td></tr>';
			echo '<tr><td>Peso</td>';
			echo '<td><input name="Peso" type="text" value="'.$producto["Peso"].'"></td></tr>';
			echo '<tr><td>Stock</td>';
			echo '<td><input name="Stock" type="number" value="'.$producto["Stock"].'"></td></tr>';
			echo '<tr><td>Categoria</td>';
			echo '<td><select name="Categoria" id="Categoria">
					<option value = "'.$producto["Categoria"].'">'.$producto["Categoria"].'</option>';
					$categorias = CargarCategorias();
					$num = $categorias -> rowCount();
					for ($i = 1; $i<=$num; $i++)
					{
						if ($i != $producto["Categoria"])
						{
							echo '<option value = "'.$i.'">'.$i.'</option>';
						}
					};
					'</select><td>';
			echo '<tr><td colspan = "2">';
			echo "<input type = 'submit' name='enviar' value='Modificar'></td></tr></table>";
        echo '</form>'
							
		?>
    
    
		
	</body>
</html>