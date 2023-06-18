<!doctype html>
<html lang="en">

<head>
  <title>Historial Clasificacion </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  <div>
      
      <nav class="navbar navbar-dark bg-dark bg-opacity-9 fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="..\index.php">ARCA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <div class="mb-3">
              <li>
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Historiales</h5>
              </div>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="clasificacion._log.php">Clasificación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="alimentacion_log.php">Alimentación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="habitat_log.php">Hábitat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="animal_log.php">Animales</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tablas
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="..\clasificacion.php">Clasificación</a></li>
                  <li><a class="dropdown-item" href="..\alimentacion.php">Alimentación</a></li>
                  <li><a class="dropdown-item" href="..\habitat.php">Hábitat</a></li>
                  <li><a class="dropdown-item" href="..\animal.php">Animales</a></li>
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
    <div class="container">
    <div class="row justify-content-center align-items-center" style="height: 110vh">
    <div class="mb-3">
    <h5 class="text-info">HISTORIAL CLASIFICACIÓN</h5>
<table class="table table-bordered">
<div class="mb-3">
<thead>
    <tr>
        <th scope="col" class="text-info">#</th>
        <th scope="col" class="text-info">Tipo de operacion</th>
        <th scope="col" class="text-info">ID de Clasificación</th>
        <th scope="col" class="text-info">Nombre de la Clasificación</th>
        <th scope="col" class="text-info">Fecha</th>
    </tr>
  </thead>
  <tbody>

<?php
    
    include('..\connection\connection.php');

    $query = "call arca.p_vrClasificacion_log()";
    $resul = mysqli_query($conn,$query);
    while($fila = mysqli_fetch_array($resul)){
        ?>
        <tr>
            <th scope="row" class="text-info"><?php echo $fila['id_clasificacion_log']; ?></th>
                <td><?php echo $fila['operacion']?></td>
                <td><?php echo $fila['id_clasificacion']?></td>
                <td><?php echo $fila['nombre_clasificacion']?></td>
                <td><?php echo $fila['fecha']?></td>
        </tr>
    <?php }
    ?>

    </tbody>
    </table>
    </div>
    </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.js"></script>

<script src="..\assets\js\datatables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>