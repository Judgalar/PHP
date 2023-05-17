<!DOCTYPE html>
<html>
	<head>
		<title>Alumnos</title>
		<link rel="stylesheet" type="text/css" href="css/perfil.css">
	</head>
	<body>
		<header>
			<div class="container">
				<h1>Mi perfil</h1>
				<nav>
					<ul>
						<li><a href="#">Mi perfil</a></li>
						<li><a href="usuarios.php">Usuarios</a></li>
						<li><a href="cerrarSesion.php">Cerrar sesión</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<main>
			<?php
			session_start();
			require_once "conexion.php";

			// Verificar si el usuario tiene la sesión iniciada
			if (isset($_SESSION['usuario'])) {
				$usuario = $_SESSION['usuario'];

				// Realizar la consulta para obtener la información del usuario
				$query = "SELECT * FROM Usuarios WHERE nickName = '$usuario'";
				$result = $conn->query($query);

				// Verificar si se encontró el usuario
				if ($result->num_rows > 0) {
					$row = $result->fetch_assoc();
					
					// Obtener los datos del usuario
					$nombre = $row['nombre'];
					$apellido = $row['apellido'];
					$correo = $row['correo'];
					$telefono = $row['telefono'];
					$direccion = $row['direccion'];
					$cv = $row['curriculum'];
					$situacion = $row['situacion_laboral'];

					echo '
						<div class="container" id="perfil">
							<h2>Bienvenido, '.$usuario.'</h2>
							<p>Información personal:</p>
							<div id="info">
								<ul class="datos">
									<li id="nombre"><strong>Nombre:</strong> '.$nombre.'</li>
									<li id="apellido"><strong>Apellido:</strong> '.$apellido.'</li>
									<li id="correo"><strong>Correo electrónico:</strong> '.$correo.'</li>
									<li id="telefono"><strong>Teléfono:</strong> '.$telefono.'</li>
									<li id="direccion"><strong>Dirección:</strong> '.$direccion.'</li>
									<li id="cv"><strong>Currículum:</strong> <a href="'.$cv.'" target="_blank">CV</a> </li>
									<li id="situacion"><strong>Situación:</strong> '.$situacion.'</li>
								</ul>
							</div>
							<br>
							<button type="button" class="btn" id="BTNEditar">Editar información personal</button>
						</div>
					';					


							
				} else {
					echo "No se encontró información del usuario.";
				}
			} else {
				// Si el usuario no tiene la sesión iniciada, redirigir a la página de inicio de sesión
				header("Location: index.php");
				exit();
			}

			// Cerrar la conexión a la base de datos
			$conn->close();
			?>
		</main>
		<script src="js/editarPerfil.js"></script>
	</body>
</html>
