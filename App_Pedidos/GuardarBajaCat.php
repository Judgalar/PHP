<?php 
	
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Modificar Baja Categorias</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		
		$Nombre =$_REQUEST["nombre"];
		$Descripcion = $_REQUEST["descripcion"];
		$Peso = $_REQUEST["peso"];
		$Stock = $_REQUEST["stock"];
		$Categoria = $_REQUEST["categoria"];

		$consulta = "DELETE FROM Categorias WHERE CodCat='".$CodCat."';";
		
		$resul=mysqli_query($conexion, $consulta) or die("consulta incorrecta");

		

		?>
	</body>
</html>