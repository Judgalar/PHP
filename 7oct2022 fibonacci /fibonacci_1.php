<!DOCTYPE html>
<html>
<head>
	<title>Serie de Fibonacci</title>
</head>
<body>
	<form method="post">
		<label for="num">Número de términos:</label>
		<input type="number" id="num" name="num" min="1" max="50" required>
		<input type="submit" value="Generar">
	</form>
	<?php
	// Comprobar si se ha enviado el formulario
	if (isset($_POST['num'])) {
		// Obtener el número de términos
		$num_terms = $_POST['num'];

		// Inicializar los dos primeros términos de la serie
		$prev1 = 1;
		$prev2 = 1;

		// Imprimir los dos primeros términos
		echo "$prev1, $prev2";

		// Imprimir el resto de los términos
		for ($i = 3; $i <= $num_terms; $i++) {
			// Calcular el siguiente término
			$next = $prev1 + $prev2;

			// Imprimir el siguiente término
			echo ", $next";

			// Actualizar los valores de los términos previos
			$prev1 = $prev2;
			$prev2 = $next;
		}
	}
	?>
</body>
</html>
