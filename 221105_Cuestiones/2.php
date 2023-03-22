<?php
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
