<?php
    
    $xml = simplexml_load_file('configuracion.xml');
    

    $xml->ip = $_POST["ip"];
    $xml->nombre = $_POST["nombre"];
    $xml->usuario = $_POST["usuario"]; 
    $xml->clave = $_POST["clave"];
    
     if( $xml->asXML('configuracion.xml') ){
        echo 'Modificado' ;
        echo ' <script> window.parent.location.href="index.php"</script> ';
     }  else echo 'error, ¿Permisos de escritura?';

?>
   