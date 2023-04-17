<?php
    $x = $_GET['valor1'];
    $y = $_GET['valor2'];

    $suma = $x + $y;
    $resta = $x - $y;
    $producto = $x * $y;
    $division = $x / $y;
    $raiz = "VALOR1 = " . sqrt($x) . ", VALOR2 = " . sqrt ($y);
    $modulo = $x % $y;
    $potencia = "$x" . " elevado a " . "$y" . " = " . pow($x,$y);

    echo"<h3>Suma: </h3>" . $suma;
    echo"<h3>Resta: </h3>" . $resta;
    echo"<h3>Producto: </h3>" . $producto;
    echo"<h3>Division: </h3>" . $division;
    echo"<h3>Raíz: </h3>" . $raiz;
    echo"<h3>Módulo: </h3>" . $modulo;
    echo"<h3>Potencia: </h3>" . $potencia;

    echo "\n";
    echo "<h3>Mayor: </h3>";
    
    if($x>$y) echo "$x" . " es mayor que " . "$y";
    if($x<$y) echo "$x" . " es menor que " . "$y";
    if($x==$y) echo "$x" . " es igual que " . "$y";
?>