<?php
    $x = $_GET['valor1'];
    $y = $_GET['valor2'];
    $operacion = $_GET['operacion'];

    switch ($operacion){
        case "suma":
            $solucion = $x + $y;
            echo"<h3>Suma: </h3>";
            break;
        case "resta":
            $solucion = $x - $y;
            echo"<h3>Resta: </h3>";
            break;
        case "producto":
            $solucion = $x * $y;
            echo"<h3>Producto: </h3>";
            break;
        case "division":
            $solucion = $x / $y;
            echo"<h3>Division: </h3>";
            break;
        case "raiz":
            $solucion = "VALOR1 = " . sqrt($x) . ", VALOR2 = " . sqrt ($y);
            echo"<h3>Raíz: </h3>";
            break;
        case "modulo":
            $solucion = $x / $y;
            echo"<h3>Division: </h3>";
            break;
        case "potencia":
            $solucion = "$x" . " elevado a " . "$y" . " = " . pow($x,$y);
            echo"<h3>Potencia: </h3>";
            break;
        case "mayor":
            echo "<h3>Mayor: </h3>";
            if($x>$y) $solucion = "$x" . " es mayor que " . "$y";
            if($x<$y) $solucion = "$x" . " es menor que " . "$y";
            if($x==$y) $solucion = "$x" . " es igual que " . "$y";
            break;
    }

    echo $solucion;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora v1</title>
</head>
<body>
    <h1>Calculadora</h1>
    <div>
        <form action="calculadora.php" >
            
            Valor1 <input type="number" name="valor1"><br>
            Valor2 <input type="number" name="valor2"><br><br>

            Operación
            <select name="operacion" id="operacion">
                <option value="suma">Sumar</option>
                <option value="resta">Restar</option>
                <option value="producto">Multiplicar</option>
                <option value="division">Dividir</option>
                <option value="raiz">Raíz</option>
                <option value="potencia">Potencia</option>
                <option value="mayor">Mayor</option>
            </select>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </form>
    </div>
</body>
</html>