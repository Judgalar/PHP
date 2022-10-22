<?php
    $nombre = $_GET['nombre'];
    $nota = $_GET['nota'];+
    $curso = $_GET['curso'];
    $lenguaje = $_GET['fav_language'];
    $bot = $_GET['cbox'];

    echo "Su nombre es ". $nombre .", su nota es ". $nota .", es de " . $curso . ", su lenguaje favorito es " .$lenguaje
        . ". " . $bot; 
?>