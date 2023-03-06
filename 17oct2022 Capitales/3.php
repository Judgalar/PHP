<!DOCTYPE html>
<html>
<head>
	<title>Países y Capitales</title>
</head>
<body>
	<h1>Países y Capitales</h1>
	<form method="post">
		<label for="pais">Selecciona un país:</label>
		<select name="pais">
			<?php
				$paises = array(
					"Argentina" => "Buenos Aires",
					"Brasil" => "Brasilia",
					"Colombia" => "Bogota",
					"Ecuador" => "Quito",
					"España" => "Madrid",
					"México" => "Ciudad de México",
					"Perú" => "Lima",
					"Uruguay" => "Montevideo",
					"Venezuela" => "Caracas"
				);

				foreach ($paises as $pais => $capital) {
					echo "<option value=\"$pais\">$pais</option>";
				}
			?>
		</select>
		<input type="submit" value="Consultar">
	</form>
	<?php
		if(isset($_POST['pais'])) {
			$capital = $paises[$_POST['pais']];
			echo "<p>La capital de ".$_POST['pais']." es ".$capital.".</p>";
		}
	?>
</body>
</html>
