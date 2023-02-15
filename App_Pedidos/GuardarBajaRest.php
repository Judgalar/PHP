<?php 
	
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Modificar Baja Restaurantes</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		$CodRest =$_REQUEST['CodRest'];
		$Correo =$_REQUEST['Correo'];
		$Clave = $_REQUEST['Clave'];
		$Pais = $_REQUEST['Pais'];
		$CP = $_REQUEST['CP'];
		$Ciudad = $_REQUEST['Ciudad'];
        	$Direccion = $_REQUEST['Direccion'];
		$EsAdmin = $_REQUEST['EsAdmin'];


	 
		$consulta = "DELETE FROM Restaurantes WHERE CodRest='".$CodRest."';";
		
		$resul=mysqli_query($conexion, $consulta) or die("consulta incorrecta");

		

		
	</body>
</html>