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
		<title>Modificar Guardar Restaurantes</title>		
	</head>
	<body>
		<?php 
		require 'cabeceraAdmin.php';
		
		//establecer conexion 
		$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
		$bd = new PDO($res[0], $res[1], $res[2]);
		// Obtengo las variables del restaurante
		$CodRest =$_REQUEST['CodRest'];
		$Correo =$_REQUEST['Correo'];
		$Clave = $_REQUEST['Clave'];
		$Pais = $_REQUEST['Pais'];
		$CP = $_REQUEST['CP'];
		$Ciudad = $_REQUEST['Ciudad'];
        $Direccion = $_REQUEST['Direccion'];
		$EsAdmin = $_REQUEST['EsAdmin'];

		$consulta = "UPDATE RESTAURANTES SET Correo='$Correo', Clave='$Clave', Pais='$Pais', CP='$CP', Ciudad='$Ciudad', Direccion='$Direccion', EsAdmin='$EsAdmin' WHERE CodRes='$CodRest';";
		
		$resul = $bd->query($consulta);	
		
		if (!$resul){
			echo('<p> No se ha podido guardar la modificación realizada </p>');
		}else{
			echo('<p> Se acaba de actualizar los restaurantes modificados </p>');
		};

		

		?>	


		

		
	</body>
</html>