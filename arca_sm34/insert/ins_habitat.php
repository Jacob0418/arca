<?php

//print_r($_POST);

$nom_habitat = $_POST['nombre_habitat'];

include('..\connection\connection.php');

$query = "CALL p_insHabitat('$nom_habitat')";
//"INSERT INTO habitat (nombre_habitat) VALUES ('$nom_habitat')";//

$result = mysqli_query($conn,$query);

header('location: ..\habitat.php');

?>