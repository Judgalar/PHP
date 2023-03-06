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
	// Definir la función TerminoFibonacci
	function TerminoFibonacci($posicion) {
		// Inicializar los dos primeros términos de la serie
		$prev1 = 1;
		$prev2 = 1;

		// Calcular el término correspondiente a la posición
		if ($posicion == 1 || $posicion == 2) {
			return 1;
		} else {
			for ($i = 3; $i <= $posicion; $i++) {
				// Calcular el siguiente término
				$next = $prev1 + $prev2;

				// Actualizar los valores de los términos previos
				$prev1 = $prev2;
				$prev2 = $next;
			}

			return $prev2;
		}
	}

	// Comprobar si se ha enviado el formulario
	if (isset($_POST['num'])) {
		// Obtener el número de términos
		$num_terms = $_POST['num'];

		// Imprimir los términos de la serie de Fibonacci
		for ($i = 1; $i <= $num_terms; $i++) {
			// Llamar a la función TerminoFibonacci para obtener el término correspondiente
			$term = TerminoFibonacci($i);

			// Imprimir el término
			echo "$term ";
		}
	}
	?>
</body>
</html>
