<!doctype html>
<html lang="en">

<head>
  <title>Animales</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
<header>
<nav class="navbar navbar-danger bg-danger bg-opacity-9 fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php">ARCA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-danger" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h2 class="offcanvas-title text-light" id="offcanvasDarkNavbarLabel">Menú</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <div class="mb-3">
              <li>
              <h5 class="offcanvas-title text-light" id="offcanvasDarkNavbarLabel">Historiales</h5>
              </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="historial\clasificacion._log.php">Clasificación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="historial\alimentacion_log.php">Alimentación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="historial\habitat_log.php">Hábitat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="historial\animal_log.php">Animales</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tablas
                </a>
                <ul class="dropdown-menu dropdown-menu-ligth">
                  <li><a class="dropdown-item" href="clasificacion.php">Clasificación</a></li>
                  <li><a class="dropdown-item" href="alimentacion.php">Alimentación</a></li>
                  <li><a class="dropdown-item" href="habitat.php">Hábitat</a></li>
                  <li><a class="dropdown-item" href="animal.php">Animales</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    </div>
  </header>

  <main>
  <div class = "container">
  <div class="row justify-content-center align-items-center" style="height: 228vh">
  </header>
  <main>
    <div class="container">
  <!-- ========== Start FORM ========== -->

  <form action="insert\ins_animal.php" method="post">
<div class="mb-3">
    <label for="input_nombre_animal" class="form-label">Agregar Animal</label>
    <input name="nombre_animal" type="text" class="form-control" id="input_nombre_animal" required>
</div>
<div class="mb-3">
    <label for="input_descripcion_animal" class="form-label">Descripción animal</label>
    <input name="descripcion_animal" type="text" class="form-control" id="input_descripcion_animal">
</div>
<div class="input-group mb-3">
  <label class="input-group-text bg-danger text-white" for="id_clasificacion">Clasificacion</label>
  <select class="form-select" id="id_clasificacion" name="id_clasificacion" required>

    <?php

    include('connection\connection.php');
    $query1 = "CALL p_vrClasificacion()";
    $resul1 = mysqli_query($conn,$query1);

    while($fila1 = mysqli_fetch_array($resul1)){
      $id_clasif = $fila1['id_clasificacion'];
      $nom_clasif = $fila1['nombre_clasificacion'];
      ?>
      <option value="<?php echo $id_clasif; ?>"><?php echo $nom_clasif;?></option>
      <?php
    }
      ?>

    </select>
    </div>
<div class="input-group mb-3">
    <select class="form-select" id="id_alimentacion" name="id_alimentacion">
      <?php

      include('connection\connection.php');
      $query2 = "CALL p_vrAlimentacion()";
      $resul2 = mysqli_query($conn,$query2);

      while($fila2 = mysqli_fetch_array($resul2)){
        $id_alim = $fila2['id_alimentacion'];
        $nom_alim = $fila2['tipo_alimento'];
      ?>
      <option value="<?php echo $id_alim; ?>"><?php echo $nom_alim; ?></option>
      <?php
      }
      ?>
    </select>
    <label class="input-group-text bg-danger text-white" for="id_alimentacion">Alimentación</label>
</div>
<div class="input-group mb-3">
  <label class="input-group-text bg-danger text-white" for="id_habitat">Habitat</label>
  <select class="form-select" id="id_habitat" name="id_habitat">

  <?php

  include('connection\connection.php');
  $query3 = "call p_vrHabitat()";
  $resul3 = mysqli_query($conn,$query3);

  while($fila3 = mysqli_fetch_array($resul3)){
    $id_hab = $fila3['id_habitat'];
    $nom_hab = $fila3['nombre_habitat'];
    ?>
    <option value="<?php echo $id_hab; ?>"><?php echo $nom_hab; ?></option>
    <?php
  }
    ?>
  
  </select>
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-danger">Agregar</button>
  </div>
</form>
  
  <!-- ========== End FORM ========== -->
  <!-- ========== Start TABLA ========== -->

  <table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Animal</th>
      <th scope="col">Descripción animal</th>
      <th scope="col">Clasificación</th>
      <th scope="col">Alimentación</th>
      <th scope="col">Habitat</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include('connection\connection.php');
    $query4 = "CALL p_vrAnimal()";
    $resul4 = mysqli_query($conn,$query4);
    $c = 1;
    while($fila4 = mysqli_fetch_array($resul4)){
        ?>
        <tr>

          <th scope="row"><?php echo $c; ?></th>
          <td><?php echo $fila4['nombre_animal']?></td>
          <td><?php echo $fila4['descripcion_animal']?></td>
          <td><?php echo $fila4['nombre_clasificacion']?></td>
          <td><?php echo $fila4['tipo_alimento']?></td>
          <td><?php echo $fila4['nombre_habitat']?></td>
          <td><a href = "update\ani.php?id_animal=<?php echo $fila4['id_animal']?>">
          <i class="bi bi-arrow-up-circle-fill text-danger"></i></a></td>
          <td><a href = "delete\del_animal.php?id_animal=<?php echo $fila4['id_animal']?>">
          <i class="bi bi-x-circle-fill text-danger"></i></a></td>
        </tr>
    <?php $c++; }
    ?>
    
    </tbody>
</table>
  
  <!-- ========== End TABLE ========== -->

  </main>
  </div>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.js"></script>

<script src="assets/js/datatables.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>