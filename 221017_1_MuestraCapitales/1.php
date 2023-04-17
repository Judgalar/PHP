<?php
// Puede incluir los distintos casos dentro del mismo programa o en diferentes. 
// Ejercicio con dos arrays escalares para paises y capitales y va mostrando las capitales de cada pais con for y con foreach.

// También con un array asociativo cuyas posiciones son los nombres de los países y el contenido el nombre de las capitales y los recorre y muestra con foreach. 

$paises = array("España", "Francia", "Italia", "Portugal");
$capitales = array("Madrid", "París", "Roma", "Lisboa");

// Recorrido con for
for ($i = 0; $i < count($paises); $i++) {
    echo "La capital de ".$paises[$i]." es ".$capitales[$i]."<br>";
}

echo '<hr>';

// Recorrido con foreach
foreach ($paises as $key => $pais) {
    echo "La capital de ".$pais." es ".$capitales[$key]."<br>";
}

echo '<hr>';

$paises_capitales = array(
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Roma",
    "Portugal" => "Lisboa"
);

// Recorrido con foreach
foreach ($paises_capitales as $pais => $capital) {
    echo "La capital de ".$pais." es ".$capital."<br>";
}

?>