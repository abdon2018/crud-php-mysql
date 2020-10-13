<?php

include("db.php");

if(isset($_POST['guardar_tarea'])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    // consulta sql
    $query = "INSERT INTO tarea(titulo, descripcion) VALUES ('$titulo', '$descripcion')";

    // insertamos datos a la DB
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("Query Filed");
    }

    $_SESSION['mensaje'] = "tarea guardada satisfactoriamente";
    $_SESSION['mensaje_tipo'] = "success";

    header("location: index.php");
}
    
?>