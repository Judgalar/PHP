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
    <title>App_Pedidos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body, html {
            height: 100%;
            padding: 0;
            margin: 0;
            background-color: #323232;
        }
        h1{
            color: #F05454;
        }
        .contenedor{
            display: flex; flex-direction: column; align-items: center; height: 100%; 
        }
        iframe{background-color: white;}
    </style>
</head>
<body>
    <div class="contenedor">
        <div style="display: flex; gap: 20px; padding: 10px;">
            <h1>APP PEDIDOS</h1>
            <div class="dropdown">
                <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                    </svg>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding: 20px;">
                    <span>
                        <center><h4>INFO BD</h4></center>
                    </span>
                    <center><table>
                        <tr>
                            <td>
                                <?= "<b>IP: </b>" .$res[0]?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= "<b>Nombre: </b>" .$res[1]?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= "<b>Usuario: </b>" .$res[2]?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?= "<b>Clave: </b>" .$res[3]?>
                            </td>
                        </tr>
                    </table></center>
                    
                    <li><a class="dropdown-item d-flex justify-content-center" href="#">
                        <button class="btn btn-danger" onclick="mostrarConfig()">
                            Modificar datos de acceso
                        </button>
                    </a></li>
                </ul>
            </div>
            
        </div>
        <div class="d-flex" style="width: 100%; height: 100%">
            <iframe src="login.php" frameborder="0" width="100%" height="100%"></iframe>
            <iframe src="modificarConfig.php" frameborder="0" id="config" style="display: none;"></iframe>
        </div>
        
    </div>
    <script>
        const config = document.getElementById('config');
        function mostrarConfig(){
            config.style.display = "flex";
        }
        
    </script>

</body>
</html>