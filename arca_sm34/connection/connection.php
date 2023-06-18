<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "arca";

$conn = new mysqli($hostname,$username,$password,$database);

if($conn -> connect_error){
    die("Error en la conexión a la base de datos | error : 
    . $conn -> connect_error");
}

//echo "La conexión fue exitosa";

//$conn -> close();

?>