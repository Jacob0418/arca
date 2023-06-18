<?php

//print_r($_GET);

$id_clasif = $_GET['id_clasificacion'];

include('..\connection\connection.php');

$query = "CALL p_delClasificacion('$id_clasif')";
//"DELETE FROM clasificacion WHERE id_clasificacion = '$id_clasif'";

$resul = mysqli_query($conn,$query);

header('location: ..\clasificacion.php');

?>