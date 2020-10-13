<?php

session_start();

// Para la conexion utilizamos la biblioteca mysqli y la funcion connect() 
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'crud'
);
 
// if(isset($conn)){
//     echo "conexion exitosa!";
// }

?>