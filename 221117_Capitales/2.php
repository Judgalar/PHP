<?php

    $paises = array("España", "Francia", "Italia", "Portugal");
    $capitales = array("Madrid", "París", "Roma", "Lisboa");

    if (isset($_POST['pais'])) {
        $pais_seleccionado = $_POST['pais'];
        for ($i = 0; $i < count($paises); $i++) {
            if ($pais_seleccionado == $paises[$i]) {
                echo "La capital de ".$paises[$i]." es ".$capitales[$i]."<br>";
            }
        }
    }
?>

<form method="post" action="">
    <label for="pais">Selecciona un país:</label>
    <select name="pais">
        <?php
        for ($i = 0; $i < count($paises); $i++) {
            echo "<option value='".$paises[$i]."'>".$paises[$i]."</option>";
        }
        ?>
    </select>
    <input type="submit" value="Consultar">
</form>
