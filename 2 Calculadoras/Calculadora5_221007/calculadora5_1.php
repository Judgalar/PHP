<!--Calculadora esta vez con un dato de entrada y un menú desplegable con las siguientes operaciones:
“Divisores” : 		Escribir los divisores de ese número 
“SumaDivisores”: 	Escribir cuánto suman sus divisores.
“Factorial”: 		Escribe el factorial de ese número.
“Primo”: 		Escribe si ese número es primo o no. 
“Tabla”:		Escribe la tabla de multiplicar de ese número. 

Solución1: Sin usar funciones.(7oct22)-->

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
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$numero = $_POST['numero'];
		$operacion = $_POST['operacion'];

		switch ($operacion) {
			case 'divisores':
				echo 'Los divisores de '.$numero.' son: ';
				for ($i=1; $i <= $numero; $i++) { 
					if ($numero % $i == 0) {
						echo $i.' ';
					}
				}
				break;
			case 'suma_divisores':
				$suma = 0;
				for ($i=1; $i <= $numero; $i++) { 
					if ($numero % $i == 0) {
						$suma += $i;
					}
				}
				echo 'La suma de los divisores de '.$numero.' es: '.$suma;
				break;
			case 'factorial':
				$factorial = 1;
				for ($i=2; $i <= $numero; $i++) { 
					$factorial *= $i;
				}
				echo 'El factorial de '.$numero.' es: '.$factorial;
				break;
			case 'primo':
				$primo = true;
				for ($i=2; $i < $numero; $i++) { 
					if ($numero % $i == 0) {
						$primo = false;
						break;
					}
				}
				if ($primo) {
					echo $numero.' es primo.';
				} else {
					echo $numero.' no es primo.';
				}
				break;
			case 'tabla':
				echo 'Tabla de multiplicar de '.$numero.':<br>';
				for ($i=1; $i <= 10; $i++) { 
					echo $numero.' x '.$i.' = '.$numero*$i.'<br>';
				}
				break;
			default:
				echo 'Operación no válida.';
				break;
		}
	}
	?>
</body>
</html>
