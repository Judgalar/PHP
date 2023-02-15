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
		<title>Eliminar Restaurantes o usuarios</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		//establecer conexion 
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		// Obtengo las variables
		$CodRest =$_REQUEST['CoRest'];
			 
		$consulta = "DELETE FROM RESTAURANTES WHERE CodRest='$CodRest';";
		
		$resul = $bd->query($consulta);	
		
		if (!$resul){
			echo('<p> No se ha podido eliminar el restaurante </p>');
		}else{
			echo('<p> Se acaba de eliminar el restaurante seleccionado </p>');
		};

		

		?>	


		

		
	</body>
</html>
