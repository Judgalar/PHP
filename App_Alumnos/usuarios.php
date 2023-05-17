<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<link rel="stylesheet" type="text/css" href="css/usuarios.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Lista de usuarios</h1>
			<nav>
				<ul>
					<li><a href="perfil.php">Mi perfil</a></li>
					<li><a href="#">Usuarios</a></li>
					<li><a href="cerrarSesion.php">Cerrar sesión</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="user-list-header">
				<h2>Usuarios</h2>
				<div class="search-bar">
					<input type="text" placeholder="Buscar usuarios">
					<button>Buscar</button>
				</div>
			</div>
			<div class="user-list">
				<?php
					require_once "conexion.php";
					session_start();

					// Realizar la consulta para obtener todos los usuarios
					$query = "SELECT * FROM Usuarios WHERE es_administrador = 0";
					$result = $conn->query($query);

					// Verificar si hay registros devueltos
					if ($result->num_rows > 0) {
						// Recorrer los resultados y mostrar los usuarios
						while ($row = $result->fetch_assoc()) {
							// Acceder a los datos de cada usuario
							$usuario = $row['nickName'];
							$nombre = $row['nombre'];
							$apellido = $row['apellido'];
							
							// Mostrar la información del usuario
							echo ' <div class="user-card">
									<img src="https://via.placeholder.com/100" alt="Foto de perfil de '.$usuario.'">
									<div class="user-info">
										<h3>'.$usuario.'</h3>
										<p>'.$nombre.' '.$apellido.'</p>
									</div>
								</div> ';
						}
					} else {
						// Si no hay registros, mostrar un mensaje
						echo 'No se encontraron usuarios registrados.';
					}

					// Cerrar la conexión a la base de datos
					$conn->close();

				?>
			</div>
		</div>
	</main>
</body>
</html>


