<?php

// Instrucciones con las que se recorre un vector de valores reales
//  mostrando de forma alternativa los datos de inicio y fin: primero,
//   último, segundo, penúltimo, así hasta mostrar todos sin repetir ninguno.
//    Se supone que el vector ya está creado y con los datos almacenados. 

$vector = array(1.2, 3.4, 5.6, 7.8, 9.0);
$count = count($vector);
$inicio = 0;
$final = $count - 1;

while ($inicio <= $final) {
  if ($inicio == $final) {
    echo $vector[$inicio];
  } else {
    echo $vector[$inicio] . " " . $vector[$final] . " ";
  }
  $inicio++;
  $final--;
}
?>
