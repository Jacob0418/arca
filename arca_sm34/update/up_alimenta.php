<?php

//print_r($_POST);

$nom_aliment = $_POST['tipo_alimento'];
$id_aliment = $_POST['id_alimentacion'];

include('..\connection\connection.php');

$query = "CALL p_upAlimentacion('$nom_aliment','$id_aliment')";
//"UPDATE alimentacion SET tipo_alimento = '$nom_aliment' WHERE id_alimentacion = '$id_aliment'";//

$resul = mysqli_query($conn,$query);

header('location: ..\alimentacion.php');

?>