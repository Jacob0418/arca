<?php

//print_r($_POST);

$nom_clasif = $_POST['nombre_clasificacion'];
$id_clasif = $_POST['id_clasificacion'];

include('..\connection\connection.php');

$query = "CALL p_upClasificacion('$nom_clasif', '$id_clasif')";
//"UPDATE clasificacion SET nombre_clasificacion = '$nom_clasif' WHERE id_clasificacion = '$id_clasif'";//

$result = mysqli_query($conn,$query);

header('location: ..\clasificacion.php');

?>