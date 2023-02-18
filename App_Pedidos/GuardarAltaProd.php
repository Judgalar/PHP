<HTML>
  <HEAD>
   <TITLE>Productos</TITLE>
  </HEAD>
  <BODY>

<?php
require_once 'bd.php';
require_once 'sesiones.php';
comprobar_sesion();

require_once 'BD_ADMIN.php';
require 'CabeceraAdmin.php';
//require 'productos.php';


   
	
	$Nombre =$_REQUEST["Nombre"];
	$Descripcion = $_REQUEST["Descripcion"];
	$Peso = $_REQUEST["Peso"];
	$Stock = $_REQUEST["Stock"];
	$Categoria = $_REQUEST["Categoria"];



    $consulta = "INSERT INTO PRODUCTOS ( Nombre, Descripcion, Peso, Stock, Categoria)
				VALUES ( '$Nombre', '$Descripcion', '$Peso', '$Stock', '$Categoria');";
	
	
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);


	$resul = $bd->query($consulta);	
	if (!$resul) {
		echo "No se ha podido dar de alta el nuevo producto";
	}else{
		echo "<h1>Se ha insertado el nuevo producto correctamente</h1>";
	}
		

		
?>

