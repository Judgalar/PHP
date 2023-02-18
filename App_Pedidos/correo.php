<?php
use PHPMailer\PHPMailer\PHPMailer;
require dirname(__FILE__)."/vendor/autoload.php";
function enviar_correos($carrito, $pedido, $correo){
	$cuerpo = crear_correo($carrito, $pedido, $correo);
	return enviar_correo_multiples("$correo, pedidos@empresafalsa.com", 
                        	$cuerpo, "Pedido $pedido confirmado");
}
function crear_correo($carrito, $pedido, $correo){
	$texto = "<h1>Pedido nº $pedido </h1><h2>Restaurante: $correo </h2>";
	$texto .= "Detalle del pedido:";
	$productos = cargar_productos(array_keys($carrito));	
	$texto .= "<table>"; //abrir la tabla
	$texto .= "<tr><th>Nombre</th><th>Descripción</th><th>Peso</th><th>Unidades</th></tr>";
	/* EJERCICIO 4.4. Incluir el peso total en el correo */
	//init peso total
	$pesoTotal = 0;
	foreach($productos as $producto){
		$cod = $producto['CodProd'];
		$nom = $producto['Nombre'];
		$des = $producto['Descripcion'];
		$peso = $producto['Peso'];
		$unidades = $_SESSION['carrito'][$cod];		
		// sumar peso	
		$pesoTotal = $pesoTotal + $peso * $unidades;
		$texto .= "<tr><td>$nom</td><td>$des</td><td>$peso</td><td>$unidades</td>
		<td> </tr>";
	}
	$texto .= "</table>";	
	// incluir el peso en el texto
	$texto .= "<p>Peso total: $pesoTotal</p>";
	return $texto;
}

	function leer_conf_correo(){	
		$dept = new DOMDocument();
		$dept->load( 'configuracion_correo.xml' );
		$res = $dept->schemaValidate('configuracion_correo.xsd');
		if (!$res){ 
		   throw new InvalidArgumentException("Revise fichero de configuración");
		} 
		else { 
		   $datos = simplexml_load_file("configuracion_correo.xml");	
		   $host = $datos->xpath("//host");
		   $port = $datos->xpath("//port");
	       $usu = $datos->xpath("//user");
		   $clave = $datos->xpath("//password");		
		   $resul = [];
		   $resul[] = $host[0];
		   $resul[] = $port[0];
		   $resul[] = $usu[0];
		   $resul[] = $clave[0];
		   return $resul;
		}
	}
/* EJERCICIO 3.6: coger los datos del servidor de correo de un fichero XML*/	
function enviar_correo_multiples($lista_correos,  $cuerpo,  $asunto = ""){
		$datos = leer_conf_correo();

		$mail = new PHPMailer();		
		$mail->IsSMTP(); 					
		$mail->SMTPDebug  = 0;  // cambiar a 1 o 2 para ver errores
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "tls";                 
		$mail->Host       = $datos[0];      
		$mail->Port       = $datos[1];                   
		$mail->Username   = $datos[2];  //usuario de gmail
		$mail->Password   = $datos[3]; //contraseña de gmail          
		$mail->SetFrom('noreply@empresafalsa.com', 'Sistema de pedidos');
		$mail->Subject    = $asunto;
		$mail->MsgHTML($cuerpo);
		/*partir la lista de correos por la coma*/
		$correos = explode(",", $lista_correos);
		foreach($correos as $correo){
			$mail->AddAddress($correo, $correo);
		}
		if(!$mail->Send()) {
		  return $mail->ErrorInfo;
		} else {
		  return TRUE;
		}
	}	
