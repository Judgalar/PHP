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
		<title>Modificar Guardar Categoria</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		//establecer conexion 
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		// Obtengo las variables de la categoria
		$CodCat =$_REQUEST['CodCat'];
		$Nombre =$_REQUEST['Nombre'];
		$Descripcion = $_REQUEST['Descripcion'];

		$consulta = "UPDATE CATEGORIAS SET Nombre='$Nombre', Descripcion='$Descripcion' WHERE CodCat='$CodCat';";
		
		$resul = $bd->query($consulta);	
		
		if (!$resul){
			echo('<p> No se ha podido guardar la modificación realizada </p>');
		}else{
			echo('<p> Se acaba de actualizar las categorias modificadas </p>');
		};

		
		?>	


		

		
	</body>
</html>