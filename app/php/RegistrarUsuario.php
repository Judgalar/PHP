<?php
    


    if(isset($_POST['dni'])){
        require 'conexion.php';

        $dni = $_POST['dni'];

        if(isset($_POST['nombre'])) $nombre = $_POST['nombre'];
        else $nombre = "";
            
        if(isset($_POST['apellidos'])) $apellidos = $_POST['apellidos'];
        else $apellidos = "";
        
        if(isset($_POST['edad'])) $edad = $_POST['edad'];
        else $edad = 1;
        
        if(isset($_POST['telefono'])) $telefono = $_POST['telefono'];
        else $telefono = "";


        $insertar = "INSERT INTO Usuarios(DNI,Nombre,Apellidos,Edad,Telefono) VALUES('$dni','$nombre','$apellidos','$edad','$telefono')";
        $query = mysqli_query($conexion,$insertar);
    
        if($query){
            echo "<script>
                alert('Insertado');

            </script>";
        } 
        else{
            echo "<script>
                alert('Error');
                
            </script>";
        }
    }

    header("Location:../Index.html");
    

    

    

?>