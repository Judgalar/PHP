<?php
    require 'conexion.php';

    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fecha = $_POST['fecha'];
    $lengua = $_POST['lengua'];
    $editorial = $_POST['editorial'];
    $encuadernacion = $_POST['encuadernacion'];
  

    
    $insertar = "INSERT INTO Libros(ISBN,Titulo,Autor,Fecha,Lengua,Editorial,Encuadernacion) VALUES('$isbn','$titulo','$autor','$fecha','$lengua','$editorial','$encuadernacion')";
    $query = mysqli_query($conexion,$insertar);

    if($query){
        echo "<script> alert('Insertado'); </script>";
    } 

    header("Location:../Index.html");
    
    

    

    

    

?>