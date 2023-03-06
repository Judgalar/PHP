<?php
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
