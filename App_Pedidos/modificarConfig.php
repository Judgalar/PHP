<?php
    require_once 'bd.php';
    $res = string_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
            height: 100%;
            margin: 0;
        }
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            background-color: #FF6363;
        }
    </style>
</head>
<body>
   <b>IP</b> <input type="text" value=<?=$res[0]?> >
   <b>Nombre</b> <input type="text" value=<?=$res[1]?> >
   <b>Usuario</b> <input type="text" value=<?=$res[2]?>>
   <b>Clave</b> <input type="text" value=<?=$res[3]?>>
</body>
</html>