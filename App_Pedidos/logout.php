<?php

	//session_start();    // unirse a la sesión
						//comprobar si existe la variable usuario????
	require_once 'sesiones.php';	
	comprobar_sesion();
	$_SESSION = array();
	session_destroy();	// eliminar la sesion
	setcookie(session_name(), 123, time() - 1000); // eliminar la cookie

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Sesión cerrada</title>
		<link href=".//css/logout.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	</head>
	<body>
		<p class="sesion">La sesión se cerró correctamente, hasta la próxima</p>
		<a href = "login.php" class="sesion_enlace">Ir a la página de login</a>
	</body>
</html>

