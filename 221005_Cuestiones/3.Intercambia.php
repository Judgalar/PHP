<?php

// Definición y ejemplo de llamada de la  función INTERCAMBIA
//  que intercambia los valores de dos variables externas que recibe como parámetros. 


    $x = 1 ; 
    $y = 2;

    function intercambia( &$valor1 , &$valor2 ){
        $auxiliar = $valor1;
        $valor1 = $valor2;
        $valor2 = $auxiliar;
    }

    intercambia($x,$y);
    echo $x;
    echo $y;
?>