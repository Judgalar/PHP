<HTML>
  <HEAD>
   <TITLE>ALTA DE CATEGORIAS</TITLE>
  </HEAD>
  <BODY>

<?php
require_once 'bd.php';
require_once 'sesiones.php';
comprobar_sesion();

require_once 'BD_ADMIN.php';
require 'CabeceraAdmin.php';
    
	
    $Nombre =$_REQUEST["Nombre"];
    $Descripcion = $_REQUEST["Descripcion"];
	
    $consulta = "INSERT INTO CATEGORIAS (Nombre, Descripcion)
				VALUES ( '$Nombre', '$Descripcion');";
	
	
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);

   
	$resul = $bd->query($consulta);	
	if (!$resul) 
    {
		echo "No se ha podido dar de alta la nueva categoría";
	}
    else
    {
		echo "<h1>Se ha insertado la nueva categoría correctamente</h1>";
	}
		

		
?>

