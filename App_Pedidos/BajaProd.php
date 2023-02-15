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
		<title>Eliminar Productos</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		//establecer conexion 
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		// Obtengo las variables
		$CodProd =$_REQUEST['CodProd'];
			 
		$consulta = "DELETE FROM PRODUCTOS WHERE CodProd='$CodProd';";
		
		$resul = $bd->query($consulta);	
		
		if (!$resul){
			echo('<p> No se ha podido eliminar el producto </p>');
		}else{
			echo('<p> Se acaba de eliminar el productos seleccionado </p>');
		};

		

		?>	


		

		
	</body>
</html>
