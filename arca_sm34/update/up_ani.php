<?php

//print_r($_POST);

$nom_anim = $_POST['nombre_animal'];
$descr_anim = $_POST['descripcion_animal'];
$id_clasif = $_POST['id_clasificacion'];
$id_alim = $_POST['id_alimentacion'];
$id_hab = $_POST['id_habitat'];
$id_anim = $_POST['id_animal'];

include('..\connection\connection.php');

$query = "CALL p_upAnimal('$nom_anim','$descr_anim','$id_clasif','$id_alim','$id_hab ','$id_anim')";
//"UPDATE animal SET nombre_animal = '$nom_anim', descripcion_animal = '$descr_anim', id_clasificacion_id = '$id_clasif',
//id_alimentacion_id = '$id_alim', id_habitat_id = '$id_hab'
//WHERE id_animal = '$id_anim'";

$result = mysqli_query($conn,$query);

header('location: ..\animal.php');

?>