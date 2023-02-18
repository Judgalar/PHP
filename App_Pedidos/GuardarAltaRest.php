<HTML>
  <HEAD>
   <TITLE>ALTA DE USUARIOS</TITLE>
  </HEAD>
  <BODY>

<?php
require_once 'bd.php';
require_once 'sesiones.php';
comprobar_sesion();

require_once 'BD_ADMIN.php';
require 'CabeceraAdmin.php';
    
	
    $Correo =$_REQUEST["Correo"];
    $Clave = $_REQUEST["Clave"];
	$Pais = $_REQUEST["Pais"];
 $CP = $_REQUEST["CP"];
 $Ciudad = $_REQUEST["Ciudad"]; 
 $Direccion = $_REQUEST["Direccion"];
 $EsAdmin = $_REQUEST["EsAdmin"];
     $consulta = "INSERT INTO RESTAURANTES (Correo, Clave,Pais, CP, Ciudad,Direccion, EsAdmin )
				VALUES ( '$Correo', '$Clave','$Pais','$CP','$Ciudad','$Direccion','$EsAdmin');";
	
	
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);

   
	$resul = $bd->query($consulta);	
	if (!$resul) 
    {
		echo "No se ha podido dar de alta al nuevo usuario";
	}
    else
    {
		echo "<h1>Se ha insertado el nuevo usuario correctamente</h1>";
	}
		

		
?>

