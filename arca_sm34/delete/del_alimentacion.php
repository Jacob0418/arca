<?php

//print_r($_GET);

$id_alime = $_GET['id_alimentacion'];

include('..\connection\connection.php');

$query = "CALL p_delAlimentacion('$id_alime')";
//"DELETE FROM alimentacion WHERE id_alimentacion = '$id_alime'";

$result = mysqli_query($conn,$query);

header('location: ..\alimentacion.php');

?>