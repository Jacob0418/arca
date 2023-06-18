<?php

//print_r($_POST);

$nom_clasi = $_POST['nombre_clasificacion'];

include('..\connection\connection.php');

$query = "CALL p_insClasificacion('$nom_clasi')";
//"INSERT INTO clasificacion (nombre_clasificacion) VALUES ('$nom_clasi')";//

$result = mysqli_query($conn,$query);

header('location: ..\clasificacion.php');

?>