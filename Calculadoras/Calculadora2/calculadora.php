<?php
    $x = $_GET['valor1'];
    $y = $_GET['valor2'];
    $operacion = $_GET['operacion'];

    if($operacion == "suma"){
        $solucion = $x + $y;
        echo"<h3>Suma: </h3>";
    }
    if($operacion == "resta"){
        $solucion = $x - $y;
        echo"<h3>Resta: </h3>";
    }
    if($operacion == "producto"){
        $solucion = $x * $y;
        echo"<h3>Producto: </h3>";
    }
    if($operacion == "division"){
        $solucion = $x / $y;
        echo"<h3>Division: </h3>";
    }
    if($operacion == "raiz"){
        $solucion = "VALOR1 = " . sqrt($x) . ", VALOR2 = " . sqrt ($y);
        echo"<h3>Raíz: </h3>";
    }
    if($operacion == "modulo"){
        $solucion = $x % $y;
        echo"<h3>Módulo: </h3>";
    }
    if($operacion == "potencia"){
        $solucion = "$x" . " elevado a " . "$y" . " = " . pow($x,$y);
        echo"<h3>Potencia: </h3>";
    }
    if($operacion == "mayor"){
        echo "<h3>Mayor: </h3>";
        if($x>$y) $solucion = "$x" . " es mayor que " . "$y";
        if($x<$y) $solucion = "$x" . " es menor que " . "$y";
        if($x==$y) $solucion = "$x" . " es igual que " . "$y";
    }

    echo $solucion;

?>