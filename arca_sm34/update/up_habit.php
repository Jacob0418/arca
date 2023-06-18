<?php

//print_r($_POST);

$nom_habit = $_POST['nombre_habitat'];
$id_habit = $_POST['id_habitat'];

include('..\connection\connection.php');

$query = "CALL p_upHabitat('$nom_habit','$id_habit')";
//"UPDATE habitat SET nombre_habitat = '$nom_habit' WHERE id_habitat = '$id_habit'";//

$result = mysqli_query($conn,$query);

header('location: ..\habitat.php');

?>