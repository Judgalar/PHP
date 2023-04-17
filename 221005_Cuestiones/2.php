<?php

// Pasos con los que compruebas y escribes si un valor numérico
//  entero N es primo o no. No debes usar funciones y debes usar una 
//  variable lógica para dejar de buscar divisores cuando aparezca uno. 


$N = 17;
$esPrimo = true;

for ($divisor = 2; $divisor < $N; $divisor++) {
  if ($N % $divisor == 0) {
    $esPrimo = false;
    break;
  }
}

if ($esPrimo) {
  echo "$N es primo";
} else {
  echo "$N no es primo";
}
?>
