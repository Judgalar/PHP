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
