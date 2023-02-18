<?php 
	
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Modificar Baja Productos</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		
		$CodProd =$_REQUEST['CodProd'];
		$Nombre =$_REQUEST['Nombre'];
		$Descripcion = $_REQUEST['Descripcion'];
		$Peso = $_REQUEST['Peso'];
		$Stock = $_REQUEST['Stock'];
		$Categoria = $_REQUEST['Categoria'];
	 
		$consulta = "DELETE FROM Productos WHERE CodProd='".$CodProd."';";
		
		$resul=mysqli_query($conexion, $consulta) or die("consulta incorrecta");

		

		?>
	</body>
</html>