<?php
    require 'conexion.php';

    $dni = $_POST['dni'];
    $id = $_POST['id'];
    
    $prestar = " UPDATE Usuarios SET Libro='$id' WHERE DNI='$dni' ";
    $query = mysqli_query($conexion,$prestar);

    
    if($query) echo "<script>
        alert('Correcto');
       </script>";
    else{
        echo "<script>
            alert('Error');
        </script>";
    }
    
    header("Location:../Index.html");
    

?>