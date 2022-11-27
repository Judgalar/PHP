<?php
    require 'conexion.php';

    $id = $_POST['id'];
    
    $borrar = " DELETE FROM Libros WHERE ID = '$id' ";
    $query = mysqli_query($conexion,$borrar);

    
    if($query) echo "<script>
        alert('Eliminado');
        
       </script>";
    else{
        echo "<script>
            alert('Error');
            
        </script>";
    }
    
    header("Location:../Index.html");

    

?>