<!doctype html>
<html lang="en">

<head>
  <title>Alimentacion</title>
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
<nav class="navbar navbar-secondary bg-secondary bg-opacity-9 fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php">ARCA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-secondary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
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
  <div class="row justify-content-center align-items-center" style="height: 94vh">
  </header>
  <main>

  <div class="container">
  <!-- ========== Start FORM ========== -->

  <form action="insert\ins_alimentacion.php" method="post">
<div class="mb-3">
    <label for="input_tipo_alimento" class="form-label">Agregar Alimentación</label>
    <input name="tipo_alimento" type="text" class="form-control" id="input_tipo_alimento">
</div>
<div class="mb-3">
  <button type="submit" class="btn btn-secondary">Agregar</button>
  </div>
</form>
  
  <!-- ========== End FORM ========== -->
  <!-- ========== Start TABLE ========== -->

  <table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Alimentación</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include('connection\connection.php');
    $consulta = "CALL p_vrAlimentacion()";
    $resultado = mysqli_query($conn,$consulta);
    $c = 1;
    while($fila = mysqli_fetch_array($resultado)){
        ?>
        <tr>
    <th scope="row"><?php echo $c; ?></th>
      <td><?php echo $fila['tipo_alimento']?></td>
      <td><a href = "update\alimento.php?id_alimentacion=<?php echo $fila['id_alimentacion']?>">
      <i class="bi bi-arrow-up-circle-fill text-secondary"></i></a></td>
      <td><a href = "delete\del_alimentacion.php?id_alimentacion=<?php echo $fila['id_alimentacion']?>">
      <i class="bi bi-x-circle-fill text-secondary"></i></a></td>
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