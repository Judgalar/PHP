
<?php

//Devuelve array asociativo con la lista de productos, cada producto lleva codigo y nombre.
//Debe de pasar la conexion a la base de datos.
function CargarProductos(){

	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$consulta="select CodProd, Nombre from productos;";
	$productos = $bd->query($consulta);

	if (!$productos) {
		return FALSE;
	}
	if ($productos->rowCount() === 0) {    
		return FALSE;
    }

	return $productos;
}

//Devuelve array asociativo con la información de un producto.
//Debe de pasar la conexion a la base de datos y el codigo de producto.
function CargarProducto($codigoProd){

	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);

	$consulta="select * from productos WHERE CodProd='".$codigoProd."';";
	$producto = $bd->query($consulta);

	if (!$producto) {
		return FALSE;
	}
	if ($producto->rowCount() === 0) {    
		return FALSE;
    }

	return $producto->fetch();
}


//Devuelve array asociativo con la lista de Restaurantes, cada restaurante lleva codigo y nombre.
function CargarRestaurantes(){

	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);

	$consulta="select CodRes, Correo from restaurantes;";
	$restaurantes = $bd->query($consulta);

	if (!$restaurantes) {
		return FALSE;
	}
	if ($restaurantes->rowCount() === 0) {    
		return FALSE;
    }

	return $restaurantes;
}

//Devuelve array asociativo con la información de un restaurante.
function CargarRestaurante($codigoRest){

$consulta="select * from restaurantes WHERE CodRes='".$codigoRest."';";

	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);

	$consulta="select * from restaurantes WHERE CodRes='".$codigoRest."';";
	$restaurante = $bd->query($consulta);
	if (!$restaurante) {
		return FALSE;
	}
	if ($restaurante->rowCount() === 0) {    
		return FALSE;
    }

	return $restaurante->fetch();
	
}
function CargarCategorias(){

	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);
	$consulta="select CodCat, Nombre from CATEGORIAS;";
	$categorias = $bd->query($consulta);

	if (!$categorias) {
		return FALSE;
	}
	if ($categorias->rowCount() === 0) {    
		return FALSE;
    }

	return $categorias;
}
function CargarCategoria($codigoCat){

$consulta="select * from CATEGORIAS WHERE CodCat='".$codigoCat."';";

	$res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
	$bd = new PDO($res[0], $res[1], $res[2]);

	$consulta="select * from CATEGORIAS WHERE CodCat='".$codigoCat."';";
	$categoria = $bd->query($consulta);
	if (!$categoria) {
		return FALSE;
	}
	if ($categoria->rowCount() === 0) {    
		return FALSE;
    }

	return $categoria->fetch();
	
}


?>


