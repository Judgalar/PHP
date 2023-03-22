<?php
// Iniciamos la sesión
session_start();

// Definimos los arrays de países y capitales
$Paises = array("España", "Francia", "Alemania", "Italia", "Portugal");
$Capitales = array("Madrid", "París", "Berlín", "Roma", "Lisboa");

// Comprobamos si ya hay un país aleatorio generado en sesión
if(!isset($_SESSION["indiceAleatorio"])){
  // Si no hay, generamos un país aleatorio
  $_SESSION["indiceAleatorio"] = rand(0, count($Paises)-1);
}

// Obtenemos el índice del país aleatorio de sesión y la capital correcta
$indiceAleatorio = $_SESSION["indiceAleatorio"];
$paisAleatorio = $Paises[$indiceAleatorio];
$capitalCorrecta = $Capitales[$indiceAleatorio];

// Comprobamos si se ha enviado el formulario
if(isset($_POST["submit"])){
  // Obtenemos la capital seleccionada en el menú desplegable
  $capitalSeleccionada = $_POST["capital"];

  // Comprobamos si la capital seleccionada es correcta
  if($capitalSeleccionada == $capitalCorrecta){
    echo "¡Correcto! La capital de ".$paisAleatorio." es ".$capitalCorrecta.".";
  }
  else{
    echo "Incorrecto. La capital de ".$paisAleatorio." es ".$capitalCorrecta.".";
  }

  // Eliminamos la variable de sesión para generar un nuevo país aleatorio en la próxima jugada
  unset($_SESSION["indiceAleatorio"]);

  // Añadimos un enlace para volver a jugar
  echo '<br><br><a href="'.$_SERVER['PHP_SELF'].'">Jugar de nuevo</a>';
}
else{
  // Mostramos el formulario para seleccionar la capital
  echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">';
  echo '<p>¿Cuál es la capital de '.$paisAleatorio.'?</p>';
  echo '<select name="capital">';
  foreach($Capitales as $capital){
    echo '<option value="'.$capital.'">'.$capital.'</option>';
  }
  echo '</select><br><br>';
  echo '<input type="submit" name="submit" value="Comprobar">';
  echo '</form>';
}
?>

