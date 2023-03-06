<?php

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