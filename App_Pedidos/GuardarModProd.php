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
		<title>Modificar Guardar Productos</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		//establecer conexion 
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		// Obtengo las variables
		$CodProd =$_REQUEST['CodProd'];
		$Nombre =$_REQUEST['Nombre'];
		$Descripcion = $_REQUEST['Descripcion'];
		$Peso = $_REQUEST['Peso'];
		$Stock = $_REQUEST['Stock'];
		$Categoria = $_REQUEST['Categoria'];//mirarr
	 
		$consulta = "UPDATE PRODUCTOS SET Nombre='$Nombre', Descripcion='$Descripcion', Peso='$Peso', Stock='$Stock', Categoria='$Categoria' WHERE CodProd='$CodProd';";
		
		$resul = $bd->query($consulta);	
		
		if (!$resul){
			echo('<p> No se ha podido guardar la modificación realizada </p>');
		}else{
			echo('<p> Se acaba de actualizar los productos modificados </p>');
		};

		

		?>	


		

		
	</body>
</html>