<?php 
    function string_config($nombre, $esquema){
        $config = new DOMDocument();
        $config->load($nombre);
        $res = $config->schemaValidate($esquema);
        if ($res===FALSE){ 
        throw new InvalidArgumentException("Revise fichero de configuración");
        } 		
        $datos = simplexml_load_file($nombre);	
        $ip = $datos->xpath("//ip");
        $nombre = $datos->xpath("//nombre");
        $usu = $datos->xpath("//usuario");
        $clave = $datos->xpath("//clave");	
        
        $resul = [];
        $resul[] = $ip[0];
        $resul[] = $nombre[0];
        $resul[] = $usu[0];
        $resul[] = $clave[0];
        return $resul;
    }
    
    $res = string_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");

    echo $res[0];


    $xml = simplexml_load_file('configuracion.xml'); echo ' 1c ';
    

    $xml->ip = 'antonio'; echo '2';
    $xml->nombre = 'paco'; echo '2';
    
    $xml->asXML('configuracion.xml'); echo '3';

    

    // $res = string_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    // echo $res[0];
    
?>