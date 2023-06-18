<?php

//print_r($_POST);

$nom_alimen = $_POST['tipo_alimento'];

include('..\connection\connection.php');

$query = "CALL p_insAlimentacion('$nom_alimen')";
//"INSERT INTO alimentacion (tipo_alimento) VALUES ('$nom_alimen')";//

$resul = mysqli_query($conn,$query);

header('location: ..\alimentacion.php');

?>