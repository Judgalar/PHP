<!DOCTYPE html>
<html>
<head>
	<title>Calculadora en PHP</title>
</head>
<body>
	<h2>Calculadora en PHP</h2>
	<form method="post">
		<label for="numero">Introduce un número:</label>
		<input type="number" name="numero" id="numero" required>
		<label for="operacion">Elige una operación:</label>
		<select name="operacion" id="operacion">
			<option value="divisores">Divisores</option>
			<option value="suma_divisores">Suma de divisores</option>
			<option value="factorial">Factorial</option>
			<option value="primo">Primo</option>
			<option value="tabla">Tabla de multiplicar</option>
		</select>
		<button type="submit">Calcular</button>
	</form>

	<?php
		function calcular_divisores($numero) {
			$divisores = array();
			for ($i=1; $i <= $numero; $i++) { 
				if ($numero % $i == 0) {
					array_push($divisores, $i);
				}
			}
			return $divisores;
		}

		function calcular_suma_divisores($numero) {
			$suma = 0;
			for ($i=1; $i <= $numero; $i++) { 
				if ($numero % $i == 0) {
					$suma += $i;
				}
			}
			return $suma;
		}

		function calcular_factorial($numero) {
			$factorial = 1;
			for ($i=2; $i <= $numero; $i++) { 
				$factorial *= $i;
			}
			return $factorial;
		}

		function es_primo($numero) {
			if ($numero < 2) {
				return false;
			}
			for ($i=2; $i < $numero; $i++) { 
				if ($numero % $i == 0) {
					return false;
				}
			}
			return true;
		}

		function calcular_tabla($numero) {
			$tabla = '';
			for ($i=1; $i <= 10; $i++) { 
				$tabla .= $numero.' x '.$i.' = '.$numero*$i.'<br>';
			}
			return $tabla;
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$numero = $_POST['numero'];
			$operacion = $_POST['operacion'];

			switch ($operacion) {
				case 'divisores':
					$divisores = calcular_divisores($numero);
					echo 'Los divisores de '.$numero.' son: '.implode(' ', $divisores);
					break;
				case 'suma_divisores':
					$suma = calcular_suma_divisores($numero);
					echo 'La suma de los divisores de '.$numero.' es: '.$suma;
					break;
				case 'factorial':
					$factorial = calcular_factorial($numero);
					echo 'El factorial de '.$numero.' es: '.$factorial;
					break;
				case 'primo':
					if (es_primo($numero)) {
						echo $numero.' es primo.';
					} else {
						echo $numero.' no es primo.';
					}
					break;
				case 'tabla':
					$tabla = calcular_tabla($numero);
					echo 'Tabla de multiplicar de '.$numero.':<br>'.$tabla;
					break;
				default:
					echo 'Operación no válida.';
					break;
			}
		}
	?>
</body>
</html>
