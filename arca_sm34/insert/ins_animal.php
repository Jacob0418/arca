<?php

//print_r($_POST);

$nom_anim = $_POST['nombre_animal'];
$descr_anim = $_POST['descripcion_animal'];
$id_clasif = $_POST['id_clasificacion'];
$id_alim = $_POST['id_alimentacion'];
$id_hab = $_POST['id_habitat'];

include('..\connection\connection.php');

$query = "CALL p_insAnimal('$nom_anim','$descr_anim','$id_clasif','$id_alim','$id_hab')";
//"INSERT INTO animal (nombre_animal, descripcion_animal, id_clasificacion_id, id_alimentacion_id, id_habitat_id)//
//VALUES ('$nom_anim','$descr_anim','$id_clasif','$id_alim','$id_hab')";//

$result = mysqli_query($conn,$query);

header('location: ..\animal.php');

?>