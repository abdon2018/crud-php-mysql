<?php

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tarea WHERE id = $id";
    $resultado = mysqli_query($conn, $query);

    if(!$resultado) {
        die("Query Failed");
    }

    $_SESSION['mensaje'] = "Tarea removida satisfactoriamente";
    $_SESSION['mensaje_tipo'] = 'danger';

    header("location: index.php");
}

?>