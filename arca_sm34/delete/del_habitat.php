<?php

//print_r($_GET);

$id_habit = $_GET['id_habitat'];

include('..\connection\connection.php');

$query = "CALL p_delHabitat('$id_habit')";
//"DELETE FROM habitat WHERE id_habitat = '$id_habit'";//

$resul = mysqli_query($conn,$query);

header('location: ..\habitat.php');

?>