<?php
    require 'conexion.php';

    $dni = $_POST['dni'];
    
    $borrar = " DELETE FROM Usuarios WHERE DNI = '$dni' ";
    $query = mysqli_query($conexion,$borrar);

    if( isset($dni) ){
        if($query) echo "<script>
        alert('Eliminado');
        location.href = '../Index.html';
       </script>";
       else{
           echo "<script>
               alert('Error');
               location.href = '../Index.html';
           </script>";
       }
    }

    header("Location:../Index.html");

?>