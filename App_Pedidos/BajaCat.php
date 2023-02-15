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
		<title>Eliminar Categorías</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		//establecer conexion 
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		// Obtengo las variables
		$CodCat =$_REQUEST['CodCat'];
			 
		$consulta = "DELETE FROM CATEGORIAS WHERE CodCat='$CodCat';";
		
		$resul = $bd->query($consulta);	
		
		if (!$resul){
			echo('<p> No se ha podido eliminar la categoría </p>');
		}else{
			echo('<p> Se acaba de eliminar la categoría seleccionada </p>');
		};

		

		?>	


		

		
	</body>
</html>
