<!-- (7oct22) Programa anterior pero definiendo la función   TérminoFibonacciRecursiva 
que hace lo mismo que la función TerminoFibonacci  pero resolviéndolo de manera recursiva,
 es decir con llamadas a la propia función donde corresponda.  -->

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
	// Definir la función TerminoFibonacciRecursiva
	function TerminoFibonacciRecursiva($posicion) {
		// Casos base
		if ($posicion == 1 || $posicion == 2) {
			return 1;
		}

		// Llamada recursiva para calcular el término correspondiente a la posición
		return TerminoFibonacciRecursiva($posicion - 1) + TerminoFibonacciRecursiva($posicion - 2);
	}

	// Comprobar si se ha enviado el formulario
	if (isset($_POST['num'])) {
		// Obtener el número de términos
		$num_terms = $_POST['num'];

		// Imprimir los términos de la serie de Fibonacci
		for ($i = 1; $i <= $num_terms; $i++) {
			// Llamar a la función TerminoFibonacciRecursiva para obtener el término correspondiente
			$term = TerminoFibonacciRecursiva($i);

			// Imprimir el término
			echo "$term ";
		}
	}
	?>
</body>
</html>
