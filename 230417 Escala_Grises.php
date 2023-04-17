<!DOCTYPE html>
<html>
<head>
    <title>Tabla con escala de grises</title>
</head>
<body>

    <table border="1">
        <?php
            $filas = 7;
            $columnas = 8;
            $color = 0;
            // Bucle para filas
            for ($i = 0; $i < $filas; $i++) {
                echo "<tr>";
                
                // Bucle para columnas
                for ($j = 0; $j < $columnas; $j++) {

                    // Establecer el color de fondo de la celda en función de su posición
                    echo "<td style='background-color: rgb($color,$color,$color);'>HOLAMUNDO</td>";
                    $color += 5;
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>