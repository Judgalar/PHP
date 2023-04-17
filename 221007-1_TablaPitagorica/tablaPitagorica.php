<!-- (7oct22) Programa que usando las etiquetas de tablas de html y bucles for escribe en pantalla
 la tabla pitagórica que incluya las tablas del 1 al 12. Debe aparecer la primera fila y 
 la primera columna con un color de fondo distinto al fondo del resto de la tabla.  
Podéis mejorar la presentación usando otros herramientas de html y css vistos el curso pasado.  -->


<!DOCTYPE html>
<html>
<head>
	<title>Tabla Pitagórica</title>
</head>
<body>
	<table border="1">
		<tr>
			<th bgcolor="#CCCCCC"></th>
			<?php
			// Imprimir la primera fila con los números del 1 al 12
			for ($i = 1; $i <= 12; $i++) {
				echo "<th bgcolor='#CCCCCC'>$i</th>";
			}
			?>
		</tr>
		<?php
		// Imprimir el resto de la tabla
		for ($i = 1; $i <= 12; $i++) {
			echo "<tr>";
			echo "<th bgcolor='#CCCCCC'>$i</th>";
			for ($j = 1; $j <= 12; $j++) {
				echo "<td>" . ($i * $j) . "</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>
