<?php

//print_r($_GET);
$id_anim = $_GET['id_animal'];

include('..\connection\connection.php');

$query4 = "CALL p_vrdosAnimal($id_anim)";
$result4 = mysqli_query($conn,$query4);
$fila4 = mysqli_fetch_array($result4);

$conn -> close();

?>

<!doctype html>
<html lang="en">

<head>
  <title>Actualizar Animal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <div class="container">
  <main>
    <!-- ========== Start FORM ========== -->
<form action = "up_ani.php" method ="post">
  <div class="mb-3">
    <label for="input_nombre_animal" class="form-label">Agregar Animal</label>
    <input name="nombre_animal" type="text" class="form-control" id="input_nombre_animal" value = "<?php echo $fila4['nombre_animal']?>">
  </div>
  <div class="mb-3">
    <label for="input_descripcion_animal" class="form-label">Descripción animal</label>
    <input name="descripcion_animal" type="text" class="form-control" id="input_descripcion_animal" value = "<?php echo $fila4['descripcion_animal']?>">
  </div>
  <div class="input-group mb-3">
    <label class="input-group-text bg-danger text-white" for="id_clasificacion" >Clasificacion</label>
    <select class="form-select" id="id_clasificacion" name="id_clasificacion" required>
    <option value="<?php echo $fila['id_clasificacion_id']; ?>" selected><?php echo $fila4['nombre_clasificacion']; ?></option>

    <?php

    include('..\connection\connection.php');
    $query1 = "call arca.p_vrClasificacion()";
    $resul1 = mysqli_query($conn,$query1);

    while($fila = mysqli_fetch_array($resul1)){
      ?>
      <option value="<?php echo $fila['id_clasificacion']; ?>"><?php echo $fila['nombre_clasificacion']; ?></option>
      <?php
    }
      ?>

    </select>
    <input type ="hidden" value = "<?php echo $id_anim; ?>" name ="id_animal">
    </div>
<div class="input-group mb-3">
    <select class="form-select" id="id_alimentacion" name="id_alimentacion">
    <option value="<?php echo $fila['id_alimentacion_id']; ?>" selected><?php echo $fila4['tipo_alimento'] ?></option>
      <?php

      include('..\connection\connection.php');
      $query2 = "call arca.p_vrAlimentacion()";
      $resul2 = mysqli_query($conn,$query2);

      while($fila = mysqli_fetch_array($resul2)){
      ?>
      <option value="<?php echo $fila['id_alimentacion']; ?>"><?php echo $fila['tipo_alimento']; ?></option>
      <?php
      }
      ?>
    </select>
    <input type ="hidden" value = "<?php echo $id_anim; ?>" name ="id_animal">
    <label class="input-group-text bg-danger text-white" for="id_alimentacion">Alimentación</label>
</div>
<div class="input-group mb-3">
  <label class="input-group-text bg-danger text-white" for="id_habitat">Habitat</label>
  <select class="form-select" id="id_habitat" name="id_habitat">
  <option value="<?php echo $fila['id_habitat']; ?>" selected><?php echo $fila4['nombre_habitat'] ?></option>

  <?php

  include('..\connection\connection.php');
  $query3 = "call arca.p_vrHabitat()";
  $resul3 = mysqli_query($conn,$query3);

  while($fila = mysqli_fetch_array($resul3)){
    ?>
    <option value="<?php echo $fila['id_habitat']; ?>"><?php echo $fila['nombre_habitat']; ?></option>
    <?php
  }
    ?>
  
  </select>
  <input type ="hidden" value = "<?php echo $id_anim; ?>" name ="id_animal">
</div>
  <button type="submit" class="btn btn-danger">Agregar</button>
  </div>
</form>
    
    <!-- ========== End FORM ========== -->

  </main>
  </div>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>