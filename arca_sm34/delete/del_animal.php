<?php

//print_r($_GET);

$id_anim = $_GET['id_animal'];

include('..\connection\connection.php');

$query = "CALL p_delAnimal('$id_anim')";
//"DELETE FROM animal WHERE id_animal = '$id_anim'";

$result = mysqli_query($conn,$query);

header('location: ..\animal.php');

?>