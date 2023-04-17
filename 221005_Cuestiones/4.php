<?php


// Define la función FACTORIAL  que de manera recursiva devuelve el factorial
//  de un entero positivo. Pon un ejemplo de llamada a dicha función. 



    function factorial($n) {
        if ($n == 0) {
        return 1;
        } else {
        return $n * factorial($n - 1);
        }
    }
  

    echo factorial(3);
?>